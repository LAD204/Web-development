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
            width: 100%;
        }
        nav{
            flex-grow: 1;
            border-right: 1px solid #999;
            padding: 10px;
            width: 20%;
        }
        .content{
            flex-grow: 4;
            padding: 10px;
            width: 80%;
            
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
        p{
            color: red;
        }
        table{
            width: 100%;
        }
        table .formattd{
            width: 80%;
            display: flex;
            justify-content: space-between;
            padding-right: 80px; 
        }

        table .formattd input{
            width: 300px;
            height: 25px;   
        }
        .submit-form{
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }
        .submit-form input{
            padding: 3px;
            margin: 5px;
        }
        .nonformattd{
            display: flex;
            justify-content: space-between;
            width: 60%;
            padding-right: 130px;
        }
        .nonformattd input{
            padding-top: 2px;
            margin: 2px;
        }
        .nonformattdhaha{
            display: flex;
            justify-content: space-between;
            width: 90%;
            padding-right: 110px;
        }
        .nonformattdhaha input{
            padding-top: 2px;
            margin: 2px;
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
                            <td class="formattd"><label  for="email">Email</label>
                            <input type="email" name="useremail" id=""></td>
                        </tr>
                        <tr>
                            <td class="formattd"><label for="">Password</label>
                            <input type="password" name="userpassword" id=""></td>
                        </tr>
                        <tr>
                            <td class="formattd"><label for="">Nhập lại password</label>
                            <input type="password" name="userpasswordagain" id=""></td>
                        </tr>
                    </table>
                    <p>Thông tin cá nhân</p>
                    <table>
                        <tr>
                            <td class="formattd"><label for="name">Họ và tên</label>
                            <input class="nonformat-input" type="text" name="username" id="name"></td>
                        </tr>
                        <tr>
                            <td class="formattd"><label for="quequan">Quê quán</label>
                                <select style="width: 55.6%;" name="usercity" id="city">
                                    <option value="" disable selected>-- Vui lòng chọn --</option>
                                    <option value="Hà Nội">Hà Nội</option>
                                    <option value="Hồ Chí Minh">Hồ Chí Minh</option> 
                                    <option value="Đà Nẵng">Đà Nẵng</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="formattd"><label for="dienthoai">Điện thoại</label>
                            <input class="nonformat-input" type="tel" name="usertel" id="dienthoai"></td>
                        </tr>
                        <tr>
                            <td class="nonformattd"><label for="gioitinh">Giới tính</label>
                                <label for="">
                                    <input type="radio" name="usergender" id="gioitinh" value="Nam"> Nam
                                    <input type="radio" name="usergender" id="gioitinh" value="Nam"> Nữ
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="nonformattdhaha"><label for="sothich">Sở thích</label>
                                <label for="">
                                    <input type="checkbox" name="userhobbies[]"  value="Màu xanh"> Màu xanh
                                    <input type="checkbox" name="userhobbies[]"  value="Màu đỏ"> Màu đỏ
                                    <input type="checkbox" name="userhobbies[]"  value="Đồng quê"> Đồng quê
                                    <input type="checkbox" name="userhobbies[]"  value="Cao nguyên"> Cao nguyên
                                </label>
                            </td>
                        </tr>
                    </table>
                    <div class="submit-form">
                        <input style="padding: 5px 15px 5px 15px; background-color: blue; color: white; " type="submit" value="Đăng ký">
                        <input type="reset" value="Làm lại">
                    </div>
                </form>
            </div>
        </div>
        <footer>
            <h2>FOOTER WEBSITE</h2>
        </footer>
    </div>
</body>
</html>