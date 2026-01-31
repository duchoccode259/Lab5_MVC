<?php
namespace App\Models;

use PDO;
use PDOException;

class BaseModel {
    protected $pdo;
    protected $conn;

    public function __construct() {
        // Cấu hình database
        $host = 'localhost';
        $dbname = 'buoi2_php'; 
        $username = 'root';
        $password = '';

        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn = $this->pdo;
        } catch (PDOException $e) {
            die("Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage());
        }
    }
}