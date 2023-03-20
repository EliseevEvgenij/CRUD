<?php
require_once 'config/connect.php';                         // подключение к БД
$goods = mysqli_query($connect, "SELECT * FROM `goods`") ;  // запрос на вывод всеё таблицы
$goods = mysqli_fetch_all($goods) ;                         // извлекает все строки из результирующего набора и помещает их в обычный массив

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Товары</title>
</head>
<body>
    <!-- Таблица -->
    <table>
        <tr>
            <th>id</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Цена</th>
            <th>просмотр</th>
            <th>&#9998</th>
            <th>&#10006</th>
        </tr>
        <?php
        foreach($goods as $item){      //Выполняет указанную функцию для каждого элемента массива / $item будет называться каждая переменная на отдельных итерациях цикла
        ?>
            <tr>
                <td><?=$item[0]?></td>
                <td><?=$item[1]?></td>
                <td><?=$item[2]?></td>
                <td><?=$item[3]?></td>
                <td><a href="viewing.php?id=<?=$item[0]?>">Просмотр</a></td>
                <td><a href="update.php?id=<?=$item[0]?>">Обновить</a></td>
                <td><a href="vendor/delete.php?id=<?=$item[0]?>">Удалить</a></td>
            </tr>
            <?php
        }
        ?>
     </table>
      <!-- Конец таблицы -->


     <!-- Отправка данных из формы в БД -->
     <h2>Добавить новый товар</h2>
     <form action="vendor/create.php" method="post">   <!-- с помощью метода post можем извлекать данные из БД с помощью глобал супермассивa $_POST-->
        <p>Название</p>
        <input type="text" name="title">
        <p>Описание</p>
        <textarea name="description" ></textarea>
        <p>Цена</p>
        <input type="number" name="price">
        <button type="submit">Добавить</button>  <!-- при нажатии кнопки будет срабатывать скрипт внутри "vendor/create.php"  -->
     </form>
    <!-- Закончена отправка данных из формы в БД -->

</body>
</html>

