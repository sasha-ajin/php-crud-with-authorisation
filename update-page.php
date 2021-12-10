<?php
include 'connect_db.php';
$id = $_GET['id'];
$ticket = mysqli_query($connect, "SELECT * FROM `TICKETS` WHERE `idTICKETS` = '$id'");
$ticket = mysqli_fetch_assoc($ticket);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>update</title>
    <!--  Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--  Main  -->
    <link rel="stylesheet" type="text/css" href="{% static 'style.css' %}">
</head>
<body>
<div class="container">
    <br><br>
    <h3>Update Product</h3>
    <form action="methods/update.php" method="post">
        <input type="hidden" name="id" value="<?= $ticket['idTICKETS'] ?>"><br>
        <p>Title</p>
        <input type="text" name="title" value="<?= $ticket['TITLE'] ?>"><br>
        <p>Description</p>
        <textarea name="description"><?= $ticket['DESCRIPTION'] ?></textarea><br><br>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>