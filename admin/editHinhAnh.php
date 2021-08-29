<?php
include("./config/connect.php");
$id_thay_doi = $_GET['idhinhanh'];
$sql = "SELECT * FROM thuvien where idhinhanh = '$id_thay_doi'";
$result = mysqli_query($conn, $sql);
// echo"<prev>";
// print_r($result);
// echo"</prev>";
?>
<div class="container mt-5">
    <?php
    include("./component/header-edit.php")
    ?>

<?php
                while ($row = mysqli_fetch_array($result)) {
            ?>
    <h1 class="text-center mb-5">Chỉnh sửa thông tin</h1>
    <form class="row g-3 needs-validation" action="" method="POST">
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">Link ảnh</label>
            <input type="text" class="form-control" name="tenanh" placeholder="Tên đăng nhập" value="<?php echo $row['tenanh'];?>" required>
        </div>
        <?php
                }               
            ?>
        <div class="col-12">
            <button class="btn btn-primary mt-3" type="submit" name="save" value="save">Lưu</button>
        </div>
    </form>
    <?php
    if (isset($_POST['save'])) {
        $tenanh = $_POST['tenanh'];
        $ngaydang = date("Y-m-d");
        $sql = "UPDATE thuvien
                SET tenanh = '$tenanh',ngaydang = '$ngaydang'
                WHERE idhinhanh = '$id_thay_doi'";
        if ($conn->query($sql) === TRUE) {
            echo "thay dổi thành công";
            header("Location:./thuvienanh.php");
        } else {
            echo "Không thể thay đổi thông tin hình ảnh";
        }
    }

    ?>
</div>