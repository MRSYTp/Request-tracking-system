<?php 

namespace app\models;


use PDO;


abstract class baseModel {
    protected PDO $pdo;
    protected string $table;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    protected function query(string $sql, array $params = []): bool|\PDOStatement {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
    public function getByID(int $id) : bool|object {
        $sql = "SELECT * FROM {$this->table} WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}