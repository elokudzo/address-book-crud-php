<?php
session_start();

include("connection.php");
include("functions.php"); 



if(!isset($_GET["search_text"])){

    header("location: index.php");
}
else{
    $data = $_GET["search_text"];

$my_data   = preg_split('/\s+/', $data);

$search_data =  implode("', '", $my_data) ; 

     $results = $mysqli->query("SELECT * from soeurs where nom IN ('$search_data') OR prenoms IN('$search_data') and deleted = 'no'");

    $get_total_rows = $results->num_rows;
}


?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Recherche...</title>

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
<a href="create-soeur.php" class="btn btn-info pull-right">Ajouter un profil</a> 
           <?php


  if($get_total_rows != 0){

?>


 <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prénoms</th>
        <th>Date et Lieu de naissance</th>
        <th>Paroisse d'origine</th>
        <th>Opérations</th>
      </tr>
    </thead>
    <tbody>

        <?php

      while ($row_soeur = $results->fetch_assoc()) {

?>
        <tr>

        <td><a href="view-soeur.php?id=<?php echo $row_soeur['id']?>"><?php echo $row_soeur["nom"]; ?></td>
        <td><?php echo $row_soeur["prenoms"]; ?></td>
        <td><?php echo $row_soeur["date_lieu_naissance"]; ?></td>
        <td><?php echo $row_soeur["paroisse_dorigine"]; ?></td>
        <td><a href="edit-soeur.php?id=<?php echo $row_soeur['id']?>" class="btn btn-success"> Editer</a><a href="delete-soeur.php?id=<?php echo $row_soeur['id']?>" onclick="return confirmDelete()" class="btn btn-danger col-sm-offset-2">Effacer</a></td>
        <tr>

            <?php

        }

           ?>
</tbody>
</table>

<?php
} else{
?>
       <h3>Aucun résultat...</h3>
      
<?php
}

$mysqli->close();

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


function empty() {
    var x;
    x = document.getElementById("search_txt").value;
    if (x == "") {
        return false;
    };
}



</script>
</body>

</html>
