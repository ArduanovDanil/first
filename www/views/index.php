<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<table border="1">
    <tr>
        <th>Название</th>
        <th>Фото</th>
    </tr>
    <?php foreach ($items as $item): ?>
    <tr>
        <td><?php echo $item['title']; ?></td>
        <?php echo $item['path']; ?>
        <td><img src="/first.local/www<?php echo $item['path']; ?>" style="max-width: 400px" </td>
    </tr>
        <?php endforeach;?>
    </table>


<a href="add.php">Добавить фото</a>
<br>
<?php include __DIR__.'/form.php';?>
<?php echo __DIR__ ?>
</body>
</html>