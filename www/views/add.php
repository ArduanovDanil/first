<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="/first.local/www/add.php" method="post" enctype="multipart/form-data">
    <label for="title">Название</label>
    <input type="text" id="title" name="title">
    <br>
    <label for="image">Файл</label>
    <input type="file" id="image" name="image">
    <br>
    <input type="submit">
</form>

<a href="/first.local/www/index.php">На главную</a> // работет
<a href="../../index.php">На главную</a> // не работает
<a href="../index.php">На главную</a> // не работает
<a href="./index.php">На главную</a> // работает
<?php echo __DIR__; ?>
</body>
</html>