<!DOCTYPE html>
<html>
<head>
    <title>Trang chủ MVC</title>
</head>
<body>
    <h1><?php echo $message; ?></h1>
    
    <h3>Thông tin từ Model Student:</h3>
    <p><?php echo $studentInfo; ?></p>

    <h3>Dữ liệu ngẫu nhiên từ Faker (F5 để thay đổi):</h3>
    <ul>
        <li>Họ tên: <?php echo $fakeUser['name']; ?></li>
        <li>Địa chỉ: <?php echo $fakeUser['address']; ?></li>
        <li>Email: <?php echo $fakeUser['email']; ?></li>
    </ul>
    <p><a href="index.php?page=product">Xem danh sách sản phẩm (Database)</a></p>
</body>
</html>