<?php 
require "bootstrap/init.php";


if ($_SERVER['REQUEST_METHOD'] =='POST') {

    $action = $_GET['action'] ?? '';
    $params = $_POST;

    if ($action == 'login' && !empty($action)) {

        if ($userModel->isEmailExists($params['email'])) {

            if ($userModel->login($params['email'], $params['password'])) {
                
                sleep (2);
                redirect('index.php');

            }else {

                showErrorMessage('Password is incorrect.');
            }
            
        }else {

            showErrorMessage('Email not found.');
        }
    }

    if ($action == 'register' && !empty($action)) {

            if (!$userModel->isEmailExists($params['email'])) {
                

                if ($userModel->register($params['name'], $params['email'], $params['password'])) {

                    showSuccessMessage('User registered successfully.');

                    sleep (2);

                    redirect('auth.php?action=login#signin');

                }else {
                    showErrorMessage($userModel->showError());
                }

            }else {
                showErrorMessage('Email already exists.');
            }

    }

    
}
include "tpl/tpl-auth.php";
