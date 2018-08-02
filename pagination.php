
<html>
<head>
<title>Exemple de pagination automatique sur un livre d or</title>
</head>
<body>
<?php

//Connexion à la base de données
include('connexion.php');
 
$coursParPage=5; //Nous allons afficher 5 cours par page.
 
//Une connexion SQL doit être ouverte avant cette ligne...
$retour_total=mysql_query('SELECT COUNT(*) AS total FROM cours'); //Nous récupérons le contenu de la requête dans $retour_total
$donnees_total=mysql_fetch_assoc($retour_total); //On range retour sous la forme d'un tableau.
$total=$donnees_total['total']; //On récupère le total pour le placer dans la variable $total.
 
//Nous allons maintenant compter le nombre de pages.
$nombreDePages=ceil($total/$coursParPage);

 
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
 
// La requête sql pour récupérer les cours de la page actuelle.
$retour_cours=mysql_query('SELECT * FROM cours ORDER BY id LIMIT '.$premiereEntree.', '.$coursParPage.'');
 
while($donnees_cours=mysql_fetch_assoc($retour_cours)) // On lit les entrées une à une grâce à une boucle
{
    /* 
    //Je vais afficher les cours dans des petits tableaux. C'est à vous d'adapter pour votre design...
     //De plus j'ajoute aussi un nl2br pour prendre en compte les sauts à la ligne dans le cour.
     echo '<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                     <td><strong>Ecrit par : '.stripslashes($donnees_cours['titre']).'</strong></td>
                </tr>
                <tr>
                     <td>'.nl2br(stripslashes($donnees_cours['description'])).'</td>
                </tr>
            </table><br /><br />';
    //J'ai rajouté des sauts à la ligne pour espacer les cours. */
    
    echo'<table><tr>';
    echo "</tr>";
    echo "<td> $donnees_cours[id] </td> ";
    echo "<td> $donnees_cours[titre] </td> ";
    echo "<td> $donnees_cours[debut] </td>";
    echo "<td> $donnees_cours[fin]</td>";
    echo "<td> $donnees_cours[description] </td>";
    echo "<td> <a href='edit.php?id=$donnees_cours[id]' class='settings' title='modifier'><i class='material-icons'>&#xE8B8;</i></a>
    <a href='delete.php?id=$donnees_cours[id]' classe='delete' title='Supprimer' ><span class='glyphicon glyphicon-trash'></span></a> </td>";
    echo "</tr>";



}
 
echo '<p align="center">Page : '; //Pour l'affichage, on centre la liste des pages
for($i=1; $i<=$nombreDePages; $i++) //On fait notre boucle
{
     //On va faire notre condition
     if($i==$pageActuelle) //Si il s'agit de la page actuelle...
     {
         echo ' [ '.$i.' ] '; 
     }	
     else //Sinon...
     {
          echo ' <a href="pagination.php?page='.$i.'">'.$i.'</a> ';
     }
}
echo '</p>';



?>
</body>
</html>