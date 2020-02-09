<?php

$tekst = 'All thinking men are atheists';
echo $tekst[0].'<br>';
echo $tekst[4];
echo '<hr>';

echo substr($tekst, 3, 5).'<br>';
echo substr($tekst, 4, -13).'<br>';
echo substr($tekst, -8, 7);
echo '<hr>';

//sõnad kui massiivi elemendid
print_r(str_word_count($tekst,1));
echo '<br>';
//sõna väljakutsumine
$sona = str_word_count($tekst, 1);
echo $sona[2];
echo '<br>';

//Andes str_word_count() funktsioonile parameetri 2, määratakse sõna indeks vastava sümboli indeksiga kogu massiivis.
print_r(str_word_count($tekst, 2));
echo '<hr>';

//tekstist otsimine
$tekst2 = 'Happiness in intelligent people is the rarest thing I know.';
$otsitav = 'in';
$leia_tekstist = strpos($tekst2, $otsitav, 0);
echo $leia_tekstist.'<hr>';

//nihke muutmine
$nihe = 0;
while($leia_tekstist = strpos($tekst2, $otsitav, $nihe)){
    echo $leia_tekstist.'<br>';
    $nihe = $leia_tekstist + strlen($otsitav);
}
echo '<hr>';

//teksti asendamine funktsiooniga substr_replace()
$tekst3 = 'Pai papa, pane paadile punased purjed peale';
$asendus = 'emme';
$otsitav_algus = 4;
$otsitav_pikkus = 4;
echo substr_replace($tekst3, $asendus, $otsitav_algus, $otsitav_pikkus).'<br><br>';

//sama asi dünaamiliselt
$otsitav = 'papa';
$nihe = 0;
$asenduse_algus = strpos($tekst3, $otsitav, $nihe);
$asenduse_markide_arv = strlen($otsitav);
echo substr_replace($tekst3, $asendus, $asenduse_algus, $asenduse_markide_arv).'<br><br>';

//kindla sõna asendamiseks on str_replace()
$tekst4 = 'Musta lehma saba musta lehma taga, valge lehma saba valge lehma taga';
$otsi = array('lehm', 'saba', 'taga');
$asenda = array('koer', 'sarv', 'ees');
echo str_replace($otsi, $asenda, $tekst4);