<?php

include "src/Addition.php";
include "src/Multiplication.php";

$calcule = new Addition($_POST['nb1'],$_POST['nb2']);

echo $calcule->calcul();

?>








