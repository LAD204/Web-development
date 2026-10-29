<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header('location:login.php');
        exit();
    }
    if(isset($_GET['idsp']) & isset($_GET['idcty'])){
        $idsp = (int)$_GET['idsp'];
        $idcty = (int)$_GET['idcty'];
        include_once('../class/classsanpham.php');
        $p = new sanpham();
    }
    else{
        header('location:trangchu.php');
        exit();
    }
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
                    <li><a href="chitietsanpham.php?idcty=7">Điện thoại Apple</a></li>
                    <li><a href="chitietsanpham.php?idcty=8">Điện thoại Samsumg</a></li>
                    <li><a href="chitietsanpham.php?idcty=9">Điện thoại Xiaomi</a></li>
                </ul>
            </nav>
            <div class="chitietsanpham-content">
                <div class="title"><h4>CHI TIẾT SẢN PHẨM</h4></div>
                <?php 
                    $p->chiTietSanPham($idsp, $idcty);        
                    if(isset($_POST['order'])){
                        if(isset($_SESSION['user'])){
                            switch($_POST['order']){
                                case 'Đặt hàng':{
                                    $idkhachhang = $_SESSION['id'];
                                    $idsanpham = $_SESSION['idsp'];
                                     
                                    break;
                                }
                            }
                        }
                        else{
                            header('location:login.php');
                            exit();
                        }
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