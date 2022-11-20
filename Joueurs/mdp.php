<!DOCTYPE html>
<html>
  <head>
	  <meta charset="utf-8" />
        <title>Jeu de Rôle</title>
    <style>
            #wrap {
        width: 99%;
        height: 50px;
        margin: 0;
        z-index: 99;
        position: absolute;
        background-color: #444444;
      }
      .navbar {
        height: 50px;
        width: auto;
        padding: 0;
        margin: 0;
      }
      .navbar li {
        height: auto;
        width: 14.28%;
        float: left;
        text-align: center;
        list-style: none;
        font: normal bold 13px/1em Arial, Verdana, Helvetica;
        padding: 0;
        margin: 0;
        background-color: #444444;
        display: inline-block;
      }
      .navbar a {
        padding: 18px 0;
        border-left: 1px solid #ccc9c9;
        text-decoration: none;
        color: white;
        display: block;
      }
      .navbar li:hover,
      a:hover {
        background-color: #444444;
      }
      .navbar li ul {
        display: none;
        height: auto;
        width: 100%;
        margin: 0;
        padding: 0;
      }
      .navbar li:hover ul {
        display: block;
      }
      .navbar li ul li {
        background-color: #444444;
        width: 100%;
      }
      .navbar li ul li a {
        border-left: 1px solid #444444;
        border-right: 1px solid #444444;
        border-top: 1px solid #c9d4d8;
        border-bottom: 1px solid #444444;
      }
      .navbar li ul li a:hover {
        background-color: #a3a1a1;
      }
      
      .info-prof{
		  margin-left: 200px;
		  margin-right: 200px;
		  margin-top: 100px;
	  }
	  
	  body{
		  background-color: #f2f2f2;
		  width:100%;
	  }
	  
	  .bloc-nom{
		  background-color: white;
		  border-radius: 30px;
	  }
	  
	  .nom{
		  padding: 40px;
	  }
    </style>
  </head>
  <?php 
  session_start();
  $nom = $_SESSION['nom'];
  $naiss = $_SESSION['naiss'];
  $mail = $_SESSION['mail'];
  $phone = $_SESSION['phone'];
  $modp = $_SESSION['modp'];
  ?>
  <body>
	  
    <center><h1>Espace Personnel de :   <?php echo $nom; ?> </h1></center>
    <div id="wrap">
      <ul class="navbar">
        <li>
          <a href="http://90.119.146.2/jdr-Morg-Corps/Accueil.php">Accueil</a>
        </li>
        <li>
          <a href="#">Mobs</a>
          <ul>
            <li><a href="http://90.119.146.2/jdr-Morg-Corps/lambda.php">Lambda</a></li>
            <li><a href="http://90.119.146.2/jdr-Morg-Corps/majeur.php">Majeur</a></li>
            <li><a href="http://90.119.146.2/jdr-Morg-Corps/boss.php">Boss</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Pouvoirs</a>
          <ul>
            <li><a href="http://90.119.146.2/jdr-Morg-Corps/class.php">Classe</a></li>
            <li><a href="http://90.119.146.2/jdr-Morg-Corps/sub_class.php">Sub Classe</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Maps</a>
          <ul>
            <li><a href="http://90.119.146.2/jdr-Morg-Corps/map.php">Map Monde</a></li>
            <li><a href="http://90.119.146.2/jdr-Morg-Corps/regions.php">Régions</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Programme de Statistique</a>
          <ul>
            <li><a href="http://90.119.146.2/jdr-Morg-Corps/perso.php">Génère ton Personnage</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Paramètres du Compte</a>
          <ul>
            <li><a href="<?php echo $nom; echo ".php"; ?>">Mes Infos</a></li>
            <li><a href="<?php echo "mdp"; echo $nom; echo ".php"?>">Mots de passe</a></li>
            <li><a href="http://90.119.146.2/jdr-Morg-Corps/regles.php">Règles</a></li>
            <li><a href="http://90.119.146.2/jdr-Morg-Corps/jdr.php">Me Déconnectez</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Nous Contactez</a>
          <ul>
            <li><a href="http://90.119.146.2/jdr-Morg-Corps/contact.php">Recommandations</a></li>
            <li><a href="https://discord.com/invite/7CZ26JRPSj" target="_blank">Discord</a></li>
            <li><a href="http://90.119.146.2/jdr-Morg-Corps/webmaster.php">WebMaster</a></li>
          </ul>
        </li>
      </ul>
    </div>
    
    <div class="info-prof">
		<br /><br />
		<h1> Modification du Mot de Passe </h1>
		<form name="mdp" method="get" action='mdp<?php echo $nom; ?>.php'>
		<div class="bloc-nom">
		<h2><div class="nom"> <span style="color:#959292">Ancien Mot de Passe</span> <span style="margin-left:22%;font-size:25px"><input type="text" name="mdp1"  size="20" maxlength="200" /></span></div></h2>
		</div>
		<div class="bloc-nom">
		<h2><div class="nom"> <span style="color:#959292">Nouveau Mot de passe</span> <span style="margin-left:20.5%"><input type="text" name="nvmdp1"  size="20" maxlength="200" /></span> <span style="color:#959292;margin-left:15%">Confirmer :  <input type="text" name="nvmdp2"  size="20" maxlength="200" /> </span> </div></h2>
		</div>
		<div class="bloc-nom">
		<h2><div class="nom"> <span style="color:#959292">Valider</span> <span style="margin-left:33.9%"><input type="submit" name="action" value="Modifier Son Mot de Passe"/></span> </div></h2>
		</div>
		</form>
    
    </div>
    
     <?php 
  error_reporting(0);
  
	$mdp1=$_GET['mdp1'];
	$nvmdp1=$_GET['nvmdp1'];
	$nvmdp2=$_GET['nvmdp2'];
	if ($mdp1 == $modp)
	{
		if ($nvmdp1 == $nvmdp2)
		{
			$myfile = fopen("$nom.txt", "w"); fwrite($myfile, ""); fwrite($myfile, $nvmdp1); fclose($myfile);
			echo '<html> <br/><br /></html>';
			echo '<html> <center> <h2><span style="color:green">Mot de Passe modifié après déconnexion ! </span></h2> </center> </html>';
		}
		else
		{	echo '<html> <br/><br /></html>';
			echo '<html> <center> <h2><span style="color:red">Nouveau mot de passe non-identique ! </span></h2> </center> </html>';
		}
	}else{
		echo '<html> <br/><br /></html>';
		echo '<html> <center> <h2><span style="color:red"> Ancien Mot de Passe Erroné ! </span></h2> </center> </html>';
	}
  
  
  ?>
    
    <center>
    
    <br/> <br/>
    <span style="color:#959292;font-size:15px">Copyright © 2022 _Kalak_ Tous droits réservés.</span>
    
    </center>
    
  </body>
 
</html>

