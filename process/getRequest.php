<?php 

require '../bootstrap/init.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['category']) && $_POST['category'] > 0) {

        $status = null;
        // بررسی اینکه مقدار تنها می‌تواند 0 یا 1 باشد
        if ($_POST['status'] === '0' || $_POST['status'] === '1') {
            // عملیات مورد نظر با مقدار معتبر
            $status = (int)$_POST['status'];
        }
        
        $requests = $requestModel->getRequestCountByCategoryID($_POST['category'] , $status);


        

        foreach ($requests as $request) {
            $request->created_at = verta($request->created_at)->format('Y.m.d');
        }
        echo json_encode($requests);
        exit;
    }

} else {
    echo "درخواست نامعتبر است. تنها درخواست‌های POST پذیرفته می‌شود.";
}