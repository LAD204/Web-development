<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["giatria"]) && isset($_POST["giatrib"])){
            $valuea = htmlspecialchars(trim($_POST["giatria"]));
            $valueb = htmlspecialchars(trim($_POST["giatrib"]));
            if(isset($_POST["phep"]) && $_POST["phep"]==="+"){
                $result = $valuea + $valueb;
                echo 'Kết quả là: '.$result;
            }
            elseif(isset($_POST["phep"]) && $_POST["phep"]==="-"){
                if($valuea < $valueb){
                    $result = $valueb - $valuea;
                    echo 'Kết quả là '.$result;
                }
                else{
                    $result = $valuea - $valueb;
                    echo 'Kết quả là '.$result;
                }
            }
            elseif(isset($_POST["phep"]) && $_POST["phep"]==="*"){
                $result = $valuea * $valueb;
                echo 'Kết quả là: '.$result;
            }
            else{
                $result = $valuea / $valueb;
                echo 'Kết quả là: '.$result;
            }
        }
    }
?>