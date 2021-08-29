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
            <h2 class="mt-5 text-center ">Quản lí quyền</h2> <br>
            <div>
                <form class="row g-3 needs-validation" action="" method="POST">
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Tên Quyền</label>
                        <input type="text" class="form-control" name="tenquyen" placeholder="Tên danh muc" required>
                    </div>                             
                    <div class="col-12">
                        <button class="btn-primary mt-3" style="width: 90px;height: 35px;border: none;border-radius: 5px;" type="submit" name="luuthongtin" value="luuthongtin">Thêm</button>
                    </div>
                </form>
                <?php
                if (isset($_POST['luuthongtin'])) {
                    $tenquyen = $_POST['tenquyen'];
                   

                    $sql = "INSERT INTO phanquyen (tenquyen)
                        VALUES ('$tenquyen')";
                    $result = mysqli_query($conn, $sql);
                   
                }

                ?>
            </div>


            <div class="row mt-5">
                <table class="table table-bordered border-dark table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">TT</th>
                            <th scope="col">Tên quyền</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</tsh>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //Lặp lấy dữ liệu và hiển thị ra bảng
                        //Bước 02: Thực hiện Truy vấn
                        $sql = "SELECT * FROM phanquyen";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td> <?php echo $row['tenquyen']; ?></td>
                                    <td><a href="editPhanQuyen.php?iduser=<?php echo $row['idphanquyen']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a href="delete.php?iduser=<?php echo $row['idphanquyen']; ?>" 
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
