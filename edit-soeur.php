<?php

session_start();

include('connection.php');


if(isset($_GET['id']))
{

 $results = $mysqli->query("SELECT * from soeurs where deleted = 'no' and id='$_GET[id]'");
$row_soeur = $results->fetch_assoc();



}



if(isset($_POST["edit_btn"])){

$nom = $_POST["nom"];  
$prenoms= $_POST["prenoms"];
$date_lieu_naissance= $_POST["date_lieu_naissance"];
$paroisse_dorigine= $_POST["paroisse_dorigine"];
$date_lieu_bapteme= $_POST["date_lieu_bapteme"];
$date_lieu_communion= $_POST["date_lieu_communion"];
$date_lieu_confirmation= $_POST["date_lieu_confirmation"];
$nom_prenoms_pere= $_POST["nom_prenoms_pere"];
$religion_pere= $_POST["religion_pere"];
$profession_pere= $_POST["profession_pere"];
$ethnie_pere= $_POST["ethnie_pere"];
$nom_prenoms_mere= $_POST["nom_prenoms_mere"];
$religion_mere= $_POST["religion_mere"];
$profession_mere= $_POST["profession_mere"];
$ethnie_mere= $_POST["ethnie_mere"];
$juvenat= $_POST["juvenat"];
$aspirat= $_POST["aspirat"];
$postulat= $_POST["postulat"];
$noviciat= $_POST["noviciat"];
$date_lieu_premiere_profession_religieuse= $_POST["date_lieu_premiere_profession_religieuse"];
$date_lieu_profession_perpetuelle= $_POST["date_lieu_profession_perpetuelle"];
$date_lieu_etude_primaire= $_POST["date_lieu_etude_primaire"];
$date_lieu_etude_secondaire= $_POST["date_lieu_etude_secondaire"];
$date_lieu_etude_universitaire= $_POST["date_lieu_etude_universitaire"];
$date_lieu_diplomes_obtenus= $_POST["date_lieu_diplomes_obtenus"];
$communautes_parcourues= $_POST["communautes_parcourues"];

$message = "";



if(($nom  =="" && $prenoms  =="" && $date_lieu_naissance  =="" && $paroisse_dorigine =="" && $date_lieu_bapteme =="" && $date_lieu_communion =="" &&
$date_lieu_confirmation =="" &&
$nom_prenoms_pere =="" &&
$religion_pere =="" &&
$profession_pere =="" &&
$ethnie_pere =="" &&
$nom_prenoms_mere =="" &&
$religion_mere =="" &&
$profession_mere =="" &&
$ethnie_mere =="" &&
$juvenat =="" &&
$aspirat =="" &&
$postulat =="" &&
$noviciat =="" &&
$date_lieu_premiere_profession_religieuse =="" &&
$date_lieu_profession_perpetuelle =="" &&
$date_lieu_etude_primaire =="" &&
$date_lieu_etude_secondaire =="" &&
$date_lieu_etude_universitaire =="" &&
$date_lieu_diplomes_obtenus =="" &&
$communautes_parcourues =="") || ($nom == "")
){

   $message .= "Veuillez entrer au moins le nom de la soeur.";
}

else{


      $update_row = $mysqli->query("UPDATE  soeurs SET
nom  = '$nom', 
prenoms = '$prenoms',
date_lieu_naissance = '$date_lieu_naissance',
paroisse_dorigine = '$paroisse_dorigine',
date_lieu_bapteme = '$date_lieu_bapteme',
date_lieu_communion = '$date_lieu_communion',
date_lieu_confirmation ='$date_lieu_confirmation',
nom_prenoms_pere ='$nom_prenoms_pere',
religion_pere ='$religion_pere',
profession_pere ='$profession_pere',
ethnie_pere ='$ethnie_pere',
nom_prenoms_mere ='$nom_prenoms_mere',
religion_mere ='$religion_mere',
profession_mere ='$profession_mere',
ethnie_mere ='$ethnie_mere',
juvenat ='$juvenat',
aspirat ='$aspirat',
postulat ='$postulat',
noviciat ='$noviciat',
date_lieu_premiere_profession_religieuse ='$date_lieu_premiere_profession_religieuse',
date_lieu_profession_perpetuelle ='$date_lieu_profession_perpetuelle',
date_lieu_etude_primaire ='$date_lieu_etude_primaire',
date_lieu_etude_secondaire ='$date_lieu_etude_secondaire',
date_lieu_etude_universitaire ='$date_lieu_etude_universitaire',
date_lieu_diplomes_obtenus ='$date_lieu_diplomes_obtenus',
communautes_parcourues ='$communautes_parcourues' where id='$_GET[id]'
        ");

if($update_row){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Profil edité avec succès')
    window.location.href='edit-soeur.php?id=$_GET[id]';
    </SCRIPT>");
}else{
    $message .="Désolé, profile non modifié, reessayer.";
}

    }

}

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Editer le profil</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
                <a class="navbar-brand" href="index.php">SOEURS NDE APPLICATION DE RECHERCHE</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <center><h2>Editer le profil</h2></center>

        <div class="row">


<a href="index.php" class="btn btn-info">Retour a la liste</a>
            <?php 

if(isset($message)){

    echo "<span style='color:red'>".$message."</span>";
}

            ?>
            <br><br>
            <form class="form-horizontal" role="form" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="nom">Nom:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $row_soeur['nom']; ?>">
    </div>
  </div>
  <br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="prenoms">Prénoms:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="prenoms" name="prenoms" value="<?php echo $row_soeur['prenoms']; ?>">
    </div>
  </div>
  <br>
   <div class="form-group">
    <label class="control-label col-sm-2" for="date_lieu_naissance">Date et lieu de naissance:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="date_lieu_naissance" name="date_lieu_naissance" value="<?php echo $row_soeur['date_lieu_naissance']; ?>">
    </div>
  </div><br>
<div class="form-group">
    <label class="control-label col-sm-2" for="paroisse_dorigine">Paroisse d'origine:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="paroisse_dorigine" name="paroisse_dorigine" value="<?php echo $row_soeur['paroisse_dorigine']; ?>">
    </div>
  </div>
<br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="date_lieu_bapteme">Date et lieu de baptême:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="date_lieu_bapteme" name="date_lieu_bapteme" value="<?php echo $row_soeur['date_lieu_bapteme']; ?>">
    </div>
  </div>
<br>
    <div class="form-group">
    <label class="control-label col-sm-2" for="date_lieu_communion">Date et lieu de la première communion:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="date_lieu_communion" name="date_lieu_communion" value="<?php echo $row_soeur['date_lieu_communion']; ?>">
    </div>
  </div>
<br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="date_lieu_confirmation">Date et lieu de la confirmation:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="date_lieu_confirmation" name="date_lieu_confirmation" value="<?php echo $row_soeur['date_lieu_confirmation']; ?>">
    </div>
  </div>
<br>
<div class="form-group">
    <label class="control-label col-sm-2" for="nom_prenoms_pere">Nom et Prenoms du père:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nom_prenoms_pere" name="nom_prenoms_pere" value="<?php echo $row_soeur['nom_prenoms_pere']; ?>">
    </div>
  </div>
<br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="religion_pere">Religion du père:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="religion_pere" name="religion_pere" value="<?php echo $row_soeur['religion_pere']; ?>">
    </div>
  </div><br>
   <div class="form-group">
    <label class="control-label col-sm-2" for="profession_pere">Profession du père:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="profession_pere" name="profession_pere" value="<?php echo $row_soeur['profession_pere']; ?>">
    </div>
  </div>
<br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="ethnie_pere">Ethnie du père:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="ethnie_pere" name="ethnie_pere" value="<?php echo $row_soeur['ethnie_pere']; ?>">
    </div>
  </div><br>
   <div class="form-group">
    <label class="control-label col-sm-2" for="nom_prenoms_mere">Nom et Prenoms de la mère</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nom_prenoms_mere" name="nom_prenoms_mere" value="<?php echo $row_soeur['nom_prenoms_mere']; ?>">
    </div>
  </div>
<br>
     <div class="form-group">
    <label class="control-label col-sm-2" for="religion_mere">Religion de la mère</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="religion_mere" name="religion_mere" value="<?php echo $row_soeur['religion_mere']; ?>">
    </div>
  </div>
<br>
   <div class="form-group">
    <label class="control-label col-sm-2" for="profession_mere">Profession de la mère</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="profession_mere" name="profession_mere" value="<?php echo $row_soeur['profession_mere']; ?>">
    </div>
  </div><br>
    <div class="form-group">
    <label class="control-label col-sm-2" for="ethnie_mere">Ethnie de la mère</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="ethnie_mere" name="ethnie_mere" value="<?php echo $row_soeur['ethnie_mere']; ?>">
    </div>
  </div><br>

    <div class="form-group">
    <label class="control-label col-sm-2" for="juvenat">Juvénat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="juvenat" name="juvenat" value="<?php echo $row_soeur['juvenat']; ?>">
    </div>
  </div>
<br>
   <div class="form-group">
    <label class="control-label col-sm-2" for="aspirat">Aspirat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="aspirat" name="aspirat" value="<?php echo $row_soeur['aspirat']; ?>">
    </div>
  </div>
<br>
    <div class="form-group">
    <label class="control-label col-sm-2" for="postulat">Postulat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="postulat" name="postulat" value="<?php echo $row_soeur['postulat']; ?>">
    </div>
  </div><br>
   <div class="form-group">
    <label class="control-label col-sm-2" for="noviciat">Noviciat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="noviciat" name="noviciat" value="<?php echo $row_soeur['noviciat']; ?>">
    </div>
  </div>
<br>

   <div class="form-group">
    <label class="control-label col-sm-2" for="date_lieu_premiere_profession_religieuse">Date et lieu de la première profession religieuse</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="date_lieu_premiere_profession_religieuse" name="date_lieu_premiere_profession_religieuse" value="<?php echo $row_soeur['date_lieu_premiere_profession_religieuse']; ?>">
    </div>
  </div><br>
   <div class="form-group">
    <label class="control-label col-sm-2" for="date_lieu_profession_perpetuelle">Date et lieu de la profession perpetuelle</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="date_lieu_profession_perpetuelle" name="date_lieu_profession_perpetuelle" value="<?php echo $row_soeur['date_lieu_profession_perpetuelle']; ?>">
    </div>
  </div>
<h3>Etudes</h3>
   <div class="form-group">
    <label class="control-label col-sm-2" for="date_lieu_etude_primaire">Primaires</label>
    <div class="col-sm-10">
      <textarea class="form-control"  id="date_lieu_etude_primaire" name="date_lieu_etude_primaire"><?php echo $row_soeur["date_lieu_etude_primaire"]; ?></textarea>
    </div>
  </div><br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="date_lieu_etude_secondaire">Secondaires</label>
    <div class="col-sm-10">
      <textarea class="form-control"  id="date_lieu_etude_secondaire" name="date_lieu_etude_secondaire"><?php echo $row_soeur["date_lieu_etude_secondaire"]; ?></textarea>
    </div>
  </div><br>
 <div class="form-group">
    <label class="control-label col-sm-2" for="date_lieu_etude_universitaire">Universitaires</label>
    <div class="col-sm-10">
      <textarea class="form-control"  id="date_lieu_etude_universitaire" name="date_lieu_etude_universitaire"><?php echo $row_soeur["date_lieu_etude_universitaire"]; ?></textarea>
    </div>
  </div>
<h3>Diplomes obtenus</h3>
 <div class="form-group">
    <div class="col-sm-12">
      <textarea class="form-control"  id="date_lieu_diplomes_obtenus" name="date_lieu_diplomes_obtenus"><?php echo $row_soeur["date_lieu_diplomes_obtenus"]; ?></textarea>
    </div>
  </div>

  <h3>Communautés parcourues</h3>
 <div class="form-group">
    <div class="col-sm-12">
      <textarea class="form-control"  id="communautes_parcourues" name="communautes_parcourues"><?php echo $row_soeur["communautes_parcourues"]; ?></textarea>
    </div>
  </div>



  <div class="form-group"> 
    <div class="col-sm-12">
      <button type="submit" class="btn btn-success btn-block" name="edit_btn">Editer</button>

      <br><br>
    </div>
  </div>
</form>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
