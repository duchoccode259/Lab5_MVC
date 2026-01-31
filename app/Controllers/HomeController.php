<?php
namespace App\Controllers;

use App\Models\Student;
use Faker\Factory;

class HomeController {
    public function index() {
        $message = "Chào mừng đến với MVC!";
        
        $students = (new Student())->getAllStudents();
        $studentInfo = "Tìm thấy " . count($students) . " sinh viên trong cơ sở dữ liệu.";

        $faker = Factory::create();
        $fakeUser = [
            'name' => $faker->name,
            'address' => $faker->address,
            'email' => $faker->email
        ];

        // 2. Gọi View
        include 'views/home.php';
    }
}