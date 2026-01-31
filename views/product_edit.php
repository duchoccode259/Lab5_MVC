<!DOCTYPE html>
<html lang="vi">

  <head>
    <meta charset="UTF-8">
    <title>Cập nhật sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <div class="container mt-5">
      <div class="card shadow-sm mx-auto" style="max-width: 600px;">
        <div class="card-header bg-warning text-dark">
          <h3 class="mb-0">Cập nhật sản phẩm</h3>
        </div>
        <div class="card-body">
          <form action="index.php?page=product-update" method="POST">
            <input type="hidden" name="id" value="<?= $product['id'] ?>">
            <div class="mb-3">
              <label class="form-label">Tên sản phẩm</label>
              <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($product['name']) ?>"
                required>
            </div>
            <div class="mb-3">
              <label class="form-label">Giá</label>
              <input type="number" name="price" class="form-control" value="<?= htmlspecialchars($product['price']) ?>"
                required>
            </div>
            <div class="mb-3">
              <label class="form-label">Link Hình ảnh</label>
              <input type="text" name="image" class="form-control" value="<?= htmlspecialchars($product['image']) ?>">
            </div>
            <div class="mb-3">
              <label class="form-label">Mô tả</label>
              <textarea name="description" class="form-control"
                rows="3"><?= htmlspecialchars($product['description']) ?></textarea>
            </div>
            <button type="submit" class="btn btn-warning">Cập nhật</button>
            <a href="index.php?page=product-list" class="btn btn-secondary">Hủy</a>
          </form>
        </div>
      </div>
    </div>
  </body>

</html>