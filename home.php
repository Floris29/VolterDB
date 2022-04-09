<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>VolterDB</title>
</head>
<style>
    body{
    background: url('https://images.unsplash.com/photo-1544099858-75feeb57f01b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80');
	  background-size: cover;
	  background-position: center;
	  height: 75vh;
}
</style>
<body>
    
    <div class="container">

    <a class="float-right logout" href="logout.php"> LOGOUT </a>

    <h1> Welcome <?php echo $_SESSION['username']; ?> </h1>


    </div>

</body>
</html>