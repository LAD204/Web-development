<?php
    include("login_method.php");
    $p = new Login();
    if($p->confirm_login()){
        echo"Chào mừng đến Trang chủ";
    }
    else{
        header("Location:dangky.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>