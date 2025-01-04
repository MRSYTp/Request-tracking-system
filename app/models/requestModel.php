<?php 
namespace app\models;
if(!defined('TRACK_PATH')){
    echo "permision denid!";
    die();
}
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


    public function getRequests(int $status = null): array
    {
        $condition = '';
        if (isset($status)) {
            $condition = 'WHERE status = :status';
        }
        $sql = "SELECT * FROM {$this->table} $condition ORDER BY priority DESC, created_at DESC";
        $stmt = $this->query($sql, isset($status) ? ['status' => $status] : [] );
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }


    public function getRequestCountByCategoryID(int $category_id, int $status = null) : int
    {
        $condition = '';
        $executeSection = ['category' => $category_id];
        if (isset($status)) {
            $condition = 'AND status = :status';
            $executeSection = ['category' => $category_id , 'status' => $status];
        }
        $sql = "SELECT * FROM {$this->table} WHERE category = :category $condition";
        $stmt = $this->query($sql, $executeSection);
        $result =  $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return count($result);
    }


    public function getRequestCountByPriorityID(int $priority_id, int $status = null) : int
    {
        $condition = '';
        $executeSection = ['priority' => $priority_id];
        if (isset($status)) {
            $condition = 'AND status = :status';
            $executeSection = ['priority' => $priority_id , 'status' => $status];
        }
        $sql = "SELECT * FROM {$this->table} WHERE priority = :priority $condition";
        $stmt = $this->query($sql, $executeSection);
        $result =  $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return count($result);
    }


    public function requestToggleStatus(int $id) : int {
        $sql = "UPDATE {$this->table} SET status = 1 - status WHERE id = :id ";
        $stmt = $this->query($sql, [':id' => $id]);
        return $stmt->rowCount();
    }
}