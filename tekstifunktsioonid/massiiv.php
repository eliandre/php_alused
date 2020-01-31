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