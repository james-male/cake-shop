<?php

if (isset($_POST['icing'])) {
  file_put_contents('icingStock.txt', $_POST['icing'] . PHP_EOL, FILE_APPEND);
}

if (isset($_POST['cakes'])) {
  file_put_contents('cakeFlavourStock.txt', $_POST['icing'] . PHP_EOL, FILE_APPEND);
}

if (isset($_POST['foodColouring'])) {
  file_put_contents('foodColouringStock.txt', $_POST['icing'] . PHP_EOL, FILE_APPEND);
}







$icingFlavours = file("icingStock.txt");
$cakeFlavours = file("cakeFlavourStock.txt");
$foodColouring = file("foodColouringStock.txt");



 ?>

 <?php include 'includes/header.php'; ?>

<?php var_dump($icingFlavours); ?><br>
<?php var_dump($cakeFlavours); ?><br>
<?php var_dump($foodColouring); ?><br>

<?php include 'includes/footer.php'; ?>