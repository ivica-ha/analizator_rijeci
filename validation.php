<?php

if(isset($_POST['submit'])){

	if(!empty($_POST['ime']) && !empty($_POST['prezime'])){
		require 'results.php';
	} else {
		if(empty($_POST['ime'])){
			echo 'Upišite ime.<br>';
		}

		if(empty($_POST['prezime'])){
			echo 'Upišite prezime.<br>';
		}
	}

} else {
	header('Location:index.php');
	exit();
}
