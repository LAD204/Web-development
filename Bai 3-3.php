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
        body{
            display: flex;
            justify-content: center;
            height: 100vh;
            width: 100%;
            align-items: center;
        }
        .container{
            display: flex;
            justify-content: center;
            min-height: 400px;
            border: 1px solid black;
            min-width: 800px;
        }
        form{
            display: flex;
            height: 100%;
            width: 100%;
            justify-content: left;
            flex-direction: column;
        }
        .make-color{
            height: 10%;
            width: 50%;
            background-color: gray;
            padding: 3px;
            margin: 5px;
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body>
     <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="make-color">
                <input type="file" name="file[]" id="" multiple>
                <input type="submit" value="Upload fie" name="uploadfile">
            </div>
            <?php
                echo "<h2 style='padding: 5px;'> Kết quả sau khi Upload file </h2>";
                if(isset($_POST["uploadfile"]) && isset($_FILES["file"])){
                    echo "<div style='display: flex; flex-wrap: wrap;'>";
                        for($i = 0; $i < count($_FILES["file"]["name"]); $i++){
                            echo"<div class='upload-card-warper' style='min-height: 90%; min-width: 400px; display: flex; padding: 5px;'>";
                                echo"<div class='upload-card' style='display: flex; min-height: 200px; flex-direction: column; justify-content: left; padding: 5px; border: 1px solid black;'>";
                                    echo"Tên file ban đầu: ".$_FILES["file"]["name"][$i];
                                    echo"<br>";
                                    $name = pathinfo($_FILES["file"]["name"][$i], PATHINFO_FILENAME) . "_" . rand(100, 999);
                                    $extension = pathinfo($_FILES["file"]["name"][$i], PATHINFO_EXTENSION);
                                    $new_name = $name . "." . $extension;
                                    echo "Tên file thay đổi: ".$new_name;
                                    echo"<br>";
                                    echo "Kích thước: ".round($_FILES["file"]["size"][$i]/1024)." KB";
                                    echo"<br>";
                                    echo "Loại file: ".$_FILES["file"]["type"][$i];
                                    echo"<br>";
                                    echo "Tên file tạm: ".$_FILES["file"]["tmp_name"][$i];
                                    echo"<br>";
                                    if($_FILES["file"]["error"][$i]>0){
                                        echo "Lỗi trong quá trình tải file";
                                    }else{
                                        if($extension == 'jpg' || $extension == 'png' || $extension == 'gif'){
                                            move_uploaded_file($_FILES["file"]["tmp_name"][$i], "uploads/".$new_name);
                                            echo "<br>";
                                            echo '<img style="width: 400px" src="uploads/'.$new_name.'">';                                      
                                        }else{
                                            echo "<span style='color: red;'>Khốn phải file ảnh</span>";
                                        }
                                    }
                                echo"</div>";
                            echo"</div>";
                        }
                    echo "</div>";
                }
            ?>
        </form>
     </div>
</body>
</html>