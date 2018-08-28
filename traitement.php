<?php 
/*
	Auteur 					: Quentin Rossier
	Version					: 0.1
	Date de création		: 28.08.2018	
	Date de modification 	: 28.08.2018
	Description : écriture du fichier envoyé dans un CSV
 */
	// Test si le fichier à bien été envoyé  et sans erreur
	// https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913099-transmettre-des-donnees-avec-les-formulaires

	// AND isset($FILES['fichier']['webkitRelativePath'])Pour le chemin du fichier
	if (isset($_FILES['fichier']['name']) AND isset($_FILES['fichier']['size']) )
	{
	
		$name = $_FILES['fichier']['name'];
		$size = $_FILES['fichier']['size'];
	
	}

	if (isset($_POST['Option']) )
	{
	
		$option = $_POST['Option'];
	
	}

		//récuperer les infos du formulaire

		//récuperer les infos du fichier

		//sauvegarder le fichier
		// https://developer.mozilla.org/fr/docs/Web/HTML/Element/Input/file
		$handle =fopen("data.csv", "a+");
		$list = array($name,$option,$size);
		// Je n'ai pas de tableau multiple, il faut voir si je ne peut pas le faire sans foreach -----> fputcsv($handle, fields);
		fputcsv($handle, $list);

		header("location: index.php");
	
