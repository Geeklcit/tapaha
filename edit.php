

<?php

include("header.html");
include("connexion.php");
$id = $_GET['id'];
echo $id;
/*
// sql montrer les données à modifier
$sqli = "SELECT * FROM cours";

//executer la requete 
$mort=$con->query($sqli);
echo $mort;
*/

$mor = $con->query("select * FROM cours where id='$id' ");

// On affiche le resultat
while ($donnees = $mor->fetch())
{
    //On affiche les données dans le tableau
    
    
    $titre=$donnees['titre'];
    $debut=$donnees['debut'];
    $fin=$donnees['fin'];
    $description=$donnees['description'];

}
            

?>

<?php


include("connexion.php");


if(isset($_POST['submit'])){
    
    $titre = $_POST['titre'];
    $debut = $_POST['debut'];
    $fin = $_POST['fin'];
    $description = $_POST['description'];
    $id = $_POST['id'];

    echo $id;
  

    if($titre&&$debut&&$fin&&$description){
    

    try {

         $sqler = " UPDATE cours SET titre = '$titre', debut ='$debut' , fin ='$fin' , description ='$description' WHERE id='$id'";
         $con->exec($sqler);
         echo "cours modifié avec sucées";
        header('Location: cours_panel.php');

  }
    catch(PDOException $e)
    {
    echo "blem d'insertion " . $e->getMessage();
    }

} else {
        echo "veuillez saisir tous les champs";
    }

}

?>  
<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <h2>Moification du cours</h2>
</div>
<form method="post" action="edit.php">
    
    <div class="input-group">
        <label>Titre du cours</label>
        <input type="text" name="titre" value="<?php echo $titre;?>">
        <?php if(empty($titre)) {
            echo "<font color='red'>Champ vide</font><br/>"; 
        }?>
    </div>
<div class="input-group date" > 
    <label>date de debut<label/>
    <input type="date"  name = "debut" class="form-control" value="<?php echo $debut;?>">
    <?php if(empty($titre)) {
            echo "<font color='red'>Champ vide</font><br/>"; 
        }?>
</div>


<div class="input-group date" >
    <label>date de fin <label/>
    <input type="date" class="form-control" name="fin" value="<?php echo $fin;?>"> 
    <?php if(empty($titre)) {
            echo "<font color='red'>Champ vide</font><br/>"; 
        }?>   
</div>

   
    <div class="input-group" >
        <label>Description</label>
        <input type="textarea" name ="description" value="<?php echo $description;?>">
        <?php if(empty($titre)) {
            echo "<font color='red'>Champ vide</font><br/>"; 
        }?>
    </div>

    <div class="input-group">
        <button type="submit" class="btn" name="submit">envoyer</button>
        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
    </div>
 
</form>
</body>
</html>
