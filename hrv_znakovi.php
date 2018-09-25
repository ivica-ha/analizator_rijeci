<?php

$word = 'Ljuljačka';

$str = preg_split('//u', $word, null, PREG_SPLIT_NO_EMPTY);

echo '<pre>';
print_r($str);
echo '</pre>';
