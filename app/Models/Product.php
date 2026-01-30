<?php
namespace App\Models;

class Product extends BaseModel {
    public function getAllProducts() {
        try {
            $sql = "SELECT * FROM students"; 
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            return [];
        }
    }
}