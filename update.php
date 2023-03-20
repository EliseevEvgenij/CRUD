<?php
require_once 'config/connect.php'; 
    $goods_id = $_GET['id'];                // индентификатор товара
    $good = mysqli_query($connect,"SELECT * FROM `goods` WHERE `id`='$goods_id' ");        // сам товар // благодоря id из GET запроса  
    $good = mysqli_fetch_assoc($good);         //данные в виде ассоциативного массива

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Обновить</title>
</head>
<body>
    
</body>
</html><h2>Обновить новый товар</h2>
     <form action="vendor/update.php" method="post">   <!-- с помощью метода post можем извлекать данные из БД с помощью глобал супермассивa $_POST-->
        <input type="hidden" name="id" value="<?= $goods_id ?>">                <!-- скрытый input -->
        <p>Название</p>
        <input type="text" name="title" value="<?= $good['title'] ?>">               <!--    в value будет по умолчанию выдавать наше первое значение -->
        <p>Описание</p>
        <textarea name="description" ><?= $good['description'] ?></textarea>
        <p>Цена</p>
        <input type="number" name="price" value="<?= $good['price'] ?>">
        <button type="submit">Обновить</button>  <!-- при нажатии кнопки будет срабатывать скрипт внутри "vendor/create.php"  -->
     </form>