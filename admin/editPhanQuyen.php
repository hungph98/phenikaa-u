<?php
include("./config/connect.php");
$id_thay_doi = $_GET['iduser'];
$sql = "SELECT * FROM phanquyen where idphanquyen = '$id_thay_doi'";
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
            <label for="validationCustom01" class="form-label">Tên Quyền</label>
            <input type="text" class="form-control" name="tenquyen" placeholder="Tên quyền" value="<?php echo $row['tenquyen'];?>" required>
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
        $tenquyen = $_POST['tenquyen'];
        $sql = "UPDATE phanquyen
                SET tenquyen = '$tenquyen'
                WHERE idphanquyen = '$id_thay_doi'";
        if ($conn->query($sql) === TRUE) {
            echo "thay dổi thành công";
            header("Location:./phanquyen.php");
        } else {
            echo "Không thể thay đổi thông tin phân quyền";
        }
    }

    ?>
</div>