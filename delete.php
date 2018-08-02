<?php
 include("connexion.php");



 $id = $_GET['id'];
 
 var_dump($id); 


try {

    // sql effacer un enregistrement
    $sqli = "DELETE FROM cours WHERE id=$id";

    //executer la requete 
    $con->exec($sqli);
    echo "cours supprimée";
    }
catch(PDOException $e)
    {
    echo $sqli . "<br>" . $e->getMessage();
    }

    header("Location:cours_panel.php");
?> 

