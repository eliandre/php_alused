<?php

$tekst = 'Experience is the teacher of fools';
echo strlen($tekst).'<br>';
echo str_word_count($tekst);
echo '<hr>';

$tekst = ' 	A woman should soften but not weaken a man   ';
echo "<pre>$tekst</pre>";
echo "<pre>".trim($tekst)."</pre>";
echo "<pre>".ltrim($tekst)."</pre>";
echo "<pre>".rtrim($tekst)."</pre>";

$tekst = 'A woman should soften but not weaken a man';
echo trim($tekst, "A, a, k..n, w");
echo '<hr>';

$tekst = '<b>Experience</b> <a href="#">is</a> the teacher <br>of fools';
echo strip_tags($tekst);
echo '<hr>';

$tekst = '<b>Experience</b> <a href="#">is</a> the teacher <br>of fools';
echo strip_tags($tekst, '<b>, <br>');