<?php
include("./config/connect.php");
session_start();
?>
<div class="row">
    <div class="col-3">
        <?php
        include("./component/header.php")
        ?>
    </div>
    <div class="col-9">
        <div id="main-main" class="container-fluid">
            <main>
                <form method="POST" action="">
                    <table>
                        <tr>
                            <td>Full Name</td>
                            <td>
                                <input type="text" name="txtFullName" placeholder="Enter Fullname">
                            </td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>
                                <input type="text" name="txtUser" placeholder="Enter username">
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>
                                <input type="email" name="txtEmail" placeholder="Enter Email">
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>
                                <input type="password" name="txtPass" placeholder="Enter Password">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="btnAddUser" value="Save" class="btn btn-success">
                            </td>
                        </tr>

                    </table>
                </form>
                <?php
                if (isset($_POST['btnAddUser'])) {
                    $fullName   = $_POST['txtFullName'];
                    $userName   = $_POST['txtUser'];
                    $email      = $_POST['txtEmail'];
                    $pass       = $_POST['txtPass'];
                    $pass_hash  = password_hash($pass, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO tbladmin (full_name, user_name, email, pass_word)
                            VALUES ('$fullName','$userName','$email',' $pass_hash')";
                    $result = mysqli_query($conn, $sql);
                    $count = mysqli_num_rows($result);
                    if (mysqli_query($conn, $sql)) {
                        echo "thêm thành công";
                        header("Location: http://localhost:8080/btl/phenikaa/admin/user.php");
                    }
                }

                ?>
            </main>
        </div>

    </div>
</div>