<?php
    if($_SERVER["REQUEST_METHOD"]=="GET"){
        if(isset($_GET["ten"]) & isset($_GET["tuoi"])){
            $ten = htmlspecialchars(trim($_GET["ten"]));
            $tuoi = $_GET["tuoi"];
            echo '
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
                            justify-content: center;
                            align-items: center;
                            height: 100vh;
                            width: 100%;
                        }
                        ul{
                            list-style: none;
                        }
                    </style>
                </head>
                <body>
                    <div class="container">'
                        .'Xin chào '.$ten.' - '.$tuoi.' tuổi'.
                    '</div>
                </body>
                </html>
            ';
        }
    }
?>