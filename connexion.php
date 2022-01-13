<?php
require'donnee.php';


if(isset($_POST['login']) && isset($_POST['password'])){
    $login=$_POST['login'];
    $password=$_POST['password'];
    $sql= mysqli_query ($conn,"SELECT * FROM utilisateurs WHERE login='$login' AND password='$password'");
    $res= mysqli_fetch_all($sql); 
    $_SESSION['success'] = "";
    
    if (empty($res)) {
    }
     else {
         if($res[0][1] == $login){
            if ( $login == ''){
            }
            else {
                $_SESSION['login'] = $res[0][1]; 
                $_SESSION['id'] = $res[0][0];
                $_SESSION['password'] = $res[0][2];

                header ("refresh:0.1;url=profil.php");

            }
         
     }
         else {
             
         }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="image/favicon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/connexion.css">
    <title>Connexion</title>
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
<div class="connexionform">
<form method="POST" action=#>
           <div class="contact">
               <h1>Formulaire</h1>
           </div>
        <div class="contacter">
            <div class="loginn">
            <label for="login">Login</label>
        </div>
            <input type="text" id="login" name="login" placeholder="joe..">
        </div>
        <div class="contacter2">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="azerty..">
            </div>
    <div class="buttonn">
    <input class="button" value="Envoyer" name ="envoyer" type="submit">
    </div> 
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
</html>