<?php
include("./admin/config/connect.php");
$idBaiViet = '';
if (isset($_GET['id'])) {
    $idBaiViet = $_GET['id'];
} else {
    $idBaiViet = '5';
}
$getTinTuyenSinh = "SELECT idtintuc , tieude , noidung ,ngayviet, tenanh FROM tintuc , thuvien where tintuc.idhinhanh=thuvien.idhinhanh and tintuc.idtintuc='$idBaiViet'";
$result1 = mysqli_query($conn, $getTinTuyenSinh);
$row = mysqli_fetch_assoc($result1);
?>
<?php
include("./header.php");
?>

<!-- Secsion Tin tuyển sinh -->
<section class="container">
    <div class="row mt-5">
        <div class="col-8">
            <h3>Tin tuyển sinh</h3>
            <hr>
            <img class="mt-4" style="width:100%" src=<?php echo $row['tenanh'] ?>>
            <div class="content mt-4 bg-light"> 
                <h2 class="mt-4 text-center fs-4"><?php echo $row['tieude'] ?></h2>
                <p class="mt-4 container"><?php echo $row['noidung'] ?></p>
            </div>
        </div>
        <div class="col-4">
            <h3>Danh mục</h3>
            <hr>
            <div class="col">
                <div class="col p-1">
                    <button type="button" class="btn btn-light" style="width:100%"><a href="./baiviet.php" class="text-decoration-none text-black "><p class="text-start">Tin tuyển sinh </p></a></button>
                </div>
                <div class="col p-1">
                    <button type="button" class="btn btn-light" style="width:100%"><a href="#" class="text-decoration-none text-black"><p class="text-start">Tuyển sinh đại học chính quy</p></a></button>                    
                </div>
                <div class="col p-1">
                    <button type="button" class="btn btn-light" style="width:100%"><a href="#" class="text-decoration-none text-black"><p class="text-start">Tuyển sinh đại học liên thông</p></a></button>
                </div>
                <div class="col p-1">
                    <button type="button" class="btn btn-light" style="width:100%"><a href="#" class="text-decoration-none text-black"><p class="text-start">Tuyển sinh sau đại học </p></a></button>
                </div>
                <div class="col p-1">
                    <button type="button" class="btn btn-light" style="width:100%"><a href="#" class="text-decoration-none text-black"><p class="text-start">Chương trình đào tạo</p></a></button>
                </div>
                <div class="col p-1">
                    <button type="button" class="btn btn-light" style="width:100%"><a href="#" class="text-decoration-none text-black"><p class="text-start">Mẫu phiếu đăng kí xét tuyển </p></a></button>
                </div>
                <div class="col p-1">
                    <button type="button" class="btn btn-light" style="width:100%"><a href="#" class="text-decoration-none text-black"><p class="text-start">Tại sao chọn Phenikaa </p></a></button>
                </div>
                <div class="col p-1">
                    <button type="button" class="btn btn-light" style="width:100%"><a href="#" class="text-decoration-none text-black"><p class="text-start">Thông báo tuyển sinh </p></a></button>
                </div>
            </div>
            <br>
            <h3>Thông tin mới nhất</h3>
            <hr>
            <div class="col">
                <div class="col p-1"></div>
                <div class="col p-1"></div>
                <div class="col p-1"></div>
                <div class="col p-1"></div>
                <div class="col p-1"></div>
            </div>
            <br>
            <h3>Tin tức liên quan</h3>
            <hr>
            <div class="col">
                <div class="col p-1"></div>
                <div class="col p-1"></div>
                <div class="col p-1"></div>
                <div class="col p-1"></div>
                <div class="col p-1"></div>
            </div>
        </div>
    </div>

</section>



<!-- Footer -->
<?php
include("./footer.php");
?>