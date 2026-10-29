<?php
include_once("tmdt_csdl_connect.php");
class login extends csdl
{

    public function mylogin($user,$pass)
    {
        $pass=md5($pass);
        $sql="select iduser, username, password, phanquyen from TAIKHOAN where username='$user' and password='$pass' limit 1";
        $result=$this->ketqua($sql);
        if($result != 0)
        {   
            session_start();
            $row=$result->fetch_assoc();
            $id=$row['iduser'];
            $username=$row['username'];
            $password=$row['password'];
            $phanquyen=$row['phanquyen'];

            $_SESSION['id']=$id;
            $_SESSION['user']=$username;
            $_SESSION['pass']=$password;
            $_SESSION['phanquyen']=$phanquyen;

            return 1;
        }
        else
        {
            return 0;
        }
    }

    public function confirmlogin($id,$user,$pass,$phanquyen)
    {
        $sql="select iduser from taikhoan where iduser='$id' and username='$user' and password='$pass' and phanquyen='$phanquyen' limit 1";
        $result=$this->ketqua($sql);
        $num=$result->num_rows;
        if($num!=1)
        {
            header('location:../login/login.php');
            exit();
        }
    }
}
?>