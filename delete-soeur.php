<?php

session_start();

include('connection.php');


if(isset($_GET['id'])){

$results = $mysqli->query("UPDATE soeurs SET deleted='yes' WHERE id='$_GET[id]'");
if($results){
	$_SESSION['delete_message'] = "Profil effacé avec succes";
}
else{

$_SESSION['delete_message'] = "Profil non effacé.Reessayez";
}	

header('location:index.php');
}


?>