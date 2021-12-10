<?php
include '../connect_db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];

mysqli_query($connect, "UPDATE `TICKETS` SET `DESCRIPTION` = '$description' WHERE (`idTICKETS` = '$id');");
mysqli_query($connect, "UPDATE `TICKETS` SET `TITLE` = '$title' WHERE (`idTICKETS` = '$id');");

header("Location: /tickets.php");
