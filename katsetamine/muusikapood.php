<?php
include('config.php');

$paring = 'SELECT * FROM ALBUMID';
$valjund = mysqli_query($yhendus, $paring);
while($rida = mysqli_fetch_row($valjund)){
    //var_dump($rida);
    echo '<strong>Album: '.$rida[1].' - '.$rida[2].'</strong><br>';
    echo 'Aasta: '.$rida[3].'<br>';
    echo 'Hind: '.$rida[4].' €<br><br>';
}

mysqli_free_result($valjund);
mysqli_close($yhendus);
echo '<hr>';

include('config.php');

$paring2 = 'SELECT AVG(hind) AS "Keskmine hind", COUNT(*) AS "Albumeid kokku" FROM ALBUMID';
$valjund2 = mysqli_query($yhendus, $paring2);

while($rida = mysqli_fetch_assoc($valjund2)){
    printf("Keskmine hind: %0.2f €<br>", $rida['Keskmine hind']);
    printf("Albumeid kokku: %d tk<br>", $rida['Albumeid kokku']);
}

mysqli_free_result($valjund2);
mysqli_close($yhendus);
?>
