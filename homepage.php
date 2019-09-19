<?php
session_start ();
if(!isset($_SESSION['name'])){
    header('location:loginn.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WELCOME</title></head>

    <body>
<h1> Welcome <?php echo $_SESSION ['name']; ?></h1>
<a href= "logout.php"> LOG OUT</a>
</body>