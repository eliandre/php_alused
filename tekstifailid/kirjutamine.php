<?php

$allikas = 'lipsum.txt';
$minu_fail = fopen($allikas, 'w') or die ("Ei saa avada");
// lisatav tekst
$tekst = "lorem ipsum\n";
$tekst2 = "dolor sit amet\n";
// faili kirjutamine
fwrite($minu_fail, $tekst);
fwrite($minu_fail, $tekst2);
fclose($minu_fail);
echo '<hr>';

$tekst3 = "Nunc non lorem\n";
file_put_contents($allikas, $tekst3, FILE_APPEND);