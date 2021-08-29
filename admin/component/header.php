<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location:index-login.php");
    die("bạn phải đăng nhập ");
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../css-admin/header.css">
  <title>Trang quản trị viên</title>
</head>

<body>
  <div>
    <div class="row">
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="admin.png" class="card-img-top">
          <ul class="list-group list-group-flush text-center">
            <li class="list-group-item">
              <button type="button" class=" btn-secondary" style="width:200px;height: 40px;border: none;border-radius: 5px;">
                <a href="./index.php" class="text-decoration-none text-white">Trang chủ</a>
              </button>
            </li>
            <li class="list-group-item">
              <button type="button" class=" btn-secondary" style="width:200px;height: 40px;border: none;border-radius: 5px;">
                <a href="./user.php" class="text-decoration-none text-white">Người dùng</a>
              </button>
            </li>
            <li class="list-group-item">
              <button type="button" class=" btn-secondary" style="width:200px;height: 40px;border: none;border-radius: 5px;">
                <a href="./danhmuc.php" class="text-decoration-none text-white">Danh mục</a>
              </button>
            </li>
            <li class="list-group-item">
              <button type="button" class=" btn-secondary" style="width:200px;height: 40px;border: none;border-radius: 5px;">
                <a href="./tintuc.php" class="text-decoration-none text-white">Tin tức</a>
              </button>
            </li>
            <li class="list-group-item">
              <button type="button" class=" btn-secondary" style="width:200px;height: 40px;border: none;border-radius: 5px;">
                <a href="./thuvienanh.php" class="text-decoration-none text-white">Thư viện hình ảnh</a>
              </button>
            </li>
            <li class="list-group-item">
              <button type="button" class=" btn-secondary" style="width:200px;height: 40px;border: none;border-radius: 5px;">
                <a href="./slide.php" class="text-decoration-none text-white">Trình chiếu</a>
              </button>
            </li>
            <li class="list-group-item">
              <button type="button" class="btn-secondary" style="width:200px;height: 40px;border: none;border-radius: 5px;">
                <a href="./phanquyen.php" class="text-decoration-none text-white">Phân quyền</a>
              </button>
            </li>
            <li class="list-group-item">
              <button type="button" class=" btn-secondary" style="width:200px;height: 40px;border: none;border-radius: 5px;">
                <a href="logout.php" class="text-decoration-none text-white">Đăng xuất</a>
              </button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
</body>

</html>