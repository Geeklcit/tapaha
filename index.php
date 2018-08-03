<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Forum</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">




<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



<!--link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles.css"/>
<script src="jquery-3.3.1.js"></script>
<script src="js/bootstrap.min.js"></script!-->

  <link rel="stylesheet" type="text/css" href="index.css" />
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
        <li class="li" >


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">
  Login
</button>

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div >
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
      
      ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" tpype="submit" >valider</button>
      </div>
    </div>
  </div>
</div>


        </li>
      </ul>
    </div>
  </nav>


</div>

<div class="container" style="margin-top:0%">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
        <img class="img" src="image/mer.jpeg" alt="Los Angeles">
        <div class="carousel-caption">
            <h2>Free one page Théme</h2>
            <p>The atmosphere in Chania has a touch of Florence and Ven.</p>
        </div>
        </div>

        <div class="item">
        <img class="img" src="image/mer2.jpg" height="10px" alt="Chicago" >
        <div class="carousel-caption">
            <h2>Free one page Théme</h2>
            <p>The atmosphere in Chania has a touch of Florence and Ven.</p>
        </div>
        </div>

        <div class="item">
        <img class="img" src="image/toctic.jpeg" alt="New York">
            <div class="carousel-caption">
            <h2>Free one page Théme</h2>
            <p>The atmosphere in Chania has a touch of Florence and Ven.</p>
        </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Precedent</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>

</div>
<section class="section" id="solution">
<div class="container contenu" >
    <div class="row">

        <div class="col-md-4">
            <div class="row">
                <div class="col-md-10 logo">
                    <a href="#" class="fa fa-twitter" style="
                    
                    padding: 20px;
                    font-size: 30px;
                    width: 75px;
                    text-align: center;
                    text-decoration: none;
                    border-radius: 100%;
                   
                ;"  ></a>
                </div>

            </div>
            <div class="row">
                <div class="col-md-10 titre">
                  <h4>IOS developpement</h4>                   
                </div>

            </div>

            <div class="row">
                <div class="col-md-10 text">
                    <p>
                        Lorem Ipsum est simplement un faux texte de l'industrie de l'impression et de la composition.
                         Lorem Ipsum a été le texte factice standard de l'industrie depuis les années 1500, quand une   
                    </p>
                </div>

            </div>

        </div>

        <?php
        include("connexion.php");

         // La requête sql pour récupérer les cours de la page actuelle.
         $mor=$con->query("SELECT * FROM cours where publier=1");
               
              
                // On affiche le resultat
                while ($donnees = $mor->fetch())
                {

                    //On affiche les données dans le tableau

                /*    echo "<td><img src ='./image/$donnees[photo]' height=10 /></td> ";
                    echo "<td> $donnees[titre] </td> ";
                    echo "<td> $donnees[description] </td>";*/
                  
                echo "<div class='col-md-4'>";
                echo "<div class='row>";
                echo "<div class='col-md-10 logo'>";
                echo "<a href='#' class='photo'><img src ='./image/$donnees[photo]' height=20 text-align:center /></a></div>";
                echo "<div class='row'> <div class='col-md-10 titre'><h4>$donnees[titre]</h4> </div> </div> ";
                echo "<div class='row'><div class='col-md-10 text'>";
                echo " <p> $donnees[description] </p></div> </div></div>";

                }
                $mor->closeCursor(); ?>
                 

       
       

</section>


<div class="footer" class="foot" >
  <h4>Portflio</h4>
</div> 
</body>

</html>

