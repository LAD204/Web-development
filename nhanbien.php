<?php
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        if(isset($_POST["fullname"]) && !empty(trim($_POST["fullname"]))){
            $user = htmlspecialchars(trim($_POST["fullname"]));
            echo 'Xin chào '.$user;
        }
        else{
            echo 'Cúc';
        }
    }
?>