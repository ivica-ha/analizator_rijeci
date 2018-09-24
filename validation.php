<?php

if (empty($_POST['word']))  {
    echo 'Unesite riječ'.'<br>';
}
elseif (strlen($_POST['word']) < 3 ) {
    echo 'Riječ mora sadržavati više od 2 znaka'.'<br>';
}
elseif (!preg_match('/^[\p{Latin}]+$/u', $_POST['word'])) {
    echo 'Riječ može sadržavati samo slova';

} elseif  (!empty($_POST['word']) && strlen($_POST['word']) > 2 && (preg_match('/^[\p{Latin}]+$/u', $_POST['word']))) {
    require 'results.php';
}  else {
	header('Location:index.php');
	exit();
}

echo '<a href="http://localhost/PHP_Algebra/Zadatak%20Analizator%20rijeci/"><< Natrag na početnu stranicu</a>';
