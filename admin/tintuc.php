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
            <h2 class="mt-5 text-center ">Quản lí trang tin</h2>
            
            <!-- <div>
                <a href="add-user.php" class="btn btn-primary mt-5 ">Thêm trang tin</a>
            </div> -->
            <div class="row mt-5">
                <table class="table table-bordered border-dark table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">TT</th>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Nội dung</th>
                            <th scope="col">Ngày đăng</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</tsh>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //Lặp lấy dữ liệu và hiển thị ra bảng
                        //Bước 02: Thực hiện Truy vấn
                        $sql = "SELECT * FROM tintuc";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td> <?php echo $row['tieude']; ?> </td>
                                    <td> <?php echo $row['noidung']; ?></td>
                                    <td> <?php echo $row['ngayviet']; ?></td>
                                    <td><a href="edit.php?myid<?php echo $row['id']; ?>"><i class="bi bi-pencil-fill"></i></a></td>
                                    <td><a href="delete.php?id=<?php echo $row['idtintuc']; ?>"
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
            <div>
                <!-- <a href="add-user.php" class="btn btn-primary mt-5 ">Thêm người dùng mới</a> -->
                <form class="row g-3 needs-validation" action="" method="POST">
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Tiêu đề</label>
                        <input type="text" class="form-control" name="tieude" placeholder="Tiêu đề" required>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Nội dung</label>
                        <input type="text" class="form-control" name="noidung" placeholder="Nội dung" required>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustomUsername" class="form-label">Ngày viết</label>
                        <input type="text" class="form-control" name="ngayviet" required>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustomUsername" class="form-label">Danh mục</label>
                        <input type="text" class="form-control" name="danhmuc" required>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustomUsername" class="form-label">Hình ảnh</label>
                        <input type="text" class="form-control" name="hinhanh" required>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustomUsername" class="form-label">Người xét</label>
                        <select class="form-select" name="dangnhap" required>
                            <option selected disabled value="">Choose...</option>
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustomUsername" class="form-label">Tình trạng</label>
                        <select class="form-select" name="tinhtrang" required>
                            <option selected disabled value="">Choose...</option>
                            <option>Đã xét duyệt</option>
                            <option>Chưa xét duyệt</option>
                        </select>
                    </div>

                    </div>
                    <div class="col-12" >
                        <button class="btn btn-primary mt-3" type="submit" name="luuthongtin" value="luuthongtin">Thêm</button>
                    </div>
                </form>
                <?php
                if (isset($_POST['luuthongtin'])) {
                    $tieude = $_POST['tiêude'];
                    $noidung = $_POST['noidung'];
                    $ngayviet = $_POST['ngayviet'];
                    $danhmuc = $_POST['danhmuc'];
                    $hinhanh = $_POST['hinhanh'];
                    $dangnhap = $_POST['dangnhap'];
                    $tinhtrang = $_POST['tinhtrang'];

                    $sql = "INSERT INTO tintuc (tieude, noidung, ngayviet, iddanhmuc , idhinhanh,iddangnhap,idtinhtrang)
                            VALUES ('$tieude','$noidung','$ngayviet',' $danhmuc','$hinhanh','$dangnhap','$tinhtrang')";
                    // $result = mysqli_query($conn, $sql);
                    // $count = mysqli_num_rows($result);
                    if (mysqli_query($conn, $sql)) {
                        header("Location:http://localhost:8080/btl/phenikaa/admin/tintuc.php");
                    }else{
                        echo "Không thể thêm tin tức mới";
                    }
                }

                ?>
            </div>
        </div>
    </div>
</div>
