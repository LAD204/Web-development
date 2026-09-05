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
            display: flex;
            height: 300px;
            width: 200px;
            border: 1px solid black;
        }
        .result{
            border: 1px solid black;
            display: flex;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="file[]" id="" multiple required>
            <input type="submit" name="sbupload" value="Upload file">  
        </form>
        <br>
        <h1>Ket qua sau khi upload file</h1>
        <div class="result">
            <?php
                if(isset($_POST["sbupload"]) && isset($_FILES["file"])){
                    for($i = 0; $i < count($_FILES["file"]["name"]); $i++){
                        echo '<div style = " border: 1px solid #c9c9c9; padding: 10px; height: 300px; margin: 5px;">';

                        $name_new = pathinfo($_FILES["file"]["name"][$i], PATHINFO_FILENAME). "_" . rand(100, 999);

                        $ext = pathinfo($_FILES["file"]["name"][$i], PATHINFO_EXTENSION);

                        $filename_new = $name_new . "." .$ext;

                        echo "Ten file ban dau: ".$_FILES["file"]["name"][$i];

                        echo "<br/> Ten file thay doi: ".$filename_new;

                        echo "<br/> Kich thuoc: ".round($_FILES["file"]["size"][$i]/1024)." KB";

                        echo "<br/> Loai file: ". $_FILES["file"]["type"][$i];

                        echo "<br /> Ten file tam: ".$_FILES["file"]["tmp_name"][$i];

                        echo "<p/>";

                        if($_FILES["file"]["error"][$i]> 0){
                            echo "Loi trong qua trinh upload";
                        }else{
                            move_uploaded_file($_FILES["file"]["tmp_name"][$i], "uploads/".$filename_new);
                            if($ext == 'png' || $ext == 'jpg' || $ext == 'gif'){
                                echo '<img src="uploads/'.$filename_new.'" width="200">';
                            }else{
                                echo 'Khong phai file anh';
                            }
                        }
                        echo '</div>';
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>