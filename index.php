<?php

include "src/Addition.php";
include "src/Multiplication.php";


if(!empty( $_POST['nb1']))
{
    $number1 = ($_POST['nb1']);
    $number2 = ($_POST['nb2']);
    $addy = new Addition($number1, $number2);

}


$tab = fileCSV($_FILES['file']['tmp_name']);



function fileCSV($path)
{
$tab = [];
    $lesresultats = file_get_contents($path);

    //var_dump(Csv::decode($lesresultats));

    $csvdecode = Csv::decode($lesresultats);

    foreach ($csvdecode as $value) {

        if ($value[2] = "+") {
            $calcul = Addition::calcul2($value[0], $value[1]);

        }
        elseif ($value[2] = "*") {
            $calcul = Multiplication::calcul2($value[0], $value[1]);

        }

        array_push($tab,array($value[0], $value[1], $value[2], $calcul));

    }
        //var_dump($tab);

    return Csv::encode($tab);

}
/*echo $tab;*/
//echo $tab[1],$tab[2]. " " . $tab[11] . " " . $tab[6],$tab[7]. " = " .  $tab[15],$tab[16];

/*foreach ($lesresult as $result) {
    echo "<br/>";
    echo " Résultats: ". $result[0];
    echo " Résultats: ". $result[1];
}
*/


?>








