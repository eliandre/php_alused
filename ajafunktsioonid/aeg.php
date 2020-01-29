<?php

date_default_timezone_set('Europe/Tallinn');
echo date('d.m.Y G:i', time());
echo '<br><br>';
echo date('d. F Y');
echo '<br><br>';

//kuude massiiv
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//kuupäeva väljastamine
echo $paev.'. '.$kuu.' '.$aasta.'<br><br>';