<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>单身狗</title>



</head>

<body>
    <?php
    if (isset($_GET['name'])) {
        echo 'Hello单身狗 ' . $_GET['name'];
    } else {
        echo '请输入单身狗的姓名';
    }
    ?>
    <a href=http://localhost:80/1/lianhai.php>
        <center><img src=单身狗.png></center>
    </a>
    <h2 align=center>开始你的恋爱之旅吧！</h2>
</body>

</html>