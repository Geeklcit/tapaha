<?php

/*
$servername = "localhost";
$username = "talla";
$pass = "passer";


    $conn = new PDO("mysql:host=$servername;dbname=bakeli", $username, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
*/ 

 //$st = $conn->query("SELECT COUNT(*) FROM users WHERE email='".$_SESSION["email"]."' AND password='".$_SESSION["password"]."'")->fetch();



$servername = "localhost";
$username = "talla";
$pass = "passer";


try {
    $con = new PDO("mysql:host=$servername;dbname=bakeli", $username, $pass);
    // set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "connexion reuissi";
   
   
}
catch(PDOException $e)
{
    echo "Connection echouée: " . $e->getMessage();
}

?>