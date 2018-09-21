<?php

if(isset($_POST['submit'])){
	echo 'Tvoje ime je: ' . $_POST['ime'] . '<br>';
	echo 'Tvoje prezime je: ' . $_POST['prezime'] . '<br>';

} else {
	header('Location:index.php');
	exit();
}
