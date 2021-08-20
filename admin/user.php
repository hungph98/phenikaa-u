<?php
include("./config/connect.php");
session_start();
if (!isset($_SESSION['login'])) {
    header('location:http://localhost:8080/btl/admin/login.php');
}
include("./component/header.php");
?>
<div class="container">
    <main>
        <h2 class="mt-5">Quản lí người dùng</h2>
        <div>
            <a href="add-user.php" class="btn btn-primary mt-5">Thêm người dùng mới</a>
        </div>
        <div class="row main-content mt-5">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên đăng nhập</th>
                        <th scope="col">Họ tên</th> 
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Ngày kích hoạt</th>
                        <th scope="col">Ngày lập</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Thêm</th>
                        <th scope="col">Xóa</tsh>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //Lặp lấy dữ liệu và hiển thị ra bảng
                    //Bước 02: Thực hiện Truy vấn
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
                                <td> <?php echo $row['kichhoat']?></td>
                                <td> <?php echo $row['ngaylap']?></td>
                                <td><a href="changeUser.php?myid<?php echo $row['id']; ?>"><i class="bi bi-pencil-fill"></i></a></td>
                                <td><a href="editUser.php?myid=<?php echo $row['id']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a href="deleteUser.php?myid=<?php echo $row['id']; ?>"><i class="bi bi-archive-fill"></i></a></td>
                            </tr>
                    <?php
                            $i++;
                        }
                    }


                    ?>


                </tbody>
            </table>

        </div>
    </main>
</div>
