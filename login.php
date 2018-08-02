<!DOCTYPE html>
<html>
<head>
    <title>authentification</title>
      <link rel="stylesheet" type="text/css" href="styles.css"/>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>



<?php

include("header.html");

session_start();
try{
include("connexion.php");

if(isset($_POST['submit'])){
 $email = $_POST['email'];
 $pass = $_POST['password'];

 $pass=md5($pass);
 
 $select = $con->prepare("SELECT * FROM users WHERE email='$email' and password='$pass'");
 $select->setFetchMode(PDO::FETCH_ASSOC);
 $select->execute();
 $data=$select->fetch();
 if($data['email']!=$email and $data['pass']!=$pass)
 {
  echo "nom d'utilisateur ou mot de pass invalide";
 }
 elseif($data['email']==$email and $data['password']==$pass)
 {
 $_SESSION['email']=$data['email'];
    $_SESSION['prenom']=$data['prenom'];
header("location:cours_panel.php"); 
 }

 }
}
catch(PDOException $e)
{
echo "error".$e->getMessage();
}


?>

<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>S'authentifier </h5>
					<form class="" method="post" action="login.php">
						
							<div class="form-group">
							<label for="email" class="cols-sm-2 control-label"> Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="email" id="email"  placeholder="Entrer votre mail"/>
								</div>
							</div>
                        </div>
                        

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Entrer votre mot de pass"/>
								</div>
							</div>
						</div>


						<div class="form-group ">
							<button type="submit" name="submit" id="button" class="btn btn-primary btn-lg btn-block login-button">Valider</a>
                        </div>

                        <div class="form-group ">
							<a href="inscription.php" target="_blank"  id="button" class="btn btn-primary btn-lg btn-block login-button">s'inscrire</a>
						</div>
						
                        			
					</form>
				</div>
			</div>
        </div>
        
    
        

</body>
</html>

