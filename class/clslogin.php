<?php
    include('tmdt_csdl_connect.php');
    class mylogin extends csdl{
        public function checklogin(string $username, string $password){
            $username = trim($username);
            $password = trim($password);

            $result = $this->ketqua("select * from taikhoan where username = '".$username."'");

            if($result !== 0){
                $row = mysqli_fetch_assoc($result);
                if($password !== '' && $password === $row['password']){
                    session_start();
                    $_SESSION['user'] = $username;
                    $_SESSION['password'] = $password;
                    header('location:../Bai 6/trangchu.php');
                    exit();
                }
            }
            echo '<script>alert("Tài khoản hoặc mật khẩu sai");</script>';
            return 0;
        }

        public function confirmlogin(string $username, string $password){
            $username = trim($username);
            $password = trim($password);

            $result = $this->ketqua("select * from taikhoan where username = '".$username."'");

            if($result !== 0){
                $row = mysqli_fetch_assoc($result);

                if($password !== '' && $password === $row['password']){
                    if(session_status() === PHP_SESSION_NONE){
                        session_start();
                    }
                    $_SESSION['user'] = $username;
                    header('location:../Bai 6/trangchu.php');
                    exit();
                }
            }

            echo '<script>alert("Tài khoản hoặc mật khẩu sai");</script>';
            return 0;
        }
    }
?>