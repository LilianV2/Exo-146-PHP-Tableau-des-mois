<?php

$mois = ["janvier","fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre"];

echo $mois[2] . "<br>";
echo $mois[5] . "<br>";

$change = "u";
$newMonth = str_replace($change,"û",$mois[7]);
echo $newMonth . "<br>";

$NPDC = ["02" => "Aisne","59" => "Nord","60" => "Oise","62" => "Pas-de-Calais","80" => "Somme"];
echo $NPDC["59"] . "<br>";

foreach ($NPDC as $item => $value){
    echo $value . "<br>";
}

$result = array_values($NPDC);
print_r($result);
echo "<br>";

foreach ($NPDC as $item => $value){
    echo "Le département : " . $value . " a le numéro " . $item . "<br>";
}