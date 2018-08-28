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
	if (isset($_FILE['file']) AND $_FILE['file']['error'] == 0)
	{

		//récuperer les infos du formulaire

		//récuperer les infos du fichier
		
		$size == $_FILES['file']['size']; // selectionna la taille du fichier 
		$name == $_FILES['file']['name']; // selectionna le nom du fichier


		//sauvegarder le fichier
		// https://developer.mozilla.org/fr/docs/Web/HTML/Element/Input/file
		$handle =fopen("data.csv", "a+");
		$list = array($name,'Cat','Name','Link',$size);
		// Je n'ai pas de tableau multiple, il faut voir si je ne peut pas le faire sans foreach -----> fputcsv($handle, fields);
		foreach ($list as $fields)
		{
			fputcsv($handle, $fields)
		}

		//retourner sur la page avec un petit message d'erreur ou non 

	}

?>