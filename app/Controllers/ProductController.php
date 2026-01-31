<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController {
    public function index() {
        $productModel = new Product();
        $products = $productModel->all();

        include 'views/product_list.php';
    }

    public function create() {
        include 'views/product_add.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['name'] ?? '',
                'price' => $_POST['price'] ?? 0,
                'image' => $_POST['image'] ?? '',
                'description' => $_POST['description'] ?? ''
            ];

            if (!empty($data['name'])) {
                (new Product())->insert($data);
            }
            header("Location: index.php?page=product-list");
            exit;
        }
    }

    public function edit() {
        $id = $_GET['id'] ?? 0;
        $product = (new Product())->find($id);
        if ($product) {
            include 'views/product_edit.php';
        } else {
            header("Location: index.php?page=product-list");
        }
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'image' => $_POST['image'],
                'description' => $_POST['description']
            ];
            (new Product())->update($id, $data);
            header("Location: index.php?page=product-list");
        }
    }

    public function delete() {
        $id = $_GET['id'] ?? 0;
        (new Product())->delete($id);
        header("Location: index.php?page=product-list");
    }
}