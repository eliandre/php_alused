<?php

//$allikas = 'C:/Users/hohne/PhpstormProjects/php_alused/tekstifailid/loomad.txt';
$allikas = 'loomad.txt';

$minu_fail = fopen($allikas, 'r') or die ("Faili pole");
// faili sisu kuvamine
$faili_sisu = fread($minu_fail, filesize($allikas));
echo $faili_sisu;
fclose($minu_fail);