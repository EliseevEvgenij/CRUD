<?php
require_once '../config/connect.php';                         // подключение к БД
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$id = $_POST['id'];
// ниже будет осуществляться обновление записи
mysqli_query($connect, "UPDATE `goods` SET `title` = '$title', `description` = '$description', `price` = '$price' WHERE `goods`.`id` = '$id' ");
header('Location: ../index.php'); 