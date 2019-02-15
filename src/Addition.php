<?php
/**
 * Created by PhpStorm.
 * User: lordo
 * Date: 12/02/2019
 * Time: 08:52
 */

require "csv.php";

class Addition
{

    protected $nombreun;
    protected $nombredeux;

    public function __construct($nb1, $nb2)
    {
        $this->nombreun = $nb1;
        $this->nombredeux =$nb2;
    }
    public function calcul()
    {
        return $this->nombreun + $this->nombredeux;
    }

   static public function calcul2($nb1, $nb2)
    {
        return $nb1 + $nb2;
    }







     static function fileCSV($path)
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

}