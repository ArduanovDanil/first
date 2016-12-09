<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php include __DIR__.'/form.php';?>

<a href="/first.local/www/index.php">На главную</a> // работет
<a href="../../index.php">На главную</a> // не работает
<a href="../index.php">На главную</a> // не работает
<a href="./index.php">На главную</a> // работает

</body>
</html>