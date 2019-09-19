<?php
include('login_db.php');
 session_start();
 if(isset($_POST['login'])) 
 {
    
    $name = ($con,$_POST['name']);
    $password = ($con,$_POST['password']);
    $sql = ("SELECT * FROM profile WHERE name = '$name' and password = '$password'");
    $result = mysqli_query($con,$sql);
   // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //$active = $row['active'];
   $count = mysqli_num_rows($result);
    
    
    $row = mysqli_fetch_array($result);
    if ($count > 0)
    {
       session_register("name");
       $_SESSION['login_user'] = $name;
       header("location:homepage.php");
    }else {
      $_SESSION['message'] = "Your Login Name or Password is invalid";
    }
 }
?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">   
    <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
<section class="container">
    <div class="row">
        <div class="col-sm-4">
            <h1>Hello!</h1>
            <span>
             Welcome to team FOOBAA. Click the button below to join us on our adventure.
            </span>
            <button type="button" class="btn"> <a href= "register.php"> SIGN UP </a></button>
        </div>
        <div class="col-sm-8">
            <h1>TEAM FOOBAA</h1>
            <form id = "regForm" name="regForm" method="post" action="loginn.php">
                <div class="col-sm-8">
                    <div class="input-group my-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="email" >
                                <i class="fas fa-envelope"></i>
                            </span>
                        </div>     
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter your Name">
                    </div>
                </div>
                <div class="input-group my-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="password" >
                            <i class="fas fa-unlock-alt"></i>                   
                        </span>
                    </div>     
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your Password">
                </div>
                <button type="submit" class="btn" name="login">Login </button>
                <a href="#">Forgot Password? <?php$_SESSION ['message']; ?> </a>
            </form>
            <p>&copy 2019 Team Foobaa</p>
        </div>
    </div>
    
</section>
</body>
</html>