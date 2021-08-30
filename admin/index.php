<?php
include("./config/connect.php");

?>
<div>
    <div class="row">
        <div class="col-3">
            <?php
            include("./component/header.php");
            ?>
        </div>
        <div class="col-9">
            <h1 class="text-center mt-5 mb-5">Quản lí ngươi dùng</h1>
            <div class="container">
                <table class="table table-bordered border-dark ">
                    <thead>
                        <tr>
                            <th scope="col">Người dùng</th>
                            <th scope="col">Danh mục</th>
                            <th scope="col">Phân quyền</th>
                            <th scope="col">Thư viện hình ảnh</th>     
                            <th scope="col">Tin tức</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h3>
                                    <?php
                                    $sql1 = "SELECT * FROM dangnhap";
                                    $result = mysqli_query($conn, $sql1);
                                    $count_users = mysqli_num_rows($result);
                                    echo $count_users;
                                    ?>
                                </h3>
                            </td>
                            <td>
                                <h3>
                                    <?php
                                    $sql2 = "SELECT * FROM danhmuc";
                                    $result = mysqli_query($conn, $sql2);
                                    $count_category = mysqli_num_rows($result);
                                    echo $count_category;
                                    ?>
                                </h3>
                            </td>
                            <td>
                                <h3>
                                    <?php
                                    $sql3 = "SELECT * FROM phanquyen";
                                    $result = mysqli_query($conn, $sql3);
                                    $count_food = mysqli_num_rows($result);
                                    echo $count_food;
                                    ?>
                                </h3>
                            </td>
                            <td>
                                <h3>
                                    <?php
                                    $sql5 = "SELECT * FROM thuvien";
                                    $result = mysqli_query($conn, $sql5);
                                    $count_invoice = mysqli_num_rows($result);
                                    echo $count_invoice;
                                    ?>
                                </h3>
                            </td>
                            
                            <td>
                                <h3>
                                    <?php
                                    $sql7 = "SELECT * FROM tintuc";
                                    $result = mysqli_query($conn, $sql7);
                                    $count_invoice = mysqli_num_rows($result);
                                    echo $count_invoice;
                                    ?>
                                </h3>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>