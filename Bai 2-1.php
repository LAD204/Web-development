<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="author" content="Lê Anh Dũng">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .contarner{
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="nhanbien.php" method="post">
            <h2>Nhập thông tin</h2><br>
            <label for="fullname">Nhập Họ và tên</label>
            <input type="text" id="fullname" name="fullname" required>
            <input type="submit" value="Gửi">
        </form>
    </div>
</body>
</html>