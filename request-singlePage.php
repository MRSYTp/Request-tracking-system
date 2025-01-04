<?php 
require "bootstrap/init.php";

if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    unset($_SESSION['admin']);
    redirect('adm-form.php');
}

if (!isset($_SESSION['admin'])) {
    redirect('pageEroor.php');
}


if (isset($_GET['reqID']) && $_GET['reqID'] > 0) {

    if (is_numeric($_GET['reqID'])) {

        if ($requestModel->getByID($_GET['reqID'])) {

            $request = $requestModel->getByID($_GET['reqID']);

            $user = $userModel->getByID($request->user_id);

            $image_path = null;
            $file_path = null;
            if (!is_null($request->attachment)) {

                $white_List = ['jpg','png'];

                $file_name = $request->attachment;

                $tmp = explode('.', $file_name);
                $file_extension = end($tmp);

                if (in_array($file_extension,$white_List)) {
                    $image_path = TRACK_URL . '/uploads/' . $file_name;
                }else {
                    $file_path = TRACK_URL . '/uploads/' . $file_name;
                }
            }

        }else {
            redirect('pageEroor.php');
        }
    }else {
        redirect('pageEroor.php');
    }
}else {
    redirect('pageEroor.php');
}

include 'tpl/tpl-request-singlePage.php';