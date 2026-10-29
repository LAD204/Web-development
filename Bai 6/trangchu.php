<?php
    session_start();
    if(isset($_SESSION['id']) && isset($_SESSION['user']) && isset($_SESSION['pass']) && isset($_SESSION['phanquyen'])){
        include_once('../class/clslogin.php');
        $p = new login();
        $p->confirmlogin($_SESSION['id'], $_SESSION['user'], $_SESSION['pass'], $_SESSION['phanquyen']);
    }
    else{
        header('location:login.php');
        exit();
    }
    include_once('../class/classsanpham.php');
    $p = new sanpham();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/trangchu-style.css">
</head>
<body>
    <div class="container" align="center">
        <header>
            <h3>BANNER WEBSITE</h3>
        </header>
        <div class="content">
            <nav>
                MENU
                <ul align="left">
                    <li><a href="trangchu.php">Trang chủ</a></li>
                    <li><a href="../Bai 5/bai 5-4.php">Công ty</a></li>
                    <li><a href="trangchu.php?idcty=7">Điện thoại Apple</a></li>
                    <li><a href="trangchu.php?idcty=8">Điện thoại Samsumg</a></li>
                    <li><a href="trangchu.php?idcty=9">Điện thoại Xiaomi</a></li>
                </ul>
            </nav>
            <div class="sanpham-content">
                <?php
                    if(isset($_GET['idcty'])){
                        $p->xuatDanhSachSanPhamTheoCty($_GET['idcty']);
                    }
                    else{
                        $p->xuatsanpham();
                    }
                ?>
            </div>
        </div>
        <footer>
            <h3>FOOTER WEBSITE</h3>
        </footer>
    </div>
</body>
</html>