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

$jaana = array(
    'eesnimi' => 'Jaana',
    'perenimi' => 'Šeffer'
);
echo '<pre>';
print_r($jaana);
echo '</pre>';
foreach ($jaana as $element => $vaartus){
    echo $element.' - '.$vaartus.'<br>';
}

echo '<hr>';

$opilased = array(
    array(
        'eesnimi' => 'Anne-Mari',
        'perenimi' => 'Eensaar'
    ),
    array(
        'eesnimi' => 'Andre',
        'perenimi' => 'Eli'
    ),
    array(
        'eesnimi' => 'Rene',
        'perenimi' => 'Kasetalu'
    ),
    array(
        'eesnimi' => 'Martin',
        'perenimi' => 'Mõtsar'
    ),
    array(
        'eesnimi' => 'Kerli',
        'perenimi' => 'Tekku'
    ),
    array(
        'eesnimi' => 'Erko',
        'perenimi' => 'Sakkeus'
    ),
    array(
        'eesnimi' => 'Mairit',
        'perenimi' => 'Saal'
    )
);

foreach ($opilased as $opilane){
    foreach ($opilane as $element => $vaartus) {
        echo $element . ' - ' . $vaartus . '<br>';
    };
    echo '<br>';
}
echo '<br>';
echo $opilased[1]['perenimi'];
