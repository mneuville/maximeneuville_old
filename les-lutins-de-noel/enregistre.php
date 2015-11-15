<?php
	// Récupération des données via POST
	$a_renvoyer=$_POST["var_envoi"];
	$a_renvoyer=stripslashes($a_renvoyer); 
	
	// Enregistrer les donnees
	$fichier = 'score.xml';
	$fp=fopen($fichier,"a+");
	fwrite($fp,"$a_renvoyer \n");
	fclose($fp);
?>