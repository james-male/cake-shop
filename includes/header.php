<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <title><?php echo $pageTitle; ?></title>
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/amelia/bootstrap.min.css">
      <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
  <div id="container">

<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">The Cake Shop</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?php if ($pageName == 'supplies') {echo "active";} ?>"><a href="current-supplies.php"> Current Supplies </a></li>
        <li><a href="login.php">login</a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="jumbotron center-text">
  <h1>
    <?php echo $mainBannerText; ?>
  </h1>
</div>