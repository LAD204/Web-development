<?php
    include('csdl.php');
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
    <?php
        $p->xuatsinhvien("select * from sinhvien order by ten asc")
    ?>
</body>
</html>