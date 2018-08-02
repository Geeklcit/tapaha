<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>panel de cours</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
<?php 

/*
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
*/


?>

<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
<script src="jquery-1.7.1.min.js"></script>



</head>
<body>


<div class="container" >
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#" style="margin-right: 100px;"> <span class="glyphicon glyphicon-ok" style="color: blue;" >Xeon</span></a>
      </div>
      <ul class="nav navbar-nav" class="nav">
        <li class="active" class="li"><a href="index.php">Home</a></li>
        <li class="li" ><a href="#">service</a></li>
        <li class="li" ><a href="#">Portflio</a></li>
        <li class="li" ><a href="#">Phong</a></li>
        <li class="li" ><a href="#">About Us</a></li>
        <li class="li" ><a href="#">Contact</a></li>
        <li class="li" ><a href="inscription.php">Inscription</a></li>
        <li class="li" ><a href='logout.php'>Deconnexion</a>
        </li>
      </ul>
    </div>
  </nav>


</div>

    <div class="container"   style="margin-top:5%">
        <div class="table-title">
            <div class="row">
                <div class="col-md-4">
                    <h2>Gestion des cours</h2>
                </div>

                <div class="col-md-4">
                    <a href="ajout.php" class="btn btn-primary"><i class="material-icons">&#xE147;</i> <span>Ajouter un cours</span></a>
                </div>
                <div class="col-md-4">
                      <form  class="navbar-form pull-right" methode="GET" action ="#">
                    <input type="text" class="input-sm form-control" placeholder="recherche" class="btn btn-default" name="recherche">
                    <button type="submit" class="btn btn-primary btn-sm" name="submit"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
                </form>
                     
                    </input>                        
                </div>
              

            </div>


        </div>




  <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>id</th>	
                        <th>photo</th>	
                        <th>titre du cours</th>						
						<th>Date de debut du cours </th>
                        <th>Date de fin du cours </th>
						<th>Description du cours</th>
                        <th>Action</th>
                        <th>publication</th>
                    </tr>
                    


                </thead>
                <tbody> 




<?php
 include("connexion.php");



 $id = $_GET['id'];
 
 var_dump($id); 


try {

    // sql effacer un enregistrement
    $sqli = "UPDATE cours SET publier = 1 WHERE id='$id'";

    //executer la requete 
    $con->exec($sqli);
    echo "cours publié";
    }
catch(PDOException $e)
    {
    echo $sqli . "<br>" . $e->getMessage();
    }

  
  //header("Location:publier.php");
?> 

  <?php
                       

                       include("connexion.php");

           //$mor = $con->query('select * FROM cours');


       // La requête sql pour récupérer les cours de la page actuelle.
           $mor=$con->query("SELECT * FROM cours where publier=1");
          
         
           // On affiche le resultat
           while ($donnees = $mor->fetch())
           {

               //On affiche les données dans le tableau
               echo "</tr>";
               echo "<td> $donnees[id] </td> ";
               echo "<td><img src ='./image/$donnees[photo]'/></td> ";
               echo "<td> $donnees[titre] </td> ";
               echo "<td> $donnees[debut] </td>";
               echo "<td> $donnees[fin]</td>";
               echo "<td> $donnees[description] </td>";
               echo "<td> <a href='edit.php?id=$donnees[id]' class='settings' title='modifier'><i class='material-icons'>&#xE8B8;</i></a>
               <a href='delete.php?id=$donnees[id]' classe='delete' title='Supprimer' ><span class='glyphicon glyphicon-trash'></span></a> </td>";
               echo "<td> <a href='publier.php?id=$donnees[id]' class='settings' title='publier'>publier<i class='material-icons'>&#xE8B8;</i></a></td>";
               echo "</tr>";
              
           }
           $mor->closeCursor();
            

            ?>

