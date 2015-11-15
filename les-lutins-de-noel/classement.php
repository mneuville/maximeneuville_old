<?php
	// Récupération des données via POST
	$a_renvoyer=$_POST["var_envoi"];
	$a_renvoyer=stripslashes($a_renvoyer); 
	
	// Enregistrer les donnees
	$fichier = 'intelliance.xml';
	
	$fp = fopen($fichier,"w+");
	fwrite($fp, $a_renvoyer." \n");
	fclose($fp);
?>