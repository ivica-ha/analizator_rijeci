<?php

require_once 'functions.php';

if(isset($_POST['submit'])){
	echo to_uppercase('Tvoja riječ je: ' . $_POST['word'] . '<br>');

} else {
	header('Location:index.php');
	exit();
}
