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
<hr>
<?php include('config.php'); ?>
<?php
if(!empty($_GET['artist']) && !empty($_GET['album']) && !empty($_GET['aasta']) && !empty($_GET['hind'])){
    $artist = htmlspecialchars(trim($_GET['artist']));
    $album = htmlspecialchars(trim($_GET['album']));
    $aasta = htmlspecialchars(trim($_GET['aasta']));
    $hind = htmlspecialchars(trim($_GET['hind']));

    // päring
    $paring4 = "INSERT INTO ALBUMID(ID, Artist, Album, Aasta, Hind) VALUES ('".NULL."','".$artist."','".$album."','".$aasta."','".$hind."')";
    $valjund4 = mysqli_query($yhendus, $paring4);

    // päringu vastuste arv
    $tulemus = mysqli_affected_rows($yhendus);
    if($tulemus == 1){
        echo "Kirje lisatud";
    }
    else{
        echo "Kirjet ei lisatud";
    }

    mysqli_close($yhendus);
}
?>
<h2>Uue Albumi lisamine</h2>
<form action="" method="get">
    <table>
        <tr>
            <td>Artist: </td>
            <td><input type="text" name="artist" required</td>
        </tr>
        <tr>
            <td>Album: </td>
            <td><input type="text" name="album" required</td>
        </tr>
        <tr>
            <td>Aasta: </td>
            <td><input type="number" name="aasta" min="1900" max="2100" required</td>
        </tr>
        <tr>
            <td>Hind: </td>
            <td><input type="number" name="hind" min="1" max="1000"  step="0.1" required</td>
        </tr>
        <tr>
            <td>
                <input type="reset" value="Tühjenda">
            </td>
            <td>
                <input type="submit" value="Lisa album">
            </td>
        </tr>
    </table>
</form>
