<?php 
namespace app\models;

class requestModel extends baseModel
{
    protected string $table = 'requests'; // نام جدول مرتبط

    public function createRequest(array $data)
    {
        // آماده‌سازی کوئری SQL
        $sql = "INSERT INTO {$this->table} (user_id ,title, content, category, priority, attachment) 
                VALUES (:user_id, :title, :content, :category, :priority,  :attachment)";

        // اجرای کوئری
        return $this->query($sql, [
            'title' => $data['title'],
            'content' => $data['content'],
            'category' => $data['category'],
            'priority' => $data['priority'],
            'user_id' => $data['user_id'],
            'attachment' => $data['attachment'] ?? null
        ]);
    }

    // /**
    //  * دریافت درخواست‌ها بر اساس کاربر
    //  *
    //  * @param int $userId
    //  * @return array
    //  */
    // public function getRequestsByUser(int $userId): array
    // {
    //     $sql = "SELECT * FROM {$this->table} WHERE user_id = :user_id";
    //     $stmt = $this->query($sql, ['user_id' => $userId]);
    //     return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    // }

    // /**
    //  * دریافت یک درخواست بر اساس ID
    //  *
    //  * @param int $id
    //  * @return array|null
    //  */
    // public function getRequestById(int $id): ?array
    // {
    //     $sql = "SELECT * FROM {$this->table} WHERE id = :id";
    //     $stmt = $this->query($sql, ['id' => $id]);
    //     return $stmt->fetch(\PDO::FETCH_ASSOC) ?: null;
    // }
}