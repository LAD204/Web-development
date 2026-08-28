<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "post" enctype="multipart/form-data">
        <input type="file" name="file" id="">
        <input type="submit" value="upload" name="upload">
    </form>
    <br>
    <h1>Kết quả sau khi upload file</h1>
    <?php
        if(isset($_POST["upload"])){
            echo "<pre>";
            var_dump($_FILES);
            echo "</pre>";
        }
        if(isset($_POST["upload"])){
            if(isset($_FILES["file"]) && !$_FILES["file"]["error"]){
                move_uploaded_file($_FILES["file"]["temp_name"], "./media".$_FILES["file"]["name"]);
            }
            else{
                return "error";
            }
        }
    ?>
</body>
</html>