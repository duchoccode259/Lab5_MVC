<?php
namespace App\Models;

use PDO;
use PDOException;

class BaseModel {
    protected $conn;

    public function __construct() {
        $host = 'localhost';
        $dbname = 'buoi2_php';
        $username = 'root';
        $password = '';

        try {
            $this->conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Lỗi kết nối CSDL: " . $e->getMessage();
        }
    }
}