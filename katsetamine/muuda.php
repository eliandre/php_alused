<?php include('config.php'); ?>

<?php
// haarame aadressiribalt ID, et täita väljad
if(!empty($_GET['ID'])){
    die('Sihtmärk jäi valimata!');
}
else{
    $id = $_GET['id'];
    // väljastamise päring
    $paring = "SELECT * FROM ALBUMID WHERE ID='$id'";
    $valjund = mysqli_query($yhendus, $paring);
    $rida = mysqli_fetch_assoc($valjund);

    // muutmise päring
    if(!empty($_POST['artist'])){
        $artist = htmlspecialchars(trim($_POST['artist']));
        $album = htmlspecialchars(trim($_POST['album']));
        $aasta = htmlspecialchars(trim($_POST['aasta']));
        $hind = htmlspecialchars(trim($_POST['hind']));
        $muuda = "UPDATE ALBUMID SET Artist='".$artist."', Album='$album', Aasta='$aasta', Hind='$hind'
        WHERE ID='$id'";
        $muuda_db = mysqli_query($yhendus, $muuda);
        if($muuda_db){
            echo "Edukalt muudetud, suuname <a href=\"kustutamine.php\">tagasi</a>";
            echo '<META HTTP-EQUIV="Refresh" Content="2; URL=kustutamine.php">';
            die();
        }
        else{
            echo "Tekkis probleem!";
        }
    }
?>
<h2>Andmete muutmine</h2>
<form action="" method="post">
    <table>
        <tr>
            <td>Artist: </td>
            <td><input type="text" name="artist" required value="<?php echo $rida['Artist']; ?>"></td>
        </tr>
        <tr>
            <td>Album: </td>
            <td><input type="text" name="album" required value="<?php echo $rida['Album']; ?>"></td>
        </tr>
        <tr>
            <td>Aasta: </td>
            <td><input type="number" name="aasta" required value="<?php echo $rida['Aasta']; ?>" min="1900" max="2100"></td>
        </tr>
        <tr>
            <td>Hind: </td>
            <td><input type="number" name="hind" required value="<?php echo $rida['Hind']; ?>" min="1" max="100" step="0.01"></td>
        </tr>
        <tr>
            <td><input type="reset" value="Tühjenda"</td>
            <td><input type="submit" value="Muuda"</td>
        </tr>
    </table>
</form>
<?php
}
?>