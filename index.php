<?php

include "src/Addition.php";
include "src/Multiplication.php";

$number1 =($_POST['nb1']);
$number2 =($_POST['nb2']);
$addy = new Addition($number1,$number2);


$addy->fileCSV($number1,$number2,$addy);






?>








