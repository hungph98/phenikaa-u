<?php
    include("./config/connect.php");
    $id_can_xoa = $_GET['id'];
    $sql = "DELETE FROM dangnhap WHERE iddangnhap = '$id_can_xoa'";
    
    if(mysqli_query($conn,$sql)){
        echo "đến đây rồi 4";
        // header('location:http://localhost:8080/btl/phenikaa/admin/user.php');
    }else{
        echo "Xóa thất bại: " . mysqli_error($conn);
        header('location:http://localhost:8080/btl/phenikaa/admin/user.php');
    }
?>