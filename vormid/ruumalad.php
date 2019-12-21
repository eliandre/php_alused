<?php

$r = $_GET['raadius'];
$k = $_GET['korgus'];

$kera = round(((4*pi()*$r**3)/3),2);
$koonus = round(((pi()*$k*$r**2)/3),2);
$silinder = round((pi()*$k*$r**2),2);

echo 'Sisestatud andmete põhjal on kera ruumala '.$kera.', koonuse ruumala '.$koonus.' ja silindri ruumala '.$silinder.'.';