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

mktime(tunnid, minutid, sekundid, kuu, päev, aasta, suveaeg);
$sp = mktime(0,0,0,10,29,1969);
echo date('d.m.Y', $sp);
echo '<br><br>';
echo date('d.m.Y G:i' , time()+60).'<br><br>';
echo date('d.m.Y G:i' , time()+60*60*24).'<br><br';

echo strtotime("tomorrow").'<br>';
echo strtotime("10 september 2000").'<br>';
echo strtotime("+1 week").'<br>';
echo strtotime("next Friday").'<br>';
echo strtotime("5pm + 6 Hours").'<br>';
echo strtotime("6am 10 days ago").'<br>';

//kuupäeva valideerimine
if(checkdate(12,32,2013)){
    echo ('Kuupäev korras');
}
else {
    echo ('Kuupäev on valesti sisestatud');
}