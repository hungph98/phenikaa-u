<?php
include("./config/connect.php");
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
                        <label for="validationCustomUsername" class="form-label">ID Danh mục</label>
                        <input type="text" class="form-control" name="danhmuc" required>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustomUsername" class="form-label">ID Hình ảnh</label>
                        <input type="text" class="form-control" name="hinhanh" required>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustomUsername" class="form-label">ID Người xét </label>
                        <input type="text" class="form-control" name="dangnhap" required>
                    </div>                    
                    </div>
                    <div class="col-12" >
                        <button class="btn-primary mt-3" style="width: 90px;height: 35px;border: none;border-radius: 5px;" type="submit" name="luuthongtin" value="luuthongtin">Thêm</button>
                    </div>
                </form>
                <?php
                if (isset($_POST['luuthongtin'])) {
                    $tieude = $_POST['tieude'];
                    $noidung = $_POST['noidung'];
                    $ngayviet = date("Y-m-d");
                    $iddanhmuc = $_POST['danhmuc'];
                    $idhinhanh = $_POST['hinhanh'];
                    $iddangnhap = $_POST['dangnhap'];
                 

                    $sql = "INSERT INTO tintuc (tieude, noidung, ngayviet, iddanhmuc , idhinhanh,iddangnhap)
                            VALUES ('$tieude','$noidung','$ngayviet',' $iddanhmuc','$idhinhanh','$iddangnhap')";
                     $result = mysqli_query($conn, $sql);

                     
                }

                ?>
            </div>
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
                                    <td><a href="edit.php?idtintuc=<?php echo $row['idtintuc']; ?>"><i class="bi bi-pencil-fill"></i></a></td>
                                    <td><a href="delete.php?idtintuc=<?php echo $row['idtintuc']; ?>"
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
