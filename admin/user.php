<?php
include("./config/connect.php");
session_start();
if (!isset($_SESSION['login'])) {
    // header('location:http://localhost:8080/btl/phenikaa/admin/login.php');
}
?>
<div class="row">
    <div class="col-3">
        <?php
        include("./component/header.php")
        ?>
    </div>
    <div class="col-9 ">
        <div class="container">
            <h2 class="mt-5 mb-5 text-center ">Quản lí người dùng</h2>
            <div>
                <form class="row g-3 needs-validation" action="" method="POST">
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Tên đăng nhập</label>
                        <input type="text" class="form-control" name="tendangnhap" placeholder="Tên đăng nhập" required>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" name="matkhau" placeholder="Mật khẩu" required>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustomUsername" class="form-label">Họ tên</label>
                        <input type="text" class="form-control" name="hoten" placeholder="Họ tên" required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" name="diachi" placeholder="Địa chỉ" required>
                    </div>
                    <div class="col-md-2">
                        <label for="validationCustom04" class="form-label">Kích hoạt</label>
                        <input type="text" class="form-control" name="kichhoat" placeholder="Ngày kích hoạt" required>
                    </div>
                    <div class="col-md-2">
                        <label for="validationCustom05" class="form-label">Ngày Lập</label>
                        <input type="text" class="form-control" name="ngaylap" placeholder="Ngày lập" required>

                    </div>
                    <div class="col-md-2">
                        <label for="validationCustom05" class="form-label">Phân quyền</label>
                        <select class="form-select" name="phanquyen" required>
                            <option selected disabled value="">Choose...</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button class="btn-primary mt-3" style="width: 90px;height: 35px;border: none;border-radius: 5px;" type="submit" name="luuthongtin" value="luuthongtin">Thêm</button>
                    </div>
                </form>
                <?php
                if (isset($_POST['luuthongtin'])) {
                    $tendangnhap = $_POST['tendangnhap'];
                    $matkhau = $_POST['matkhau'];
                    $hoten = $_POST['hoten'];
                    $diachi = $_POST['diachi'];
                    $kichhoat = $_POST['kichhoat'];
                    $ngaylap = $_POST['ngaylap'];
                    $phanquyen = $_POST['phanquyen'];
                    $pass_hash  = password_hash($matkhau, PASSWORD_DEFAULT);

                    $sql = "INSERT INTO dangnhap (tendangnhap, matkhau, hoten, diachi , kichhoat,ngaylap,idphanquyen)
                            VALUES ('$tendangnhap','$pass_hash','$hoten',' $diachi','$kichhoat','$ngaylap','$phanquyen')";
                    if (mysqli_query($conn, $sql)) {
                        header("Location:http://localhost:81/php/phenikaa-u/admin/user.php");
                    }else{
                        echo "Không thể thêm người dùng mới";
                    }
                }

                ?>
            </div>
            <div class="row mt-5">
                <table class="table table-bordered border-dark table-striped table-hover ">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">TT</th>
                            <th scope="col">Tên đăng nhập</th>
                            <th scope="col">Họ tên</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Kích hoạt</th>
                            <th scope="col">Ngày lập</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</tsh>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM dangnhap";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td> <?php echo $row['tendangnhap']; ?> </td>
                                    <td> <?php echo $row['hoten']; ?></td>
                                    <td> <?php echo $row['diachi']; ?></td>
                                    <td> <?php echo $row['kichhoat'] ?></td>
                                    <td> <?php echo $row['ngaylap'] ?></td>
                                    <td><a href="editUser.php?id=<?php echo $row['iddangnhap']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a href="delete.php?id=<?php echo $row['iddangnhap']; ?>" 
                                    onclick="return confirm('Bạn có thực sự muốn xóa ?' );">
                                    <i class="bi bi-archive-fill"></i></a></td>
                                </tr>
                        <?php
                                $i++;
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>