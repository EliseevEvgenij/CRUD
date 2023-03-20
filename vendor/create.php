<?php
require_once '../config/connect.php';                         // подключение к БД
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

// ниже sql запрос на добавление в БД введённых новых данных из формы 
mysqli_query($connect,"INSERT INTO `goods` (`id`, `title`, `description`, `price`) VALUES (NULL, '$title', '$description', '$price')");

header('Location: ../index.php');   // автоматическое переадресация после выполнения скрипта 
?>