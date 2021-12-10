<?php
$title = $_POST['title'];
$description = $_POST['description'];
include '../connect_db.php';

mysqli_query($connect,
    "INSERT INTO `TICKETS` (`DESCRIPTION`, `TITLE`) VALUES ('$description', '$title')");

header("Location: /tickets.php");