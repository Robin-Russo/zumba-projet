<?php

function showHeader()
{
 echo '
 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Association Zumba</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>
    <body>
 ';   
}

function showFooter()
{
echo '
    <div
    </body>
</html>
';
}

function showConnect()
{ 
echo '
<h1>Association de Zumba de Bellevue</h1>
<br><br>
<form method="post" action="index.php">
	<label>E-mail<br>
		<input type="mail" name="mail" required size="20"/>
	</label><br><br>
	<label>Mot de passe<br>
		<input type="password" name="pwd" required size="20"/>
	</label><br><br>
	<input type="submit" value="Connexion" name="connect">
</form>
';
}

function showNavigation()
{ 
session_start();
echo '
<h1>Association de Zumba de Bellevue</h1>
<div id="menuNav">
    <button type="button">
        <a href="index.php?admin">Administrateur</a>
    </button>
    <button type="button">
        <a href="index.php?adherent">Adhérents</a>
    </button>
    <button type="button">
        <a href="index.php?reservation">Réservations</a>
    </button>
    <button type="button">
        <a href="index.php?verification">Vérification</a>
    </button>
</div>
<div id="button-bot">
<input type="submit" value="Déconnexion" name="disconnect">
</div>
';
}

function showAdmin()
{ 
session_start();
echo '
<h1>Association de Zumba de Bellevue</h1>
<br><br>
<center>Coucou</center>
<div id="button-bot">
<button type="button">
    <a href="index.php?navigation">Retour</a>
</button>
<input type="submit" value="Déconnexion" name="disconnect">
</div>
';
}

function showAdherent()
{ 
session_start();
echo '
<h1>Association de Zumba de Bellevue</h1>
<br><br>
<center>Salut</center>
<div id="button-bot">
<button type="button">
    <a href="index.php?navigation">Retour</a>
</button>
<input type="submit" value="Déconnexion" name="disconnect">
</div>
';
}

function showReservation()
{ 
session_start();
echo '
<h1>Association de Zumba de Bellevue</h1>
<br><br>
<center>Hey</center>
<div id="button-bot">
<button type="button">
    <a href="index.php?navigation">Retour</a>
</button>
<input type="submit" value="Déconnexion" name="disconnect">
</div>
';
}

function showVerification()
{ 
session_start();
echo '
<h1>Association de Zumba de Bellevue</h1>
<br><br>
<center>Hello</center>
<div id="button-bot">
<button type="button">
    <a href="index.php?navigation">Retour</a>
</button>
<input type="submit" value="Déconnexion" name="disconnect">
</div>
';
}