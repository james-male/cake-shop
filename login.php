<?php

$pageName = "login";
$pageTitle = "The Cake Shop Login area";
$mainBannerText = "Login to the administration area";

?>

<?php include 'includes/header.php'; ?>

<div class="center-text">

  <form action="login-process.php" method="post">

    <label for="adminUsername">Username</label>
    <input id="adminUsername" name="adminUsername" type="text">

    <label for="adminPassword">Password</label>
    <input id="adminPassword" name="adminPassword" type="password">

    <br>

    <button id="adminButton" class="btn-default"><span class="glyphicon glyphicon-share-alt"></span>Submit</button>

  </form>

  <div>
    <p><br>
      Username = 'admin' Password = 'password'
    </p>
  </div>

</div>

<?php include 'includes/footer.php'; ?>