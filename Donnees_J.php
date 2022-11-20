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
		<h1> Vos informations </h1>
		
		<div class="bloc-nom">
		<h2><div class="nom"> <span style="color:#959292">Pseudo en Jeu</span> <span style="margin-left:22%"><?php echo $nom; ?></span> <span style="color:blue;margin-left:40%;font-size:15px;text-aligh:right">Pseudo non-modifiable</span> </div></h2>
		</div>
		<div class="bloc-nom">
		<h2><div class="nom"> <span style="color:#959292">Date de Naissance</span> <span style="margin-left:19%"><?php echo $naiss; ?></span> </div></h2>
		<h2><div class="nom"> <span style="color:#959292">Pays ou Région</span> <span style="margin-left:21%">France</span> <span style="color:blue;margin-left:40%;font-size:15px;text-aligh:right">Données non-modifiable</span> </div></h2>
		</div>
		<div class="bloc-nom">
		<h2><div class="nom"> <span style="color:#959292">Adresse Mail</span> <span style="margin-left:23%"><?php echo $mail; ?></span> </div></h2>
		<h2><div class="nom"> <span style="color:#959292">Numéro de Téléphone</span> <span style="margin-left:22%"><?php echo $phone; ?></span> <span style="color:blue;margin-left:29%;font-size:15px;text-aligh:right">Données non-modifiable</span> </div></h2>
		</div>
		<div class="bloc-nom">
		<h2><div class="nom"> <span style="color:#959292">Langue</span> <span style="margin-left:28%">Français</span> </div></h2>
		<h2><div class="nom"> <span style="color:#959292">Langue Favoris</span> <span style="margin-left:21%">Français</span> <span style="color:blue;margin-left:38%;font-size:15px;text-aligh:right">Données non-modifiable</span> </div></h2>
		</div>
    
    </div>
    
    <center>
    
    <br/> <br/>
    <span style="color:#959292;font-size:15px">Copyright © 2022 _Kalak_ Tous droits réservés.</span>
    
    </center>
    
  </body>
</html>
