<!DOCTYPE html>
<html>

  <head>
    <title>Danh sách sinh viên</title>
    <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th,
    td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }
    </style>
  </head>

  <body>

    <h2>Danh sách sinh viên từ Database</h2>

    <a href="index.php?page=home">Quay lại trang chủ</a>
    <br><br>

    <table>
      <tr>
        <th>ID</th>
        <th>Họ tên</th>
        <th>Mã sinh viên</th>
        <th>Email</th>
        <th>Ngày tạo</th>
      </tr>

      <?php if (!empty($products)): ?>
      <?php foreach ($products as $row): ?>
      <tr>
        <td><?php echo htmlspecialchars($row['id']); ?></td>
        <td><?php echo htmlspecialchars($row['fullname']); ?></td>
        <td><?php echo htmlspecialchars($row['student_code']); ?></td>
        <td><?php echo htmlspecialchars($row['email']); ?></td>
        <td><?php echo htmlspecialchars($row['created_at']); ?></td>
      </tr>
      <?php endforeach; ?>
      <?php else: ?>
      <tr>
        <td colspan="5">Không có dữ liệu</td>
      </tr>
      <?php endif; ?>

    </table>

  </body>

</html>