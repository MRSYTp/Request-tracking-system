<?php 
require '../bootstrap/init.php';

if (isset($_POST['reqid']) && is_numeric($_POST['reqid'])) {

    var_dump($requestModel->requestToggleStatus($_POST['reqid']));

}
