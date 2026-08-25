<?php
    $adminemail = 'toibingu@gmail.com';
    $adminpassword = 'toibingu123';
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        if(isset($_POST["useremail"]) && isset($_POST["userpassword"])){
            $useremail = htmlspecialchars(trim($_POST["useremail"]));
            $userpassword = htmlspecialchars(trim($_POST["userpassword"]));
            if ($useremail === $adminemail && $userpassword === $adminpassword){
                echo '<span style="font-size: xx-large; color: red; font-size: 100px; align-text: center; height: 100%; width: 100%; display: flex; justify-content: center; align-items: center;">chào mừng trở lại admin</span>';
            }
            else{
                echo '<span style="font-size: xx-large; color: red; font-size: 500px; align-text: center; height: 100%; width: 100%; display: flex; justify-content: center; align-items: center;">Cúc</span>';
            }
        }
    }
?>