<?php

function to_uppercase() {
    return (strtoupper($_POST['word']));
}

function vowels($String) {
    return substr_count($String, 'a')+substr_count($String, 'e')+substr_count($String, 'i')+substr_count($String, 'o')+substr_count($String, 'u');
}

function consonants($String) {
    return (!substr_count($String, 'a'))+(!substr_count($String, 'e'))+(!substr_count($String, 'i'))+(!substr_count($String, 'o'))+(!substr_count($String, 'u'));
}
