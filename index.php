<?php
include_once 'header.php';
?>


<div style="position: absolute; bottom: 5px;">
  VolterDB (C) 2022
  </div>

  <section class="index-intro">
      <?php
if (isset($_SESSION["useruid"])) {
    echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";

    }
    else {
      echo "<li><a href='login.php'>Login</a></li>";
    echo "<li><a href='signup.php'>Sign up.</a></li>";
    }

?>
      <hi>Is this working?</hi>
      <p>Under here are are some good looking things not?</p>
</section>

<section class="index-categories">
    <h2>Same basic categories</h2>
    <div class="index-categories-list">
        <div>
            <h3>Fun stuff</h3>
</div>
<div>
    <h3>Serious stuff</h3>
</div>
<div>
    <h3>exiting stuff</h3>
</div>
<div>
    <h3>Boring stuff</h3>
</div>
</div>
</section>

<?php
include_once 'footer.php';
?>