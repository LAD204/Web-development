<?php
    include_once("../class/tmdt_csdl_connect.php");
    $p = new csdl();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table align="center" border="1" style="padding: 10px">
        <thead align="center">
            <tr align="center">
                <td align="center">
                    STT
                </td>
                <td align="center">
                    Tên công ty
                </td>
                <td align="center">
                    Địa chỉ
                </td>
                <td align="center">
                    Điện thoại
                </td>
                <td align="center">
                    Fax
                </td>
            </tr>
        </thead>
        <tbody align="center">
            <tr align="center">
                <?php
                    $p->xuatdanhsach('select * from congty')
                ?>
            </tr>
        </tbody>
    </table>
</body>
</html>