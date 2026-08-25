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
    <div class="container">
        <form action="info.php" method="post">
            <h3>Danh sách tác giả</h3>
            <ul>
                <li><a href="info.php?ten=An&tuoi=20">An</a></li>
                <li><a href="info.php?ten=Tài&tuoi=30">Tài</a></li>
                <li><a href="info.php?ten=Hải&tuoi=45">Hải</a></li>
            </ul>
        </form>
    </div>
</body>
</html>