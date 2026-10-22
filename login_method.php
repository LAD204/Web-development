<?php
    class Login{
        public function mylogin($user, $pass){
            if($user == "admin@gmail.com" && $pass == "123456"){
                session_start();
                $_SESSION["user"] = $user;
                $_SESSION["pass"] = $pass;
                header("Location:Trangchu.php");
                exit();
            }
            else{
                header("Location:dangky.php");
                exit();
            }
        }
        public function confirm_login(){
            session_start();
            if(!isset($_SESSION['user']) || !isset($_SESSION['pass'])){
                return false;
            }
            else{
                return true;
            }
        }
    }
?>