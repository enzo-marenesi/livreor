<?php
require'donnee.php';


if(isset($_POST['envoyer'])) {
    $login = mysqli_real_escape_string($conn,htmlspecialchars($_POST['login'])); 
    $password = mysqli_real_escape_string($conn,htmlspecialchars($_POST['password']));
        $sql_u = "SELECT * FROM utilisateurs WHERE login='$login'";
        $res_u = mysqli_query($conn, $sql_u);
    
        if(mysqli_num_rows($res_u) > 0) {
        }
        else {
        if(!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['passwordretype'])
         && $_POST['password'] == $_POST['passwordretype']) {
    
            $login = $_POST['login'];
            $password = $_POST['password'];
    
        $query = "INSERT INTO utilisateurs (login,password) VALUES ('$login', '$password')";
        $run = mysqli_query($conn, $query) or die(mysqli_error());
    
        if($run) {
         header ("refresh:1;url=connexion.php");
        }
        else {
       
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
    <link rel="stylesheet" href="css/inscription.css">
    <title>Inscription</title>
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
<div class="inscriptionform">
<form method="POST" action=#>
           <div class="contact">
               <h1>Formulaire</h1>
           </div>
        <div class="contacter">
            <label for="login">Login</label>
            <input type="text" id="login" name="login" placeholder="...">
        </div>
        <div class="contacter2">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="...">
            <label for="passwordretype">Confirmez mot de passe</label>
            <input type="password" id="passwordretype" name="passwordretype" placeholder="...">
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