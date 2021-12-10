<?php
session_start();
include 'connect_db.php';

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tickets</title>
    <!--  Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--  Main  -->
    <link rel="stylesheet" type="text/css" href="{% static 'style.css' %}">
</head>
<body>
<div class="container">
    <br>
    <?php echo "<h1>Welcome, " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a><br><br><br>


    <form action="methods/create.php" method="post" style="padding: 8px;border:black; border-width:2px; border-style:solid;">
        <h3>Add new ticket</h3>
        <p>Title</p>
        <input type="text" name="title" required>
        <p>Description</p>
        <textarea name="description" required></textarea><br><br>
        <button class="btn btn-primary">Create</button>
    </form>
    <br><br><br><br><br>
    <table class="table table-sm">
        <tr>
            <th></th>
            <th>id</th>
            <th>title</th>
            <th>Description</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>

        <tr>
            <?php
            $tickets = mysqli_query($connect, "SELECT * FROM TICKETS");
            $tickets = mysqli_fetch_all($tickets);
            foreach ($tickets

            as $ticket) {
            ?>
        <tr>
            <td></td>
            <td><?= $ticket[0] ?></td>
            <td><?= $ticket[2] ?></td>
            <td><?= $ticket[1] ?></td>
            <td>

                <button class="btn btn-success"><a style="all: unset;" href="update-page.php?id=<?= $ticket[0] ?>">Update</a></button>
            </td>
            <td>
                <button class="btn btn-danger"><a style="all: unset;" href="methods/delete.php?id=<?= $ticket[0] ?>">Delete</a>
                </button>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
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


