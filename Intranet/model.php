<?php
// Se connecte à la base de données et traite les données.

function sqlConnect()
{

	$bdd = new mysqli ('localhost', 'root', 'root', 'zumba');
	if ($bdd->connect_errno)
	{
		echo "Echec lors de la connexion à MySQL
		(" . $bdd->connect_errno . ") " . $bdd->connect_errno;
	}
}