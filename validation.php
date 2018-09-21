<?php

if(isset($_POST['submit'])){
	if(!empty($_POST['ime'])){
		echo 'Tvoje ime je: ' . $_POST['ime'] . '<br>';
	} else {
		echo 'Upišite ime.<br>';
	}

	if(!empty($_POST['prezime'])){
		echo 'Tvoje prezime je: ' . $_POST['prezime'] . '<br>';
	} else {
		echo 'Upišite prezime.<br>';
	}

}
