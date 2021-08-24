<!-- Delete-User -->
<?php
    include("./config/connect.php");
    $id_can_xoa = $_GET['id'];
    $sql = "DELETE FROM dangnhap WHERE iddangnhap = '$id_can_xoa'";
    $result = mysqli_query($conn,$sql);
    if($result == true){
        header("Location:http://localhost:8080/btl/phenikaa/admin/user.php");
        
    }else{
        echo "Xóa thất bại: " . mysqli_error($conn);
        header('location:http://localhost:8080/btl/phenikaa/admin/user.php');
    }

?>

<!-- Delete-Danhmuc -->
<?php
    include("./config/connect.php");
    $id_danh_muc = $_GET['id'];
    $sql = "DELETE FROM danhmuc WHERE iddanhmuc = '$id_danh_muc'";
    $result = mysqli_query($conn,$sql);
    if($result == true){
        header("Location:http://localhost:8080/btl/phenikaa/admin/danhmuc.php");
        
    }else{
        echo "Xóa thất bại: " . mysqli_error($conn);
        header('location:http://localhost:8080/btl/phenikaa/admin/danhmuc.php');
    }

?>

<!-- Delete-Tintuc -->
<?php
    include("./config/connect.php");
    $id_tintuc = $_GET['id'];
    $sql = "DELETE FROM tintuc WHERE idtintuc = '$id_tintuc'";
    $result = mysqli_query($conn,$sql);
    if($result == true){
        header("Location:http://localhost:8080/btl/phenikaa/admin/tintuc.php");
        
    }else{
        echo "Xóa thất bại: " . mysqli_error($conn);
        header('location:http://localhost:8080/btl/phenikaa/admin/tintuc.php');
    }

?>