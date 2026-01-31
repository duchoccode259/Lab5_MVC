<?php
require 'vendor/autoload.php';

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Models\Product;

// Cấu hình kết nối CSDL
$dsn = 'mysql:host=localhost;dbname=lab5_mvc;charset=utf8';
$username = 'root';
$password = ''; // Mật khẩu mặc định của XAMPP thường là rỗng

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Lỗi kết nối CSDL: " . $e->getMessage());
}

// Khởi tạo Model và Controller
$productModel = new Product($pdo);
$productController = new ProductController($productModel);

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;
    case 'product':
    case 'product-list':
        $productController->index();
        break;
    case 'product-add':
        $productController->create();
        break;
    case 'product-store':
        $productController->store();
        break;
    case 'product-edit':
        $productController->edit($_GET['id']);
        break;
    case 'product-update':
        $productController->update($_POST['id']);
        break;
    case 'product-delete':
        $productController->delete($_GET['id']);
        break;
    default:
        echo "404 - Page Not Found";
        break;
}