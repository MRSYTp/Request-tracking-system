<?php
require "bootstrap/init.php";

if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    unset($_SESSION['login']);
    redirect('auth.php?action=login');
}

if (!isset($_SESSION['login'])) {
    
    redirect('auth.php?action=login');

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $data = [
        'title' => $_POST['title'],
        'content' => $_POST['content'],
        'category' => $_POST['category'],
        'priority' => $_POST['priority'],
        'user_id' => $_SESSION['login']
    ];
    
    if (!empty($_FILES['attachment']['name'])) {
        $uploadDir = __DIR__ . '/uploads/';
        $fileName = uniqid() . '_' . $_FILES['attachment']['name'];
        $filePath = $uploadDir . $fileName;
        
    
        if (move_uploaded_file($_FILES['attachment']['tmp_name'], $filePath)) {
            $data['attachment'] = $fileName;
        } else {
            showErrorMessage('upload failed');
        }
    }

    if ($requestModel->createRequest($data)) {
        showSuccessMessage('Request created successfully');
    } else {
        showErrorMessage('Request creation failed');
    }
    
}

include "tpl/tpl-index.php";