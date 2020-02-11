<?php

$allikas = 'pallivise.csv';
$minu_csv = fopen($allikas, 'r') or die ('Faili ei leitud');
$rida = fgetcsv($minu_csv, filesize($allikas),';');
var_dump($rida);
fclose($minu_csv);
echo '<hr>';

// kõikide ridade kättesaamine
$minu_csv = fopen($allikas, 'r') or die ('Faili ei leitud');
$jrk = 1;
while(!feof($minu_csv)){
    $rida = fgetcsv($minu_csv, filesize($allikas), ';');
    $arv = count($rida); // rea väljade arv
    echo $jrk.'. '; // järjekorra number
    $jrk++;
    for($i = 0; $i < $arv; $i++){
        echo $rida[$i].' ';
    }
    echo '<br>';
}
fclose($minu_csv);