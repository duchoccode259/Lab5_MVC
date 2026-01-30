<?php
namespace App\Models;

class Student extends BaseModel {
    public function getAllStudents() {
        try {
            $sql = "SELECT id, fullname, student_code, email FROM students";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            return [];
        }
    }
}