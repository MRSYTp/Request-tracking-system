<?php 
namespace app\services;
if(!defined('TRACK_PATH')){
    echo "permision denid!";
    die();
}
class fileValidator

{
    private array $allowedMimeTypes = [
        'image/jpeg',
        'image/png',
        'image/gif',
        'application/pdf',
        'application/msword',
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    ];

    private array $allowedExtensions = [
        'jpg', 'jpeg', 'png', 'gif', 'pdf', 'doc', 'docx', 'xlsx',
    ];

    private int $maxFileSize; // حداکثر اندازه فایل به بایت
    private string $errorMessage = '';

    public function __construct(int $maxFileSize = 2097152) // 2 مگابایت پیش‌فرض
    {
        $this->maxFileSize = $maxFileSize;
    }

    /**
     * بررسی فایل آپلود شده
     */
    public function validate(array $file): bool
    {
        // بررسی خطاهای فایل
        if ($file['error'] !== UPLOAD_ERR_OK) {
            $this->errorMessage = 'Error uploading the file.';
            return false;
        }

        // بررسی اندازه فایل
        if ($file['size'] > $this->maxFileSize) {
            $this->errorMessage = 'File size exceeds the maximum limit.';
            return false;
        }

        // بررسی MIME Type
        $fileMimeType = $this->getMimeType($file['tmp_name']);
        if (!in_array($fileMimeType, $this->allowedMimeTypes)) {
            $this->errorMessage = 'Invalid file type.';
            return false;
        }

        // بررسی پسوند فایل
        $fileExtension = $this->getFileExtension($file['name']);
        if (!in_array($fileExtension, $this->allowedExtensions)) {
            $this->errorMessage = 'Invalid file extension.';
            return false;
        }

        return true;
    }

    /**
     * دریافت نوع MIME فایل
     */
    private function getMimeType(string $filePath): string
    {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimeType = finfo_file($finfo, $filePath);
        finfo_close($finfo);

        return $mimeType;
    }

    /**
     * دریافت پسوند فایل
     */
    private function getFileExtension(string $fileName): string
    {
        return strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    }

    /**
     * دریافت پیام خطا
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }
}
