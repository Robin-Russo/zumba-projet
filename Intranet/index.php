<?php
// Fait le lien entre le model et la view. ==> Index = Controler
require_once('model.php');

require_once('view.php');

if($_SERVER["QUERY_STRING"]=="")
{
   showView();
}

if(isset($_POST['connect']))
{
   connectAdmin();
}

if ($_SERVER["QUERY_STRING"]=="navigation") {
	showNavigation();
}

if ($_SERVER["QUERY_STRING"]=="admin") {
	showAdmin();
}
