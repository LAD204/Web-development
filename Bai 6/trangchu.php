<?php
    include('../class/classsanpham.php');
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
                    <li><a href="http://">Trang chủ</a></li>
                    <li><a href="http://">Công ty</a></li>
                    <li><a href="http://">Điện thoại Apple</a></li>
                    <li><a href="http://">Điện thoại Samsumg</a></li>
                    <li><a href="http://">Điện thoại Xiaomi</a></li>
                </ul>
            </nav>
            <div class="sanpham-content">
                <?php
                    $p->xuatsanpham();
                ?>
            </div>
        </div>
        <footer>
            <h3>FOOTER WEBSITE</h3>
        </footer>
    </div>
</body>
</html>