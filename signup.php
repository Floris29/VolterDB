<?php
include_once 'header.php';
?>

  <section class="signup-form">
      <h2>Sign up</h2>
      <div class="signup-form-form">
      <form action="includes/signup.inc.php" method="post">
          <input type="text" name="name" placeholder="Full name...">
          <input type="text" name="email" placeholder="Email-adress...">
          <input type="text" name="uid" placeholder="Username...">
          <input type="password" name="pwd" placeholder="Password...">
          <input type="password" name="pwdrepeat" placeholder="Repeat password...">
          <button type="submit" name="submit">Sign Up!</button>
</form>
</div>
<?php
if (isset($_GET["error"])) {
if ($_GET["error"] == "emptyinput") {
  echo "<p>Fil in all fields!</p>";
}
else if ($_GET["error"] == "invaliduid") {
  echo "<p>Choose a better username!</p>";
}
else if ($_GET["error"] == "invalidemail") {
  echo "<p>Choose a propper email!</p>";
}
else if ($_GET["error"] == "passworddontmatch") {
  echo "<p>Your passwords are not matching!</p>";
}
else if ($_GET["error"] == "stmtfailed") {
  echo "<p>Something went wrong. Please try again.</p>";
}
else if ($_GET["error"] == "usernametaken") {
  echo "<p>This username is already taken!!</p>";
}
else if ($_GET["error"] == "none") {
  echo "<p>You signed up!</p>";
}
}
?>
</section>

<?php
include_once 'footer.php';
?>