<?php

$allikas = 'emailid.txt';
$minu_fail = fopen($allikas, 'r');
$faili_sisu = file_get_contents($allikas);
$massiiv = explode("\n", $faili_sisu); // tükeldab rea lõpust
$suurus = count($massiiv);
for($i = 0; $i < $suurus; $i++){
    $rida = $massiiv[$i];
    $nimi = explode('(at)', $rida);
    echo $nimi[0].'<br>';
}

fclose($minu_fail);