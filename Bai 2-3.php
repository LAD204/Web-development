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
            height: 100vh;
            width: 100%;
            justify-content: center;
            align-items: center;
        }

        table{
            border: 1px solid black;
        }
        table input{
            width: 100px;
            padding: 10px;
            
        }
        table td{
            padding: 10px;
        }
        table tr{
            border-right: 1px solid black;
        }
        .button{
            width: 45px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="tinhtoan.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for="giatria">a = </label>
                        <input type="number" name="giatria" id="giatria">
                    </td>
                    <td>
                        <label for="giatrib">b = </label>
                        <input type="number" name="giatrib" id="giatrib">
                    </td>
                    <td>
                        <input class="button" type="submit" value="+" name="phep">
                        <input class="button" type="submit" value="-" name="phep">
                        <input class="button" type="submit" value="*" name="phep">
                        <input class="button" type="submit" value="/" name="phep">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>