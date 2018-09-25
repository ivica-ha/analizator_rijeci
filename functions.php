<?php

function to_uppercase() {
    return (strtoupper($_POST['word']));
}

function vowels($String) {
    return substr_count($String, 'a')+substr_count($String, 'e')+substr_count($String, 'i')+substr_count($String, 'o')+substr_count($String, 'u');
}

function consonants($String) {
    count(separate_to_letters) - (vowels($_POST['word']));
}

function separate_to_letters() {
    $array = preg_split('//u', $_POST['word'], null, PREG_SPLIT_NO_EMPTY);
    $letter_string = implode(',',$array);
    if(strpos($letter_string,'L,J') !== false) {
        $letter_string = str_replace('L,J','LJ',$letter_string);
    }
    if(strpos($letter_string,'N,J') !== false) {
        $letter_string = str_replace('N,J','NJ',$letter_string);
    }

     if(strpos($letter_string,'D,Ž') !== false) {
        $letter_string = str_replace('D,Ž','DŽ',$letter_string);
    }

    $array = explode(',', $letter_string);

}
