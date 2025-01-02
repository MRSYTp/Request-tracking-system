<?php 

require "bootstrap/init.php";


$Requests = $requestModel->getRequests();


if (isset($_GET['req']) && is_numeric($_GET['req'])) {
    $Requests = $requestModel->getRequests($_GET['req']);
}





include "tpl/tpl-adm-panel.php";