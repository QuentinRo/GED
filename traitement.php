<?php 
/*
	Auteur 					: Quentin Rossier
	Version					: 0.1
	Date de création		: 28.08.2018	
	Date de modification 	: 28.08.2018
	Description : écriture du fichier envoyé dans un CSV

	solution à voir https://www.developpez.net/forums/d271948/php/langage/fichiers/input-file-recuperation-chemin/
 */
	// Test si le fichier à bien été envoyé  et sans erreur
	// https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913099-transmettre-des-donnees-avec-les-formulaires

	// AND isset($FILES['fichier']['webkitRelativePath'])Pour le chemin du fichier
	if (isset($_FILES['fichier']['name']) AND isset($_FILES['fichier']['size']) AND isset($_FILES['fichier']['tmp_name']) )
	{
	
		$name = $_FILES['fichier']['name'];
		$size = $_FILES['fichier']['size'];

		$link = $_FILES['fichier']['tmp_name'];

	}

	if (isset($_POST['filepath']))
	{
		echo $_POST['filepath'];
	}

	if (isset($_POST['Option']) )
	{
	
		$option = $_POST['Option'];
	
	}

	// a href"link" dowload = pour avoir le lien clicable mais il faut récuperer le truc et retirer le "/" visiblement
	//manque d'attraper le lien dans le post
		//récuperer les infos du formulaire

		//récuperer les infos du fichier

		//sauvegarder le fichier
		// https://developer.mozilla.org/fr/docs/Web/HTML/Element/Input/file
		$handle =fopen("data.csv", "a+");
		$list = array($name,$option,$size,$link);
		// Je n'ai pas de tableau multiple, il faut voir si je ne peut pas le faire sans foreach -----> fputcsv($handle, fields);
		fputcsv($handle, $list);

		// header("location: index.php");
	

	/* solution javascripte ? solution en flash visiblement 
		https://www.sitepoint.com/community/t/getting-the-full-path-with-input-type-file/1690/5
		
fkieber
SitePoint Member
Sep '04
Hi,

I search also an anser to this question. An because i have found nothing i have created a javascript that can be usefull.

Here it is.

<form method="what you want" enctype="do not use multipart/form-data to avoid transmission of the file contents to the server">
<input type="hidden" name="full_path_real">
<input name="full_path_fake" type="file" onchange='document.forms[0].elements["full_path_real"].value=document.forms[0].elements["full_path_fake"].value'>
<input value="Go" type="submit">
</form>

Now use $REQUEST['fullpath_real'] and forgot $REQUEST['fullpath_fake'];

That's all folks for all javascript able internet clients.

Hope it was what you want. In my case i am happy.


