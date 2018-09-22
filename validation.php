<?php
/*
if(isset($_POST['submit'])){

	c
		require 'results.php';
	} else {
		if(empty($_POST['word']) && strlen($_POST['word']) < 2 && (!ctype_alpha($_POST['word']))) {
			echo 'Pogrešan unos riječi.<br>';
		}
	}

} else {
	header('Location:index.php');
	exit();
}*/
setlocale(LC_ALL, 'hr_HR');
$word = $_POST['word'];

if (empty($word))  {
    echo 'Unesite riječ'.'<br>';
}
elseif (strlen($word) < 3 ) {
    echo 'Riječ mora sadržavati više od 2 znaka'.'<br>';
}
elseif (!ctype_alpha($word)) {
    echo 'Riječ može sadržavati samo slova';

} elseif  (!empty($word) && strlen($word) > 2 && (ctype_alpha($word))) {
    require 'results.php';
}  else {
	header('Location:index.php');
	exit();
}
