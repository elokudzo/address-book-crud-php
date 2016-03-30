<?php
session_start();
include("connection.php");
include("functions.php"); 

if(!isset($_GET["id"])){

	header("location: index.php");
}
else{

	 $results = $mysqli->query("SELECT * from soeurs where deleted = 'no' and id='$_GET[id]'");

    $get_total_rows = $results->num_rows;


$row_soeur = $results->fetch_assoc();


}




?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SOEURS NDE TOGO</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">SOEUR NDE APPLICATION DE RECHERCHE</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
 
   <form class="navbar-form navbar-left" role="search" action="search.php" method="GET">
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control " placeholder="Recherche"  id="search_txt" name="search_text">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default" name="search"  onClick="return empty()">
                        <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
            </form>
<br>
<a href="index.php" class="btn btn-info">Retour a la liste</a>

           <br><br>
 <h2><?php echo $row_soeur["nom"]."   "; ?>
 <?php echo $row_soeur["prenoms"]; ?></h3>
<br>
 <a href="edit-soeur.php?id=<?php echo $row_soeur['id']?>" class="btn btn-success"> Editer</a> 
<a href="delete-soeur.php?id=<?php echo $row_soeur['id']?>" onclick="return confirmDelete()" class="btn btn-danger">Effacer</a
 <br><br><br><br>
           <?php


  if($get_total_rows != 0){

?>


 <table class="table table-striped table-hover">

        <tr><td>Nom: </td><td><?php echo $row_soeur["nom"]; ?></td></tr>
        <tr><td>Prénoms: </td><td><?php echo $row_soeur["prenoms"]; ?></td></tr>
        <tr><td>Date et Lieu de naissance </td><td><?php echo $row_soeur["date_lieu_naissance"]; ?></td></tr>
        <tr><td>Paroisse d'origine </td><td><?php echo $row_soeur["paroisse_dorigine"]; ?></td></tr>
        <tr><td>Date et lieu de la première communion </td><td><?php echo $row_soeur["date_lieu_communion"]; ?></td></tr>
         <tr><td>Date et lieu de la confirmation </td><td><?php echo $row_soeur["date_lieu_confirmation"]; ?></td></tr>
         <tr><td>Nom et Prenoms du père </td><td><?php echo $row_soeur["nom_prenoms_pere"]; ?></td></tr>
          <tr><td>Religion du père</td><td><?php echo $row_soeur["religion_pere"]; ?></td></tr>

 <tr><td>Profession du père </td><td><?php echo $row_soeur["profession_pere"]; ?></td></tr>
 <tr><td>Ethnie du père </td><td><?php echo $row_soeur["ethnie_pere"]; ?></td></tr>
 <tr><td>Nom et Prenoms de la mère</td><td><?php echo $row_soeur["nom_prenoms_mere"]; ?></td></tr>
 <tr><td>Religion de la mère </td><td><?php echo $row_soeur["religion_mere"]; ?></td></tr>
 <tr><td>Profession de la mère </td><td><?php echo $row_soeur["profession_mere"]; ?></td></tr>
 <tr><td>Ethnie de la mère </td><td><?php echo $row_soeur["ethnie_mere"]; ?></td></tr>
 <tr><td>Juvénat </td><td><?php echo $row_soeur["juvenat"]; ?></td></tr>
 <tr><td>Aspirat </td><td><?php echo $row_soeur["aspirat"]; ?></td></tr>
 <tr><td>Postulat </td><td><?php echo $row_soeur["postulat"]; ?></td></tr>
 <tr><td>Noviciat </td><td><?php echo $row_soeur["noviciat"]; ?></td></tr>
 <tr><td>Date et lieu de la première profession réligieuse </td><td><?php echo $row_soeur["date_lieu_premiere_profession_religieuse"]; ?></td></tr>
 <tr><td>Date et lieu de la profession perpétuelle </td><td><?php echo $row_soeur["date_lieu_profession_perpetuelle"]; ?></td></tr>
 <tr><td>Etudes primaires </td><td><?php echo $row_soeur["date_lieu_etude_primaire"]; ?></td></tr>
 <tr><td>Etudes secondaires </td><td><?php echo $row_soeur["date_lieu_etude_secondaire"]; ?></td></tr>
<tr><td>Etudes universitaires </td><td><?php echo $row_soeur["date_lieu_etude_universitaire"]; ?></td></tr>
<tr><td>Diplomes obtenus </td><td><?php echo $row_soeur["date_lieu_diplomes_obtenus"]; ?></td></tr>
<tr><td>Communautés parcourues </td><td><?php echo $row_soeur["communautes_parcourues"]; ?></td></tr>





</tbody>
</table>

            <?php

        }

     else{
?>
       <p>Aucune donnee..</p>  
<?php
}
?>


   
  

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script>

function confirmDelete(){

    return confirm("etes vous sur de vouloir supprimer?");
}

</script>

</body>

</html>
