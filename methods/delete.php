<?php
include '../connect_db.php';
$id = $_GET['id'];
mysqli_query($connect, "DELETE FROM `TICKETS` WHERE (`idTICKETS` = '$id')");
header("Location: /tickets.php");