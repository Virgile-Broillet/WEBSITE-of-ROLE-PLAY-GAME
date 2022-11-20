<!DOCTYPE HTML>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Map</title>
	<link rel="stylesheet" href="style.css" />
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
	  .fin{
		  border-right: 1px solid #ccc9c9;
	  }
	  .base{
		  background-color: white;
		  border-radius: 30px;
		  padding: 40px;
		  margin-left: 200px;
		  margin-right: 200px;
		  margin-top: 100px;
	  }
	
	</style>
</head>
  <?php 
  error_reporting(0);
  
  session_start();
  $nom = $_SESSION['nom'];
  $naiss = $_SESSION['naiss'];
  $mail = $_SESSION['mail'];
  $phone = $_SESSION['phone'];
  $modp = $_SESSION['modp'];

  ?>
<body>
	
		  
    <h1><center>Map du JDR</center></h1>
    <div id="wrap">
      <ul class="navbar">
        <li>
          <a href="Accueil.php">Accueil</a>
        </li>
        <li>
          <a href="#">Mobs</a>
          <ul>
            <li><a href="lambda.php">Lambda</a></li>
            <li><a href="majeur.php">Majeur</a></li>
            <li><a href="boss.php">Boss</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Pouvoirs</a>
          <ul>
            <li><a href="class.php">Classe</a></li>
            <li><a href="sub_class.php">Sub Classe</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Maps</a>
          <ul>
            <li><a href="map.php">Map Monde</a></li>
            <li><a href="regions.php">Régions</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Programme de Statistique</a>
          <ul>
            <li><a href="perso.php">Génère ton Personnage</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Paramètres du Compte</a>
          <ul>
            <li><a href="Joueurs/<?php echo $nom; echo "/"; echo $nom; echo ".php"; ?>">Mes Infos</a></li>
            <li><a href="Joueurs/<?php echo $nom; echo "/"; echo "mdp"; echo $nom; echo ".php"?>">Mots de passe</a></li>
            <li><a href="regles.php">Règles</a></li>
            <li><a href="http://90.119.146.2/jdr-Morg-Corps/jdr.php">Me Déconnectez</a></li>
          </ul>
        </li>
        <li>
			<div class="fin">
          <a href="#">Nous Contactez</a>
          <ul>
            <li><a href="contact.php">Recommandations</a></li>
            <li><a href="https://discord.com/invite/7CZ26JRPSj" target="_blank">Discord</a></li>
            <li><a href="webmaster.php">WebMaster</a></li>
          </ul>
			</div>
        </li>
      </ul>
    </div>
    <br/>
			<form action="contact.php" method="get">
				<div class="base">
                    <center><h1> Map du JDR <br/><br/></h1><h3>
                       Vous retrouverez ici toutes les info de la Map du JDR lorsqu'elles seront écritent : <br/><br/>
            
                       
	</center></h3></div>
	
	<center>
    
    <br/> <br/>
    <span style="color:#959292;font-size:15px">Copyright © 2022 _Kalak_ Tous droits réservés.</span>
    
    </center>
  </body>
</html>
