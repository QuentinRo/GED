<?php 
/*
	Auteur 					: Quentin Rossier
	Version					: 0.2
	Date de création		: 28.08.2018	
	Date de modification 	: 29.08.2018
	Description : Récupération des données du formulaire et écriture du fichier envoyé dans un CSV
 */
	// Test si le fichier à bien été envoyé  et sans erreur

	if (isset($_FILES['fichier']['size']) AND isset($_FILES['fichier']['tmp_name']) )
	{
	
		$size = $_FILES['fichier']['size'];

		$link = $_FILES['fichier']['tmp_name'];

	}

	if (isset($_POST['Option']) AND isset($_POST['Name']) )
	{
		$name = $_POST['Name']; 
		$option = $_POST['Option'];
	}

	// ouverture du ficher à la fin, et écriture de la list d'information
	$handle =fopen("data.csv", "a+");
	$list = array($name,$option,$size ." K");
	fputcsv($handle, $list);

	header("location: index.php");