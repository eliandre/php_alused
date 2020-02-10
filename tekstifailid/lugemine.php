<?php

//$allikas = 'C:/Users/hohne/PhpstormProjects/php_alused/tekstifailid/loomad.txt';
$allikas = 'loomad.txt';

$minu_fail = fopen($allikas, 'r') or die ("Faili pole");
// faili sisu kuvamine
$faili_sisu = fread($minu_fail, filesize($allikas));
// et html suudaks reavahetusest \n aru saada
echo nl2br($faili_sisu);
fclose($minu_fail);

// faili lugemise lühem verisoon
// echo nl2br(file_get_contents($allikas)).'<hr>';
echo '<hr>';
// lugemine ridade kaupa
$minu_fail = fopen($allikas, 'r');
// loeb esimese rea
$faili_sisu = fgets($minu_fail);
echo $faili_sisu;
fclose($minu_fail);
echo '<hr>';

// kõikide ridade kuvamine, feof() kontrollib, kas on jõutud faili lõppu
$minu_fail = fopen($allikas, 'r');
// kõikide ridade kuvamine
while(!feof($minu_fail)){
    $faili_sisu = fgets($minu_fail);
    echo nl2br($faili_sisu);
}

fclose($minu_fail);
