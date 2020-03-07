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
<hr>
<form method="get" action="">
    Otsing <input type="text" name="otsi">
    <input type="submit" value="otsi">
</form>
<?php include('config.php');
if(!empty($_GET['otsi'])){
    // kasutaja tekst vormist
    $otsi = $_GET['otsi'];
    $otsi = htmlspecialchars(trim($otsi));
    // päring
    $paring3 = 'SELECT * FROM ALBUMID WHERE Artist LIKE "%'.$otsi.'%"';
    $valjund3 = mysqli_query($yhendus, $paring3);
    $tulemused= mysqli_num_rows($valjund3);

    echo 'Otsingusõna: '.$otsi.'<br>';
    echo 'Vastused: <br>';
    if($tulemused == 0){
        echo "Tulemusi ei leitud.";
    }

    while($rida = mysqli_fetch_assoc($valjund3)){
        echo $rida['Artist'].' - '.$rida['Album'].' - '.$rida['Aasta'].'<br>';
    }
    mysqli_free_result($valjund3);
    mysqli_close($yhendus);
}
?>

