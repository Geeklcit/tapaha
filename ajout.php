
<?php

//87.98.154.146

if(isset($_POST['submit'])){
    
    $titre= htmlspecialchars(trim($_POST['titre']));
    $debut = htmlspecialchars(trim($_POST['debut']));
    $fin=htmlspecialchars(trim($_POST['fin']));
    $description= htmlspecialchars(trim($_POST['description']));


    if($titre&&$debut&&$fin&&$description){
    

    $servername = "localhost";
    $username = "talla";
    $pass = "passer";


    try {
        $conn = new PDO("mysql:host=$servername;dbname=bakeli", $username, $pass);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection reuissie";

         $sqle = "INSERT INTO cours (titre, debut, fin, description) VALUES ('$titre','$debut','$fin','$description')";
         $conn->exec($sqle);
         echo "cours ajouté avec sucées";
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
    <h2>Modalités du Cours</h2>
</div>
<form method="post" action="ajout.php">
    
    <div class="input-group">
        <label>Titre du cours</label>
        <input type="text" name="titre" value="">
    </div>
<div class="input-group date" > 
    <label>date de debut<label/>
    <input type="date"  name = "debut" class="form-control" value="" >
</div>


<div class="input-group date" >
    <label>date de fin <label/>
    <input type="date" class="form-control" name="fin">    
</div>

   
    <div class="input-group" >
        <label>Description</label>
        <input type="textarea" name ="description">
    </div>

    <div class="input-group">
        <button type="submit" class="btn" name="submit">envoyer</button>
    </div>
 
</form>
</body>
</html>