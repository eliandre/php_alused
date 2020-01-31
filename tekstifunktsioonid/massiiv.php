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

