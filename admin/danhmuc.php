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
                <form class="row g-3 needs-validation" action="" method="POST">
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Tên danh mục</label>
                        <input type="text" class="form-control" name="tendanhmuc" placeholder="Tên danh muc" required>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Mô tả</label>
                        <input type="text" class="form-control" name="mota" placeholder="Mô tả" required>
                    </div>
                    <div class="col-md-2">
                        <label for="validationCustom05" class="form-label">Ngày đăng</label>
                        <input type="text" class="form-control" name="ngaydang" placeholder="Ngày đăng" required>
                    </div>
                    <div class="col-md-2">
                        <label for="validationCustom05" class="form-label">Quyền</label>
                        <input type="text" class="form-control" name="dangnhap" required>
                    </div>
                    <div class="col-md-2">
                        <label for="validationCustom05" class="form-label">Trạng thái</label>
                        <select class="form-select" name="trangthai" required>
                            <option selected disabled value="">Choose...</option>
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button class="btn-primary mt-3" style="width: 90px;height: 35px;border: none;border-radius: 5px;" type="submit" name="luuthongtin" value="luuthongtin">Thêm</button>
                    </div>
                </form>
                <?php
                if (isset($_POST['luuthongtin'])) {
                    $tendanhmuc = $_POST['tendanhmuc'];
                    $mota = $_POST['mota'];
                    $ngaydang = $_POST['ngaydang'];
                    $dangnhap = $_POST['dangnhap'];
                    $trangthai = $_POST['trangthai'];

                    $sql = "INSERT INTO danhmuc (tendanhmuc, mota,iddangnhap, ngaydang,  , idtinhtrang)
                        VALUES ('$tendanhmuc','$mota','$dangnhap',' $ngaydang','$trangthai')";
                    // $result = mysqli_query($conn, $sql);
                    // $count = mysqli_num_rows($result);
                    if (mysqli_query($conn, $sql)) {
                        header("Location:http://localhost:8080/btl/phenikaa/admin/danhmuc.php");
                    } else {
                        echo "Không thể thêm danh mục mới";
                    }
                }

                ?>
            </div>
            <div class="row mt-5">
                <table class="table table-bordered border-dark table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">TT</th>
                            <th scope="col">Tên danh mục</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Ngày đăng</th>
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
                                    <td><a href="edit.php?id=<?php echo $row['id']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a href="delete.php?id=<?php echo $row['iddanhmuc']; ?>" onclick="return confirm('Bạn có thực sự muốn xóa ?' );">
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