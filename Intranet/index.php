<?php
// Fait le lien entre le model et la view. ==> Index = Controler
require_once('model.php');

require_once('view.php');

showHeader();

if($_SERVER["QUERY_STRING"]=="")
{
   showConnect();
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

if ($_SERVER["QUERY_STRING"]=="adherent") {
	showAdherent();
}

if ($_SERVER["QUERY_STRING"]=="reservation") {
	showReservation();
}

if ($_SERVER["QUERY_STRING"]=="verification") {
	showVerification();
}

showFooter();