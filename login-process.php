<?php

if ($_POST["adminUsername"] == 'admin' && $_POST["adminPassword"] == 'password') {
  session_start();
  $_SESSION['loggedIn'] = true;
  header('Location: /admin.php');
}

die('login failed');
 ?>