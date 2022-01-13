<?php
require'donnee.php';

if (!isset($_SESSION['login'])) {
    $_SESSION['msg'] = "Vous devez être connecté";
    header('location: connexion.php');
}  
if (isset($_GET['logout'])) {
   session_destroy();
   unset($_SESSION['login']);
   header("location: connexion.php");
}

if(isset($_POST['changelogin'])) {
$login = mysqli_real_escape_string($conn,htmlspecialchars($_POST['login'])); 
$password = mysqli_real_escape_string($conn,htmlspecialchars($_POST['password']));

    $sql_u = "SELECT * FROM utilisateurs WHERE login='$login'";
    $res_u = mysqli_query($conn, $sql_u);

    if(mysqli_num_rows($res_u) > 0) {
    }
    else {
        $login = $_POST['login'];
        $id = $_SESSION['id'];

    $query = "UPDATE utilisateurs SET login='$login' WHERE id='$id' "; 
    $run = mysqli_query($conn, $query) or die(mysqli_error());

    if($run) {
     header ("location: deco.php");
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
    <link rel="stylesheet" href="css/profil.css">
    <title>Page de profil</title>
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
<div class="entier">
    <div class="leftentier">
      <div class="listeleft">
      <h2><a href="profil.php"><u>Mon profil</u></a></h2>
      <h2><a href="infos.php">Informations confidentielles</a></h2>
      <h2><a href="iron.php">Iron-Man préféré</a></h2> 
      <div class="com">
      <h2><a href="commentaire.php">Laissez un commentaire</a></h2> 
      </div>
    </div>
    </div>
       <div class="rightentier">
           <div class="Monprofil">
           <h2>Mon Profil</h2>
           </div>
           <div class="photoprof">
            <h2>Photo de Profil</h2>
                <img src="image/profil.jpg" alt="Avatar" class="avatar">
                <input class="button" value="Changer la photo" name ="change" type="submit">
           </div>
            <div class="loginmodif">
                <h1>Login</h1>
                <form class="form" method="POST" action = "profil.php">
                <input class="inpute" type = "text" name = "login" id = "login" placeholder = <?php echo $_SESSION['login'];?>  /> <br> 
                <input type = "submit" value = "Changer le login" name = "changelogin" class="button"/><br><br>
                </form>   
            </div>
       </div>       
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