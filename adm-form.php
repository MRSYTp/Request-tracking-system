<?php 

require 'bootstrap/init.php';


if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $password = $_POST['password'];
    if(array_key_exists($name, admPanel) && password_verify($password, admPanel[$name])) {
        $_SESSION['admin'] = $name;
        sleep(1);
        redirect('adm-panel.php');
    } else {
        showErrorMessage('نام کاربری یا رمز عبور اشتباه است.');
    }
}

include 'tpl/tpl-adm-form.php';