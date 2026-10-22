<?php
    session_start();
    include("login_method.php");
    $p = new Login();
?>
<?php
    if(isset($_POST["nut"])){
        if(isset($_POST["email"]) && isset( $_POST["password"])){
            $user = $_POST['email'];
            $pass = $_POST['password'];
            $p->mylogin($user, $pass);   
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        * {
            padding: 0;
            box-sizing: border-box;
            margin: 0;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            width: 700px;
            border: 1px solid black;
        }
        .header {
            background-color: #a9a9a9;
            padding: 15px;
            text-align: center;
        }
        .content-body {
            display: flex;
            flex-direction: row;
        }
        .nav {
            border-right: 1px solid black;
            width: 150px;
            padding: 15px;
        }
        .nav ul {
            list-style-type: none;
        }
        .nav ul li {
            margin-top: 10px;
        }
        .nav ul li a {
            text-decoration: none;
        }
        .nav ul li a:hover {
            text-decoration: underline;
        }
        .form {
            flex: 1;
            padding: 20px;
            text-align: center;
        }
        .form h3 {
            margin-bottom: 15px;
        }
        .form table {
            width: 100%;
            margin-bottom: 10px;
        }
        .form table td {
            padding: 5px;
            text-align: left;
        }
        .form table td label {
            display: inline-block;
            width: 80px;
        }
        .form table td input {
            width: 200px;
            padding: 4px;
            border-radius: 15px;
        }
        .checkbox-row {
            text-align: left;
            margin: 10px 0;
        }
        .btn-group {
            margin-top: 10px;
        }
        .btn-group button {
            padding: 6px 20px;
            margin: 0 5px;
            cursor: pointer;
        }
        .btn-dangnhap {
            background-color: black;
            color: white;
            border: none;
        }
        .btn-lamlai {
            background-color: white;
            border: 1px solid black;
        }
        footer {
            background-color: #a9a9a9;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>BANNER WEBSITE</h2>
        </div>
        <div class="content-body">
            <nav class="nav">
                <h4>Menu</h4>
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="dangky.php">Đăng ký</a></li>
                    <li><a href="#">Đăng nhập</a></li>
                </ul>
            </nav>
            <div class="form">
                <form action="" method="post">
                    <h3>THÔNG TIN ĐĂNG NHẬP</h3>
                    <table>
                        <tr>
                            <td><label for="email">Email</label></td>
                            <td><input type="email" name="email" id="email"></td>
                        </tr>
                        <tr>
                            <td><label for="password">Password</label></td>
                            <td><input type="password" name="password" id="password"></td>
                        </tr>
                    </table>
                    <div class="checkbox-row">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Nhớ thông tin đăng nhập</label>
                    </div>
                    <div class="btn-group">
                        <button class="btn-dangnhap" type="submit" name="nut">Đăng nhập</button>
                        <button class="btn-lamlai" type="reset">Làm lại</button>
                    </div>
                </form>
            </div>
        </div>
        <footer>
            <h4>Footer website</h4>
        </footer>
    </div>
</body>
</html>