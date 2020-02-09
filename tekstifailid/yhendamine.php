<?php

$allikas = 'lipsum.txt';
// ava fail
$minu_fail = fopen($allikas, 'w');
//faili sulemine
fclose($minu_fail);
