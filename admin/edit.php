<?php
include("./config/connect.php");
$id_thay_doi = $_GET['idtintuc'];
$sql = "SELECT idtintuc , tieude , noidung ,ngayviet, tenanh, tintuc.idhinhanh FROM tintuc , thuvien where tintuc.idhinhanh=thuvien.idhinhanh and tintuc.idtintuc = '$id_thay_doi'";
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
            <label for="validationCustom01" class="form-label">Tiêu đề</label>
            <input type="text" class="form-control" name="tieude" placeholder="Tên đăng nhập" value="<?php echo $row['tieude'];?>" required>
        </div>
        <div class="col-md-6">
		
            <label for="validationCustomUsername" class="form-label">Nội dung</label>
            <input type="text" style="" class="form-control" name="noidung" placeholder="Họ tên" value="<?php echo $row['noidung'];?>" required>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Ảnh</label>
            <input type="text" class="form-control" name="tenanh" placeholder="Địa chỉ" value="<?php echo $row['tenanh'];?>" required>
        </div>
			<input type="hidden" name="idanh" value=<?php echo $row['idhinhanh']?>>
        <?php
                }               
            ?>

        <div class="col-12">
            <button class="btn btn-primary mt-3" type="submit" name="save" value="save">Lưu</button>
        </div>
    </form>
    <?php
    if (isset($_POST['save'])) {
		$idanh = $_POST['idanh'];
        $tieude = $_POST['tieude'];
        $noidung = $_POST['noidung'];
        $tenanh = $_POST['tenanh'];
        $sql = "UPDATE tintuc,thuvien  SET tintuc.tieude='$tieude',tintuc.noidung='$noidung', thuvien.tenanh='$tenanh' WHERE tintuc.idtintuc = '$id_thay_doi' and thuvien.idhinhanh = '$idanh'";
        if ($conn->query($sql) === TRUE) {
            echo "thay dổi thành công";
            header("Location:./tintuc.php");
        } else {
            echo "Không thể thay đổi thông tin người dùng";
        }
    }

    ?>
</div>