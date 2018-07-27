
<?php

include("header.html");

//87.98.154.146

if(isset($_POST['submit'])){
    
    $email= htmlspecialchars(trim($_POST['email']));
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $password=htmlspecialchars(trim($_POST['password']));
    $password1= htmlspecialchars(trim($_POST['password1']));

    if($email&&$password&&$password1&&$prenom){
    

         if($password==$password1){
            $password=md5($password);

    $servername = "localhost";
    $username = "talla";
    $pass = "passer";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=bakeli", $username, $pass);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection reuissie";

         $sql = "
         INSERT INTO users (email,password,prenom)
         VALUES('$email','$password','$prenom')";
         $conn->exec($sql);
         echo "utilisateurs ajouter avec suucées";
      }
    catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    } 
     else {
          echo "mot de pass pas identique";
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

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
</head>
<body>

		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Inscription</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="inscription.php">
						
						<div class="form-group">
							<label for="prenom" class="cols-sm-2 control-label">Prenom</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="prenom" id="name"  placeholder="Enter votre nom Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">votre Email</label>
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

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password1" id="confirm"  placeholder="Confirmer votre mot de pass"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-button">valider</button>
						</div>
                        <div class="form-group ">
							<a href="login.php" target="_blank"  id="button" class="btn btn-primary btn-lg btn-block login-button">se logger</a>
						</div>
					</form>
				</div>
			</div>
		</div>
</form>
</body>
</html>
    



//87.98.154.146

