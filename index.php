<?php
require "bootstrap/init.php";

use app\services\gravatar;


if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    unset($_SESSION['login']);
    redirect('auth.php?action=login');
}

if (!isset($_SESSION['login'])) {
    
    redirect('auth.php?action=login');

}


$currentUser = $userModel->getByID($_SESSION['login']);
$gravatar = new gravatar($currentUser->email,140,'retro');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $data = [
        'title' => $_POST['title'],
        'content' => $_POST['content'],
        'category' => $_POST['category'],
        'priority' => $_POST['priority'],
        'user_id' => $_SESSION['login']
    ];

    $hasError = false; // پرچم خطا

    if (!empty($_FILES['attachment']['name'])) {

        $file = $_FILES['attachment'];

        if ($fileValidator->validate($file)) {

            $uploadDir = __DIR__ . '/uploads/';
            $fileName = uniqid() . '_' . $_FILES['attachment']['name'];
            $filePath = $uploadDir . $fileName;

            if (move_uploaded_file($_FILES['attachment']['tmp_name'], $filePath)) {
                $data['attachment'] = $fileName;
            } else {
                showErrorMessage('File upload failed.');
                $hasError = true; // تنظیم پرچم خطا
            }

        } else {
            showErrorMessage($fileValidator->getErrorMessage());
            $hasError = true; // تنظیم پرچم خطا
        }
    }

    if (!$hasError) { // بررسی وجود خطا
        if ($requestModel->createRequest($data)) {
            showSuccessMessage('Request created successfully.');
        } else {
            showErrorMessage('Request creation failed.');
        }
    }
}



include "tpl/tpl-index.php";