<?php

$allikas = 'loomad.txt';
$suurus = filesize($allikas);
$viimati_muudetud = date('d.m.Y G:i', filectime($allikas));
echo 'Faili nimi: '.$allikas.'<br>';
echo 'Faili suurus: '.$suurus.' baiti.<br>';
echo 'Viimati muudetud: '.$viimati_muudetud.'.<br>';

echo '<hr>';
$allikas2 = 'tekstifailid/loomad.txt';
$faili_info = pathinfo($allikas2);
echo $faili_info['dirname'].'<br>';
echo $faili_info['basename'].'<br>';
echo $faili_info['filename'].'<br>';
echo $faili_info['extension'].'<br>';