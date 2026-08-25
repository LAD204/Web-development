<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["useremail"])){
            $useremail = $_POST["useremail"];
            echo "Email cua ban la: ".$useremail;
            echo "<br>";
        }
        if(isset($_POST["userpassword"]) && isset($_POST["userpasswordagain"])){
            $userpassword = $_POST["userpassword"];
            $userpasswordagain = $_POST["userpasswordagain"];
            if($userpassword == $userpasswordagain){
                echo "Mat khau cua ban la: ".$userpassword;
                echo "<br>";
            }
            else{
                echo "Mat khau khong trung khop";
                echo "<br>";
            }
        }
        if(isset($_POST["usercity"])){
            if($_POST["usercity"]=='hn'){
                $usercity = $_POST["usercity"];
                echo "Que quan cua ban la: ".$usercity;
                echo "<br>";
            }
        }
        if(isset($_POST["username"])){
            $username = $_POST["username"];
            echo "Ten cua ban la: ".$username;
            echo "<br>";
        }
        if(isset($_POST["usertel"])){
            $usertel = $_POST["usertel"];
            echo "So dien thoai cua ban la: ".$usertel;
            echo "<br>";
        }
        if(isset($_POST["usergender"])){
            $usergender = $_POST["usergender"]; 
            echo "Gioi tinh cua ban la: ".$usergender;
            echo "<br>";
        }
        if(isset($_POST["userhobbies"])){
            $userhobbies = $_POST["userhobbies"]; 
            echo "So thich cua ban la: ";
            foreach($userhobbies as $value){
                echo $value.' ';
            }
            echo "<br>";
        }
        

    }
?>