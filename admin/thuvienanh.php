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
            <h2 class="mt-5 text-center ">Quản lí hình ảnh</h2>
            <div>
                <form class="row g-3 needs-validation" action="" method="POST">
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Link ảnh</label>
                        <input type="text" class="form-control" name="tenanh" placeholder="Link ảnh" required>
                    </div>
                    <div class="col-12">
                        <button class="btn-primary mt-3" style="width: 90px;height: 35px;border: none;border-radius: 5px;" type="submit" name="luuthongtin" value="luuthongtin">Thêm</button>
                    </div>
                </form>
                <?php
                if (isset($_POST['luuthongtin'])) {
                    $tenanh = $_POST['tenanh'];
                    $ngaydang = date("Y-m-d");

                    $sql = "INSERT INTO thuvien (tenanh, ngaydang)
                        VALUES ('$tenanh' ,'$ngaydang')";
                        
                        $result = mysqli_query($conn, $sql);
                    // if (mysqli_query($conn, $sql)) {
                    //     header("Location:http://localhost/phenikaa_test2_BTL/admin/thuvienanh.php");
                    // } else {
                    //     echo "Không thể thêm ảnh mới";
                    // }
                }

                ?>
            </div>
            <div class="row mt-5">
                <table class="table table-bordered border-dark table-striped table-hover ">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">TT</th>
                            <th scope="col">Link ảnh</th>
                            <th scope="col">Ngày đăng</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</tsh>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //Lặp lấy dữ liệu và hiển thị ra bảng
                        //Bước 02: Thực hiện Truy vấn
                        $sql = "SELECT * FROM thuvien";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td> <?php echo $row['tenanh']; ?> </td>
                                    <td> <?php echo $row['ngaydang']; ?></td>
                                    <td><a href="editHinhAnh.php?idhinhanh=<?php echo $row['idhinhanh']; ?>"><i class="bi bi-pencil-fill"></i></a></td>
                                    <td><a href="delete.php?idhinhanh=<?php echo $row['idhinhanh']; ?>" 
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
