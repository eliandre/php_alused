<?php

date_default_timezone_set('Europe/Tallinn');

echo date('d.m.Y G:i');
echo '<br><br>';

$paev = date('N');
$nadal = array(
    '1' => 'esmaspäev',
    '2' => 'teisipäev',
    '3' => 'kolmapäev',
    '4' => 'neljapäev',
    '5' => 'reede',
    '6' => 'laupäev',
    '7' => 'pühapäev',
);

foreach ($nadal as $number => $nimetus){
    if($number == $paev){
        echo $nadal[$number];
    }
}
echo '<br><br>';

//mktime(tunnid, minutid, sekundid, kuu, päev, aasta, suveaeg);
$hommik = mktime(8,0,0,0,0,0,0);
echo date('G:i', mktime(8,0,0,0,0,0,0)).'<br>';
echo date('G:i');

