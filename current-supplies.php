<?php

$pageName = "supplies";
$pageTitle = "Current supplies";
$mainBannerText = "Current supplies";

$icingFlavours = file("icingStock.txt");
$cakeFlavours = file("cakeFlavourStock.txt");
$foodColouring = file("foodColouringStock.txt");

?>

<?php include 'includes/header.php'; ?>

<div class="well">

  <p class="center-text bold">
    Below Shows our current Icing flavours
  </p>

<?php

foreach ($icingFlavours as $icing) {
  echo $icing;
  echo nl2br(PHP_EOL);
}

?>

</div>

<div class="well">

  <p class="center-text bold">
    Below Shows our current Cake flavours
  </p>

<?php

foreach ($cakeFlavours as $cake) {
  echo $cake;
  echo nl2br(PHP_EOL);
}

?>

</div>

<div class="well">

  <p class="center-text bold">
    Below Shows our current food colouring colours
  </p>

<?php

foreach ($foodColouring as $colouring) {
  echo $colouring;
  echo nl2br(PHP_EOL);
}

?>

</div>

<?php include 'includes/footer.php'; ?>
