<?php

require 'functions.php';

if(isset($_POST['submit'])){
	echo 'Tvoja riječ je: ' . (to_uppercase( $_POST['word'])) . '<br>';
    echo 'Broj samoglasnika: ' . (vowels($_POST['word'])) .  '<br>';
    echo 'Broj suglasnika: ' . (consonants($_POST['word'])) .  '<br>';



} else {
	header('Location:index.php');
	exit();
}
