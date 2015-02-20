<?php

session_start();

if ($_SESSION['loggedIn'] != true) {
  header("Location: /login.php");
}

$pageName = "Admin";
$pageTitle = "The Cake Shop administration area";
$mainBannerText = "Welcome to the administration area";

?>

<?php include 'includes/header.php'; ?>

<div class="well">
  <form class="center-text" action="stock-arrays.php" method="post">
    <label for="icing">Add to the list of flavour icing we have:</label>
    <input id="icing" name="icing" type="text">
  </form>
</div>

<div class="well">
  <form class="center-text" action="stock-arrays.php" method="post">
    <label for="icing">Add to the list of flavour Cakes we currently have on sale:</label>
    <input id="icing" name="cakes" type="text">
  </form>
</div>

<div class="well">
  <form class="center-text" action="stock-arrays.php" method="post">
    <label for="icing">Add to the list of food colouring we currently have:</label>
    <input id="icing" name="foodColouring" type="text">
  </form>
</div>

<?php include 'includes/footer.php'; ?>