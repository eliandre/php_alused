<?php

$raadius = $_GET['raadius'];
$korgus = $_GET['korgus'];

$kera = (4*pi()*$raadius**3)/3;
$koonus = (pi()*$korgus*$raadius**2)/3;
$silinder = pi()*$korgus*$raadius**2;

echo 'Sisestatud andmete põhjal on kera ruumala '.