<?php
// Se contente de l'affichage des informations.
function showView()
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
    </body>
</html>
';
}

function showNavigation()
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
        <h1>Association de Zumba de Bellevue</h1>
        <br><br>
        <button type="button">
        <a href="index.php?admin">Administrateur</a>
        </button>
    </body>
</html>
';
}

function showAdmin()
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
        <h1>Association de Zumba de Bellevue</h1>
        <br><br>
        <center>Coucou</center>
    </body>
</html>
';
}