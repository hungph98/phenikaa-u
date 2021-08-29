<?php
include("./config/connect.php");
$id_thay_doi = $_GET['iddanhmuc'];
$sql = "SELECT * FROM danhmuc where iddanhmuc = '$id_thay_doi'";
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
            <label for="validationCustom01" class="form-label">Danh mục </label>
            <input type="text" class="form-control" name="tendanhmuc" placeholder="Tên danh mục" value="<?php echo $row['tendanhmuc'];?>" required>
        </div>
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">Mô tả </label>
            <input type="text" class="form-control" name="mota" placeholder="Mô tả" value="<?php echo $row['mota'];?>" required>
        </div>
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">ID người đăng </label>
            <input type="text" class="form-control" name="idnguoidang" placeholder="Tên đăng nhập" value="<?php echo $row['iddangnhap'];?>" required>
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
        $tendanhmuc = $_POST['tendanhmuc'];
        $mota = $_POST['mota'];
        $idnguoidang = $_POST['idnguoidang'];
        $ngaydang = date("Y-m-d");
        $sql = "UPDATE danhmuc
                SET tendanhmuc = '$tendanhmuc',iddangnhap = '$idnguoidang',mota = '$mota',ngaydang = '$ngaydang'
                WHERE iddanhmuc = '$id_thay_doi'";
        if ($conn->query($sql) === TRUE) {
            echo "thay dổi thành công";
            header("Location:./danhmuc.php");
        } else {
            echo "Không thể thay đổi thông tin danh mục ";
        }
    }

    ?>
</div>