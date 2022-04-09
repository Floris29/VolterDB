<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <title>
  </title>
 <head>
  <B>
    Made by Floris.
  </B>
 </head>

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">  

<body>
<nav>
    <div class="wrapper">
        <a href="index.php">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="discover.php">About this project</a></li>
                <?php
if (isset($_SESSION["useruid"])) {
echo "<li><a href='profile.php'>Profile page</a></li>";
echo "<li><a href='includes/logout.incphp'>Log out.</a></li>";
}
else {
  echo "<li><a href='login.php'>Login</a></li>";
echo "<li><a href='signup.php'>Sign up.</a></li>";
}
                ?>
</ul>
</div>
</nav>

<div class="wrapper">