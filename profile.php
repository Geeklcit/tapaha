<?php  session_start();
if(empty($_SESSION['email']))
{
 header("location:login.php");
}

?>

Bonjour Mr :<?php echo $_SESSION['prenom']; ?>


<a href="logout.php" > se deconnecter</a>

<a href="ajout.php" >ajouter un cours</a>



    




