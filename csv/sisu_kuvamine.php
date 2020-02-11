<?php

$allikas = 'pallivise.csv';
$minu_csv = fopen($allikas, 'r') or die ('Faili ei leitud');
$rida = fgetcsv($minu_csv, filesize($allikas),';');
var_dump($rida);
fclose($minu_csv);