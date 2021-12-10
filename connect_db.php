<?php
$connect = mysqli_connect('127.0.0.1:3306','root','','PROJECT_1');
if(!$connect){
    echo "<script>alert('connection is lost')</script>";
}
?>