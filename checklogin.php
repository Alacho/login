<?php

//Inkluderer header - Kan sløyfes
include "/include/header.php";

//Database informasjon
$db_host="localhost";
$db_name="login";
$db_username="root";
$db_password="";

//Kobler til database og velger den
$mysqli_con = mysqli_connect($db_host, $db_username, $db_password, $db_name);
$mysqli_con->select_db("login") or die("Kunne ikke");

?>