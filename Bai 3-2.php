<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: 1px solid black;
            height: 100vh;
            width: 100%;
        }
        .form{
            display flex;
            height: 300px;
            width: 200px;
            border: 1px solid black;
        }
        .result{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="picture" id="">
            <input type="submit" name="upload" value="Upload file">  
        </form>
        <br>
        <h1>Ket qua sau khi upload file</h1>
        <div class="result">
            <?php
                if(isset($_POST["upload"])){
                    if(isset($_FILES["picture"]) && !$_FILES["picture"]["error"]){
                        // hiển thị tên file 
                        $tenanh = $_FILES["picture"]["name"];
                        echo "<br>";
                        echo "Tên file ban đầu: ".$tenanh;
                        echo "<br>";
                        // hiển thị tên file thay đổi
                        $duoifile = pathinfo($_FILES["picture"]["name"], PATHINFO_EXTENSION);
                        $tenanhmoi = "anhdep"."_".rand(100, 999).".".$duoifile;
                        echo "Tên file thay đổi: ".$tenanhmoi;
                        echo "<br>";
                        // hiển thị kích thước file
                        $kichthuocfile = $_FILES["picture"]["size"];
                        echo "Kích thước: ".$kichthuocfile;
                        echo "<br>";
                        // hiển thị loại file
                        $loaifile = $_FILES["picture"]["type"];
                        echo "Loại file: ".$loaifile;
                        echo "<br>";
                        // hiển thị đường dẫn file tạm
                        $tmp = $_FILES["picture"]["tmp_name"];
                        echo "Tên file tạm: ".$tmp;
                        echo "<br>";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>