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
            justify-content: center;
            align-items: center;
        }
        table{
            padding: 20px;
        }

        .label{
            width: 40px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form">
            <form action="dangnhap.php" method="post">
                <h1>
                    thông tin đăng nhập
                </h1>
                <table>
                    <tr>
                        <td>
                            <div class="label"><label for="useremail">Email</label></div>
                            <input type="email" id="useremail" name="useremail">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="label"><label for="userpassword">Password</label></div>
                            <input type="password" id="userpassword" name="userpassword">
                        </td>
                    </tr>
                    <tr style="display: flex; justify-content: center; align-items: center;">
                        <td colspan="2">
                            <input type="submit" value="Gửi">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>