<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" >
        <input type="hidden" name="hidden" value="<?php echo"uploads/".$_FILES["file"]["name"];?>" >
        <input type="submit" value="Upload" name="uploadfile">
        <input type="submit" value="Xoa" name="deleted">
   </form> 
   <?php
        if(isset($_POST["uploadfile"])){
            $name_file = $_FILES["file"]["name"];
            if($_FILES["file"]["error"] > 0){
                echo "Loi roi";
            }
            else{
                 move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/".$name_file);
                 echo"Upload file thanh cong";
                 echo "<br>";
            }
        }
        elseif(isset($_POST["deleted"])){
            unlink($_POST["hidden"]);
            echo "Xóa thành công";
        }
        else{
            echo "Xóa thất bại";
        }
   ?>
</body>
</html>