<?php
namespace app\services;

class validation {

    
    protected $errors = '';

    
    public function validateEmail(string $email): bool {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->errors = 'Invalid email format.';
            return false;
        }
        return true;
    }

    public function validatePassword(string $password): bool {
        if (strlen($password) < 8) {
            $this->errors = 'Password must be at least 8 characters.';
            return false;
        }
        return true;
    }

    public function getErrors(): string {
        return $this->errors;
    }

    public function hasErrors(): bool {
        return !empty($this->errors);
    }
}