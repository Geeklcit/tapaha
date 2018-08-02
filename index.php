<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Forum</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<?php 
/*
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
*/
?>

<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
<script src="jquery-1.7.1.min.js"></script>
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
        <li class="li" ><a href="login.php">login</a>
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

        <div class="col-md-4">
            <div class="row">
                <div class="col-md-10 logo">
                    <a href="#" class="fa fa-android" style="
                    
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

        <div class="col-md-4">
            <div class="row">
                <div class="col-md-10 logo">
                    <a href="#" class="fa fa-facebook" style="
                    
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
                  <h4>Android</h4>                   
                </div><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
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

        <div class="col-md-4">
            <div class="row">
                <div class="col-md-10 logo">
                    <a href="#" class="fa fa-skype" style="
                    
                    padding: 20px;
                    font-size: 30px;
                    width: 75px;
                    text-align: center;
                    text-decoration: none;
                    border-radius: 100%;
                   
                ;" ></a>
                </div>

            </div>
            <div class="row">
                <div class="col-md-10 titre">
                  <h4>skype</h4>                   
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


        <div class="col-md-4">
            <div class="row">
                <div class="col-md-10 logo">
                    <a href="#" class="fa fa-youtube" style="
                    
                    padding: 20px;
                    font-size: 30px;
                    width: 75px;
                    text-align: center;
                    text-decoration: none;
                    border-radius: 100%;
                   
                ;"   ></a>
                </div>

            </div>
            <div class="row">
                <div class="col-md-10 titre">
                  <h4>Snapchat</h4>                   
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
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-10 logo">
                    <a href="#" class="fa fa-vimeo"  style="
                    
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
                  <h4>vimeo</h4>                   
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
       
    </div>

</div>

</section>


<div class="footer" class="foot" >
  <h4>Portflio</h4>
</div> 
</body>

</html>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  <!--Launch demo modal-->
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>