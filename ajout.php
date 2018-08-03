
<?php

//87.98.154.146

if(isset($_POST['submit'])){
    
    $titre= htmlspecialchars(trim($_POST['titre']));
    $debut = htmlspecialchars(trim($_POST['debut']));
    $fin = htmlspecialchars(trim($_POST['fin']));
    $description= htmlspecialchars(trim($_POST['description']));

    $imgFile = $_FILES['photo']['name'];
    $tmp_dir = $_FILES['photo']['tmp_name'];
    $imgSize = $_FILES['photo']['size'];

    if($titre&&$debut&&$fin&&$description&&$imgFile){


        //if(empty($imgFile)){
          //  $errMSG = "Please Select Image File.";
            //echo $errMSG;
           //}
           //else
           //{

            $upload_dir = "image/"; // upload directory
        
            
            $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
           
            // valid image extensions
            $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
           
            // rename uploading image
            $photo = rand(1000,1000000).".".$imgExt;
          
             
            // allow valid image file formats
            if(in_array($imgExt, $valid_extensions)){   
             // Check file size '5MB'
             
             if($imgSize < 5000000)    {
              move_uploaded_file($tmp_dir,$upload_dir.$photo);
            
             }
             else{
              $errMSG = "Sorry, your file is too large.";
              echo $errMSG;
            }
      
      // if no error occured, continue ....
      if(!isset($errMSG))
      {
        $servername = "localhost";
        $username = "talla";
        $pass = "passer";
        
        include('connexion.php');
  
       
       $stmt = $con->prepare("INSERT INTO cours (titre,debut,fin,description,photo) VALUES('$titre', '$debut', '$fin', '$description', '$photo')");
     /*  $stmt->bindParam(':titre',$titre);
       $stmt->bindParam(':debut',$debut);
       $stmt->bindParam(':fin',$fin);
       $stmt->bindParam(':debut',$description);
       $stmt->bindParam(':fin',$photo);
        */
       $stmt->execute();
       
       
       
       if($stmt->execute())
       {
        $successMSG = "new record succesfully inserted ...";
        echo $successMSG;
        header("refresh:5;cours_panel.php"); // redirects image view page after 5 seconds.
       }
       else
       {
        $errMSG = "error while inserting....";
        echo $errMSG;
       }
      }

    }


  /* try {
        $conn = new PDO("mysql:host=$servername;dbname=bakeli", $username, $pass);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection reuissie";

         $sqle = "INSERT INTO cours (titre, debut, fin, description) VALUES ('$titre','$debut','$fin','$description')";
         $conn->exec($sqle);
         echo "cours ajouté avec sucées";
       // header('Location: cours_panel.php');

  }
    catch(PDOException $e)
    {
    echo "blem d'insertion " . $e->getMessage();
    }*/

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
<form method="post" action="ajout.php" enctype="multipart/form-data" >
    
    <div class="input-group">
        <label>Titre du cours</label>
        <input type="text" name="titre" value="">
    </div>
    <div class="input-group">
        <label>photo </label>
        <input type="file" name="photo" value="" accept="image/*">
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
