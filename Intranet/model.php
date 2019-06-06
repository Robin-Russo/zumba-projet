<?php
// Se connecte à la base de données et traite les données.

function sqlConnect()
{

	$bdd = new mysqli ('localhost', 'root', 'formalbion031218', 'zumba');
	if ($bdd->connect_errno)
	{
		echo "Echec lors de la connexion à MySQL
		(" . $bdd->connect_errno . ") " . $bdd->connect_errno;
	}
	return $bdd;
}

function connectAdmin ()
{
	
	$bdd = sqlConnect();
	if ((isset($_POST['mail'])) && (isset($_POST['pwd']))) 
	{
		//Requête qui va prendre le nom User

		$result = $bdd->query('select mail_admin, mdp_admin from admin where mail_admin = "'.$_POST['mail'].'"');
		$nbl = $result->num_rows;
		$tab = $result->fetch_row();

		// On récupère chaque case du tableau

		$logBDD = $tab[0]; //Log1
		$mdpBDD = $tab[1]; //Mdp1
  
		//On referme la BDD

		mysqli_close($bdd);

		//Vérification identifiants

		if ($_POST['mail'] == $logBDD && $_POST['pwd'] == $mdpBDD) 
		{
			session_start();
			$_SESSION['loginbdd'] = $logBDD;
			$_SESSION['mdpbdd'] = $mdpBDD;
			$_SESSION['connect'] = 0;

  			echo '<meta http-equiv="refresh" content="0;url=index.php?navigation"/>';
  		}

  		else
  			echo "<html><center>Login ou mot de passe incorrect, veuillez réentrer vos identifiants.</center></html>";
	}
}