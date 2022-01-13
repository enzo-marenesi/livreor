<?php
require'donnee.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="image/favicon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Page d'Accueil</title>
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
                  <?php
                 if (isset($_SESSION['login'])) {
                     echo "";
                     
                 }
                     else{
                         echo '
                         <li><a href="connexion.php">Connexion</a></li>
                             <li><a href="inscription.php">Inscription</a></li>
                         </ul>';
                     }
                 ?>
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

<div class="art">
    <div class="imagec">
    <img src="image/park.jpg">
    </div>
    <div class="textc">
        <div class="titrec">
            <h2>Le parc Iron-man !</h2>
        </div>
        <div class="longc">
        <p><b>Ouvert depuis peu. Ce magnifique parc met en avant l'incroyable innovateur et l'une des figures des Avengers => Iron-Man !
            Nous avons ouvert ce site web pour vous laissez nous dire vos avis et ce qu'il faudrait changer a nos attractions ou nos infrastructures.
            Vos commentaires nous apporterons une aide precieuse.<br>
            <br><h2>Comment laissez un commentaire ?</h2>
            <br>Tout d'abord inscrivez-vous via la <a href="inscription.php">page d'inscription</a> puis, connectez-vous via la <a href="connexion.php">
                page de connexion</a> et enfin laissez nous un commentaire sur le <a href="livre-or.php">livre d'or</a>. ;)
            <br>Vous pourrez aussi modifier vos informations dans la <a href="profil.php">page de votre profil</a>.
        </b></p>
        </div>
    </div>
</div>
<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
<footer>
    <div class="footer">        
        <div class="outils">
            <h2>______</h2>
            <div class="connexion">	
                <a href="connexion.php"><b>Connexion</b></a>
            </div>
            <div class="inscription">	
                <a href="inscription.php"><b>Inscription</b></a>
            </div>
        </div>  
        <div class="outils2">
            <h2>______</h2>
            <div class="livreor">	
                <a href="livre-or.php"><b>Livre d'Or</b></a>
            </div>
            <div class="profil">	
                <a href="profil.php"><b>Votre profil</b></a>
            </div>
        </div>
        <div class="credits">
               <h3>Copyright : © Stark Park – tous droits réservés.</h3>
        </div>
        <div class="github">
            <a href="https://github.com/enzo-marenesi" target="_blank"><img class="gitimg" src="image/github.png" width="100%"></a>
        </div>
    </div>        
</footer>    
</body>
</html>