<!DOCTYPE html>
<html lang="vi">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <div class="container mt-5">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Danh sách sản phẩm</h1>
        <div>
          <a href="index.php?page=home" class="btn btn-secondary me-2">Trang chủ</a>
          <a href="index.php?page=product-add" class="btn btn-primary">Thêm mới</a>
        </div>
      </div>

      <div class="card shadow-sm">
        <div class="card-body">
          <table class="table table-hover table-bordered align-middle">
            <thead class="table-dark">
              <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá</th>
                <th scope="col" class="text-center">Hình ảnh</th>
                <th scope="col" class="text-center">Hành động</th>
              </tr>
            </thead>
            <tbody>
              <?php if (!empty($products)): ?>
              <?php foreach ($products as $product): ?>
              <tr>
                <td class="text-center"><?= htmlspecialchars($product['id']) ?></td>
                <td><?= htmlspecialchars($product['name']) ?></td>
                <td><?= number_format($product['price'], 0, ',', '.') ?> VNĐ</td>
                <td class="text-center">
                  <?php if (!empty($product['image'])): ?>
                  <img src="<?= htmlspecialchars($product['image']) ?>" alt="Ảnh SP" class="img-thumbnail"
                    style="width: 80px; height: 80px; object-fit: cover;">
                  <?php else: ?>
                  <span class="text-muted">No Image</span>
                  <?php endif; ?>
                </td>
                <td class="text-center">
                  <a href="index.php?page=product-edit&id=<?= $product['id'] ?>" class="btn btn-warning btn-sm">Sửa</a>
                  <a href="index.php?page=product-delete&id=<?= $product['id'] ?>" class="btn btn-danger btn-sm"
                    onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">Xóa</a>
                </td>
              </tr>
              <?php endforeach; ?>
              <?php else: ?>
              <tr>
                <td colspan="5" class="text-center text-muted py-4">Chưa có sản phẩm nào.</td>
              </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>

</html>