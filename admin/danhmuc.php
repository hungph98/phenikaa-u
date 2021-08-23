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
            <h2 class="mt-5 text-center ">Quản lí danh mục</h2>
            <div>
                <a href="add-user.php" class="btn btn-primary mt-5 ">Thêm người danh mục</a>
            </div>
            <div class="row mt-5">
                <table class="table table-bordered border-dark ">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">TT</th>
                            <th scope="col">Tên danh mục</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Ngày đăng</th>
                            <th scope="col">Thêm</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</tsh>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //Lặp lấy dữ liệu và hiển thị ra bảng
                        //Bước 02: Thực hiện Truy vấn
                        $sql = "SELECT * FROM danhmuc";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td> <?php echo $row['tendanhmuc']; ?> </td>
                                    <td> <?php echo $row['mota']; ?></td>
                                    <td> <?php echo $row['ngaydang']; ?></td>
                                    <td><a href="update.php?myid=<?php echo $row['id']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a href="change.php?myid<?php echo $row['id']; ?>"><i class="bi bi-pencil-fill"></i></a></td>
                                    <td><a href="delete.php?myid=<?php echo $row['id']; ?>"><i class="bi bi-archive-fill"></i></a></td>
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
