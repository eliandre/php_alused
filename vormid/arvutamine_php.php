<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ruumalad</title>
</head>
<body>

<h3>Sisesta andemed, mille põhjal arvutatakse kujundite ruumalad</h3>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
    Raadius <input type="text" name="raadius"><br><br>
    Kõrgus <input type="text" name="korgus"><br><br>
    <input type="submit" value="Arvuta">
    <hr>
</form>
</body>
</html>
<?php

$r = $_GET['raadius'];
$k = $_GET['korgus'];

if($r == '' || $k == ''){
    echo 'Tuleb sisestada andmed';
}
else {
    $kera = round(((4*pi()*$r**3)/3),2);
    $koonus = round(((pi()*$k*$r**2)/3),2);
    $silinder = round((pi()*$k*$r**2),2);
    echo 'Sisestatud andmete põhjal on kera ruumala '.$kera.', koonuse ruumala '.$koonus.' ja silindri ruumala '.$silinder.'.';
}


