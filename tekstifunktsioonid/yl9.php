<?php

// teeme tagasi lause algava suure tähega
$lause = ucfirst($lause);
// väljastame lause
echo $lause;
echo '<hr>';

//Kasutajalt saadud eesnime ja perenime põhjal luuakse talle email lõpuga @hkhk.edu.ee. Kusjuures täpitähed asendatakse ä->a, ö->o, ü->y, õ->o ja kogu email on väikeste tähtedega
//Näiteks: sisend–>Ülle ja Doos; väljund–>ylle.doos@hkhk.edu.ee
$nimiJaPerenimi = $_GET['nimijaperenimi'];
$asendus = array(
    'ä' => 'a',
    'ö' => 'o',
    'ü' => 'u',
    'õ' => 'o',
    'Ä' => 'A',
    'Ö' => 'O',
    'Ü' => 'U',
    'Õ' => 'O',
);

foreach ($asendus as $otsi=>$asenda){
    $nimiJaPerenimi = str_replace($otsi, $asenda, $nimiJaPerenimi);
}

$tyhikuIndeks = strpos($nimiJaPerenimi, ' ', 0);
$nimi = strtolower(substr($nimiJaPerenimi, 0, $tyhikuIndeks));
$nimiJaPerenimi = substr($nimiJaPerenimi, $tyhikuIndeks+1);
$tyhikuIndeks = strpos($nimiJaPerenimi, ' ');
$perenimi = strtolower(substr($nimiJaPerenimi,$tyhikuIndeks+1));
$email = $nimi.'.'.$perenimi.'@khk.ee';
echo $email;
echo '<hr>';
//regulaaravaldistega
$nimiJaPerenimi = $_GET['nimijaperenimi'];

$asendus = array(
    'ä' => 'a',
    'ö' => 'o',
    'ü' => 'u',
    'õ' => 'o',
    'Ä' => 'A',
    'Ö' => 'O',
    'Ü' => 'U',
    'Õ' => 'O',
);

foreach ($asendus as $otsi=>$asenda){
    $nimiJaPerenimi = str_replace($otsi, $asenda, $nimiJaPerenimi);
}

$eesnimiRE = '/^[A-Z][a-z]* /';
$perenimiRE = '/^[A-Z][a-z]* /';
preg_match($eesnimiRE, $nimiJaPerenimi, $eesnimi);
preg_match($perenimiRE, $nimiJaPerenimi, $perenimi);
if(!empty($eesnimi) and !empty($perenimi)){
    $kasutaja = strtolower(trim($eesnimi[0])).'.'.strtolower(trim($perenimi[0]));
    echo $kasutaja.'@khk.ee';
}