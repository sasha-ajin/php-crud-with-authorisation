<?php

include 'connect_db.php';
error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: tickets.php");
}
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if ($password == $cpassword) {
        $sql = "SELECT * FROM USERS WHERE USERNAME='$username'";
        $result = mysqli_query($connect, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO USERS (username, password)
					VALUES ('$username', '$password')";
            $result = mysqli_query($connect, $sql);
            if ($result) {
                echo "<script>alert('Wow! User Registration is Completed.')</script>";
                $username = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Something went wrong')</script>";
            }
        } else {
            echo "<script>alert('Woops! Username is already exists.')</script>";
        }

    } else {
        echo "<script>alert('Passwords not matched.')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>register</title>
    <!--  Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--  Main  -->
    <link rel="stylesheet" type="text/css" href="{% static 'style.css' %}">
</head>
<body>
<div class="container">
    <form action="" method="POST" class="login-email"><br>
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
        <div class="input-group">
            <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
        </div>
        <br>
        <div class="input-group">
            <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
        </div>
        <br>
        <div class="input-group">
            <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
        </div>
        <br>
        <div class="input-group">
            <button name="submit" class="btn">Register</button>
        </div>
        <br>
        <p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p><br>
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