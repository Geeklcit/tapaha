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
                      <form  class="navbar-form pull-right" methode="GET" action ="recherche.php">
                    <input type="text" class="input-sm form-control" placeholder="recherche" class="btn btn-default" name="recherche">
                    <button type="submit" class="btn btn-primary btn-sm" name="submit"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
                </form>
                     
                    </input>                        
                </div>
              

            </div>


        </div>

       

<?php

//Connexion à la base de données

 
$coursParPage =5; //Nous allons afficher 5 cours par page.
include('connexion.php');

//Une connexion SQL doit être ouverte avant cette ligne...
$retour_total = $con->query('SELECT COUNT(*) AS total FROM cours'); //Nous récupérons le contenu de la requête dans $retour_total


$donnees_total=$retour_total->fetch(); //On range retour sous la forme d'un tableau.


$total=$donnees_total['total']; //On récupère le total pour le placer dans la variable $total.
//Nous allons maintenant compter le nombre de pages.
$nombreDePages=ceil($total/$coursParPage);
?>


<?php
if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
{
     $pageActuelle=intval($_GET['page']);
 
     if($pageActuelle>$nombreDePages) // Si la valeur de $pageActuelle (le numéro de la page) est plus grande que $nombreDePages...
     {
          $pageActuelle=$nombreDePages;
     }
}
else // Sinon
{
     $pageActuelle=1; // La page actuelle est la n°1    
}
 
$premiereEntree=($pageActuelle-1)*$coursParPage; // On calcul la première entrée à lire


?>




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

                //$mor = $con->query('select * FROM cours');


            // La requête sql pour récupérer les cours de la page actuelle.
                $mor=$con->query("SELECT * FROM cours ORDER BY id LIMIT $premiereEntree,$coursParPage");
               
              
                // On affiche le resultat
                while ($donnees = $mor->fetch())
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
                $mor->closeCursor();
                 

                 ?>
                 </tbody>
                   
                   </table>                




<?php

for($i=1; $i<=$nombreDePages; $i++) //On fait notre boucle
{
     //On va faire notre condition
    // if($i==$pageActuelle) //Si il s'agit de la page actuelle...
     //{
         //echo " [ $i ] "; 
     //}	
     //else //Sinon...
     //{
          //echo " <a href='cours_panel.php?page='.$i.''>'.$i.'</a> ";

         echo "
         <nav aria-label='...'>
  <ul class='pagination pagination-sm'>
  
    <li class='page-item' class='active'><a href='cours_panel.php?page=$i' class='page-link'>$i</a></li>
    
  </ul>
</nav>
          ";
                 
                           
     //}
    }

?>

</body>
</html>