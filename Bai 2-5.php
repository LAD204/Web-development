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
            margin: 0px auto;
            border: 1px solid #999;
            height: auto;
            width: 1000px;
        }
        header{
            height: 100px;
            width: 100%;
            background: #7df791;
            border-bottom: 1px bottom solid #999;
            text-align: center;
        }
        .main{
            display: flex;
            min-height: 400px;
        }
        nav{
            flex-grow: 1;
            border-right: 1px solid #999;
            padding: 10px;
        }
        .content{
            flex-grow: 4;
            padding: 10px;
            display: flex;
            justify-content: left;
            
        }

        footer{
            height: 60px;
            line-height: 60px;
            width: 1000px;
            background-color: #ccc;
            border-top: 1px solid #999;
            text-align: center;
        }
        ul{
            list-style: none;
        }
        label{
            width: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h2>BANNER WEBSITE</h2>
        </header>
        <div class="main">
            <nav>
                <p style="font-weight: bolder; color: red; text-align:center;">Menu</p>
                <ul>
                    <li><a href="">Trang chủ</a></li>
                    <li><a href="">Đăng ký</a></li>
                    <li><a href="">Đăng nhập</a></li>
                </ul>
            </nav>
            <div class="content">
                <form action="thongtindangky.php" method="post">
                    <h2 style="text-align:center;">THÔNG TIN ĐĂNG KÝ</h2>
                    <p>Thông tin tài khoản</p>
                    <table>
                        <tr>
                            <td><label style="justify-content:left" for="email">Email</label>
                            <input type="password" name="" id=""></td>
                        </tr>
                        <tr>
                            <td><label for="">Password</label>
                            <input type="password" name="" id=""></td>
                        </tr>
                        <tr>
                            <td><label for="">Nhập lại password</label>
                            <input type="password" name="" id=""></td>
                        </tr>
                    </table>
                    <p>Thông tin cá nhân</p>
                    <table>
                        <tr>
                            <td><label for="name">Họ và tên</label>
                            <input type="text" name="" id="name"></td>
                        </tr>
                        <tr>
                            <td><label for="quequan">Quê quán</label>
                            <input type="text" name="" id="quequan"></td>
                        </tr>
                        <tr>
                            <td><label for="dienthoai">Điện thoại</label>
                            <input type="text" name="" id="dienthoai"></td>
                        </tr>
                        <tr>
                            <td><label for="gioitinh">Giới tính</label>
                            <input type="text" name="" id="gioitinh"></td>
                        </tr>
                        <tr>
                            <td><label for="sothich">Sở thích</label>
                            <input type="text" name="" id="sothich"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <footer>
            <h2>FOOTER WEVSITE</h2>
        </footer>
    </div>
</body>
</html>