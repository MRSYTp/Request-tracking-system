<?php 

namespace app\models;
if(!defined('TRACK_PATH')){
    echo "permision denid!";
    die();
}
use app\services\validation;
use PDO;

class userModel extends baseModel {
    
    protected string $table = 'users';
    private ?validation $validation = null; // وابستگی به Validation



    // متدی برای تزریق کلاس Validation
    public function setValidation(validation $validation): void {
        $this->validation = $validation;
    }



    public function isEmailExists(string $email): bool {

        $sql = "SELECT * FROM {$this->table} WHERE email = :email";
        $stmt = $this->query($sql, ['email' => $email]);
        return $stmt->fetch() > 0;

    }


    public function showError(){
        
        if ($this->validation->hasErrors()) {
            return $this->validation->getErrors();
        }
    }

    
    public function register(string $name, string $email, string $password) : bool {
        
        if ($this->validation->validatePassword($password) && $this->validation->validateEmail($email)) { 
            // هش کردن رمز عبور
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            // افزودن کاربر به دیتابیس
            $sql = "INSERT INTO {$this->table} (username, email, password) VALUES (:username, :email, :password)";
            $this->query($sql, [
                ':username' => $name,
                ':email' => $email,
                ':password' => $hashedPassword,
            ]);
            return true;
        }else {
            return false;
        }

    }



    public function login(string $email, string $password): bool {

        // اعتبارسنجی ایمیل
        if (!$this->validation->validateEmail($email)) {
            echo $this->validation->getErrors();
            return false;
        }

        // پیدا کردن کاربر بر اساس ایمیل
        $sql = "SELECT * FROM {$this->table} WHERE email = :email";
        $stmt = $this->query($sql, ['email' => $email]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // بررسی وجود کاربر و اعتبارسنجی رمز عبور
        if ($user) {

            if (password_verify($password, $user['password'])) {
                // ذخیره اطلاعات در سشن
                $_SESSION['login'] = $user['id'];
                return true;
            }
        }

        return false;
    }



}

