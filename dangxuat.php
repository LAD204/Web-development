
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>
        <?php
            session_start();
            if($_SESSION["ThongTin"]){
                echo "Gia tri bien session la: ".$_SESSION["ThongTin"].".<a href = 'Bai 4-1.php'>Dang xuat</a>";
            }
            else{
                header("Location:Bai 4-1.php");
            }
        ?>
    </h3>
</body>
</html>
<!-- Lôi thứ nhất là dangxuat.php không có session_start(); -->