<?php
$vso19 = array(
    'Anne-Mari',
    'Andre',
    'Rene',
    'Martin',
    'Marit',
    'Erko',
    'Kerli',
    'Hanna-Liisa',
    'Jaana'
);

echo $vso19[0].'<br>';
echo $vso19[1].'<br>';

$opilaste_arv = count($vso19);
echo 'VSo19 rühmas on ' .$opilaste_arv. ' õpilast.<br>';
echo 'Need on: <br>';
for($i = 0; $i < $opilaste_arv; $i++){
    echo $vso19[$i].'<br>';
}
echo '<hr>';
foreach ($vso19 as $opilane){
    echo $opilane.'<br>';
}
