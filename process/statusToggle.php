<?php 
require '../bootstrap/init.php';

if (isset($_POST['reqid']) && $_POST['reqid'] > 0) {

    echo $requestModel->requestToggleStatus($_POST['reqid']);

}
