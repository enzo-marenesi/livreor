<?php
require'donnee.php';
include 'comments.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="image/favicon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/livre-or.css">
    <title>Livre d'or</title>
</head>
<body class="index">
<header>
    <div class="back">
        <div class="tmiddle">
            <img src="image/stark.jpg" width="17%">
        </div>
        <div class="middle"> 
        <h2><b>Stark Park</b></h2><p class="home"><a href="index.php">Home</a></p>
        </div>
        <div class="menu">
            <div class="menuu">
            <ul class="menuderoulant">
                <li><a href="livre-or.php"><b>Livre d'Or</a></li>
            </ul>
            <ul class="menuderoulant">
            <li><a href="profil.php">Profil</a>
                  <ul class="sousmenu">
                      <li><a href="connexion.php">Connexion</a></li>
                      <li><a href="inscription.php">Inscription</b></a></li>
                  </ul>
            </li>
            </ul>
                </div>
            <div class="deco">
            <ul class="menuderoulant">
                <li><div class="topnav">
  <a  class="active"> 
      <?php  
      if (isset($_SESSION['login'])) {
      echo'
      <div id="menuprofil">
        <a  href = "deco.php?logout=1" >Déconnexion</a>
      </div>'; } ?> </a>
</div>
</li>
</ul>
</div>
</div>  
</header>
<main>
        <div class="formulaire">
            
            <?php
        getComments($conn)
            ?>
            </div>
      </main>