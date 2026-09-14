<!DOCTYPE html>
<html>
<head>
    <title>Máy Tính Cơ Bản</title>
</head>
<body>
    <?php
        include("xuly.php");
        $p = new MayTinh();
    ?>
    <form action="" method="post">
        Số thứ nhất: <input type="number" name="so_a" required> <br><br>
        Số thứ hai: <input type="number" name="so_b" required> <br><br>
        
        <input type="submit" name="pheptinh" value="+">
        <input type="submit" name="pheptinh" value="-">
        <input type="submit" name="pheptinh" value="*">
        <input type="submit" name="pheptinh" value="/">
        <input type="submit" name="pheptinh" value="%">
    </form>
    <?php
        switch($_POST["pheptinh"]){
            case "+":
                $result = $p->tinhCong($_POST["so_a"], $_POST["so_b"]);
                echo "Đáp án: ".$result;
                break;
            case "-":
                 $result =$p->tinhTru($_POST["so_a"], $_POST["so_b"]);
                echo "Đáp án: ".$result;
                break;
            case "*":
                 $result =$p->tinhNhan($_POST["so_a"], $_POST["so_b"]);
                echo "Đáp án: ".$result;
                break;
            case "/":
                 $result =$p->tinhChia($_POST["so_a"], $_POST["so_b"]);
                echo "Đáp án: ".$result;
                break;
            case "%":
                 $result =$p->tinhChiaLayDu($_POST["so_a"], $_POST["so_b"]);
                echo "Đáp án: ".$result;
                break;
        }
    ?>
    <br>
</body>
</html>