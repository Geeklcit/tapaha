
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>panel de cours</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>

<div class="container" >
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#" style="margin-right: 100px;"> <span class="glyphicon glyphicon-ok" style="color: blue;" >Xeon</span></a>
      </div>
      <ul class="nav navbar-nav" class="nav">
        <li class="active" class="li"><a href="#">Home</a></li>
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

    <div class="container" style="margin-top:5%">
        <div class="table-title">
            <div class="row">
                <div class="col-md-4">
                    <h2>Gestion des cours</h2>
                </div>

                <div class="col-md-4">
                    <a href="ajout.php" class="btn btn-primary"><i class="material-icons">&#xE147;</i> <span>Ajouter un cours</span></a>
                </div>
                <div class="col-md-4">
                    <form  class="navbar-form pull-right" methode="GET" action ="recherche.php">
                        <input type="text" class="input-sm form-control" placeholder="recherche" class="btn btn-default" name="recherche">
                        <button type="submit" class="btn btn-primary btn-sm" name="submit" value="submit"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
                        
                    </form>
                     
                                          
                </div>
              

            </div>


        </div>

  <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>id</th>	
                        <th>titre du cours</th>						
						<th>Date de debut du cours </th>
                        <th>Date de fin du cours </th>
						<th>Description du cours</th>
                        <th>Action</th>
                    </tr>
                    
                </thead>
                <tbody>    
<?php


    include("connexion.php");

    $requete = "select * from cours";
   
    
     $saisi_recherche = $_GET['recherche'];

     $titre = $_POST['titre'];
     $debut = $_POST['debut'];
     $fin = $_POST['fin'];
     $description = $_POST['description'];
  
//$requete = "select * from cours where titre LIKE '%$saisi_recherche%'";


try{
$requete=$con->query("SELECT * FROM cours WHERE titre LIKE '%$saisi_recherche%'");

echo "recherche trouvé";
}
catch(PDOException $e)
    {
    echo "blem de selection " . $e->getMessage();
    }

       // On affiche le resultat
       while ($donnees = $requete->fetch())
       {

           //On affiche les données dans le tableau
           echo "</tr>";
           echo "<td> $donnees[id] </td> ";
           echo "<td> $donnees[titre] </td> ";
           echo "<td> $donnees[debut] </td>";
           echo "<td> $donnees[fin]</td>";
           echo "<td> $donnees[description] </td>";
           echo "<td> <a href='edit.php?id=$donnees[id]' class='settings' title='modifier'><i class='material-icons'>&#xE8B8;</i></a>
           <a href='delete.php?id=$donnees[id]' classe='delete' title='Supprimer' ><span class='glyphicon glyphicon-trash'></span></a> </td>";
           echo "</tr>";
       }
       $donnees->closeCursor();

                 ?>
                 </tbody>
                   
                   </table>                




</body>
</html>
