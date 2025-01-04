<?php 

use app\models\userModel;
use app\models\requestModel;
use app\services\validation;
use app\services\fileValidator;



// تنظیمات دیتابیس
$dsn = 'mysql:host=localhost;dbname=tracking_system.pro';
$username = 'root';
$password = '';

// ایجاد اتصال به دیتابیس
$pdo = new PDO($dsn, $username, $password);

// ایجاد مدل کاربر
$userModel = new userModel($pdo);

// ایجاد مدل اعتبارسنجی
$validation = new validation();
$userModel->setValidation($validation);

// ایجاد مدل درخواست
$requestModel = new requestModel($pdo);

// ایجاد مدل اعتبارسنجی
$maxFileSize = 5 * 1024 * 1024;   // 5MB
$fileValidator = new fileValidator($maxFileSize);
