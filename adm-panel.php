<?php 
require "bootstrap/init.php";


if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    unset($_SESSION['admin']);
    redirect('adm-form.php');
}


if (!isset($_SESSION['admin'])) {
    redirect('adm-form.php');
}

$Requests = $requestModel->getRequests();


if (isset($_GET['req']) && is_numeric($_GET['req'])) {
    $Requests = $requestModel->getRequests($_GET['req']);
}

include "tpl/tpl-adm-panel.php";