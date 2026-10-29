<?php
    include_once('../class/clslogin.php');
    $p = new login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <table align="center" border="1">
            <tr align="center">
                <td colspan="2">
                    <strong>Đăng nhập</strong>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <label for="username">Username</label>
                </td>
                <td style="width: 100px;">
                    <input type="text" name="username" id="">
                </td>
            </tr>
            <tr align="center">
                <td>
                    <label for="password">Password</label>
                </td>
                <td style="width: 100px;">
                    <input type="password" name="password" id="">
                </td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <input type="submit" value="Đăng nhập" name="nut">
                </td>
            </tr>
        </table>
        <?php
            if(isset($_POST['nut'])){
                switch($_POST['nut']){
                    case 'Đăng nhập':{
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        if($p->mylogin($username, $password)==1){
                            header('location:trangchu.php');
                            exit();
                        }
                        else{
                            echo'<script>alert("Đăng nhập thất bại. Tài khoản hoặc mật khẩu bị sai");</script>';
                        }
                        break;
                    }
                }
            }
        ?>
    </form>
</body>
</html>