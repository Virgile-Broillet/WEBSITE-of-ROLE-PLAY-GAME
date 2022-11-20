<!DOCTYPE HTML>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Page Acceuil</title>
	<link rel="stylesheet" href="style.css" />
	<style>
		
#slideshow {
	position: relative;
	width: 1024px;
	height: 439px;
	padding: 15px;
	margin: 0 auto 2em;
	border: 1px solid #ddd;
	background: #FFF;
	/* CSS3 effects */
	background: linear-gradient(#FFF, #FFF 20%, #EEE 80%, #DDD);
	border-radius: 2px 2px 2px 2px;
	box-shadow: 0 0 3px rgba(0,0,0, 0.2);
}
 
/* avanced box-shadow
 * tutorial @
 * https://www.creativejuiz.fr/blog/les-tutoriels/ombre-avancees-avec-css3-et-box-shadow 
*/
#slideshow:before,
#slideshow:after {
	position: absolute;
	bottom:16px;
	z-index: -10;
	width: 50%;
	height: 20px;
	content: " ";
	background: rgba(0,0,0,0.1);
	border-radius: 50%;
	box-shadow: 0 0 3px rgba(0,0,0, 0.4), 0 20px 10px rgba(0,0,0, 0.7);
}
#slideshow:before {
	left:0;
	transform: rotate(-4deg);
}
#slideshow:after {
	right:0;
	transform: rotate(4deg);
}

/* gestion des dimensions et débordement du conteneur */
#slideshow .container {
	position:relative;
	width: 1024px;
	height: 439px;
	overflow: hidden;
}
	
/* on prévoit un petit espace gris pour la timeline */
#slideshow .container:after {
	position:absolute;
	bottom: 0; left:0;
	content: " ";
	width: 100%;
	height: 1px;
	background: #999;
}
/* 
   le conteneur des slides
   en largeur il fait 100% x le nombre de slides
*/
#slideshow .slider {
	position: absolute;
	left:0; top:0;
	width: 400%;
	height: 439px;
}

/* annulation des marges sur figure */
#slideshow figure {
	position:relative;
	display:inline-block;
	padding:0; margin:0;
}
/* petit effet de vignette sur les images */
#slideshow figure:after {
	position: absolute;
	display:block;
	content: " ";
	top:0; left:0;
	width: 100%; height: 100%;
	box-shadow: 0 0 65px rgba(0,0,0, 0.5) inset;
}

/* styles de nos légendes */
#slideshow figcaption {
	position:absolute;
	left:0; right:0; bottom: 5px;
	padding: 20px;
	margin:0;
	border-top: 1px solid rgb(225,225,225);
	text-align:center;
	letter-spacing: 0.05em;
	word-spacing: 0.05em;
	font-family: Georgia, Times, serif;
	background: #fff;
	background: rgba(255,255,255,0.7);
	color: #555;
	text-shadow: -1px -1px 0 rgba(255,255,255,0.3);
}

/* fonction d'animation, n'oubliez pas de prefixer ! */
@keyframes slider {
	0%, 20%, 100%	{ left: 0 }
	25%, 45%		{ left: -100% }
	50%, 70%		{ left: -200% }
	75%, 95%		{ left: -300% }
}

/* complétez le sélecteur : */
#slideshow .slider {
	/* ... avec la propriété animation */
	animation: slider 32s infinite;
}

#timeline {
	position: absolute;
	background: #999;
	bottom: 15px;
	left: 15px;
	height: 1px;
	background: rgb(214,98,13);
	background: rgba(214,98,13,.8);
	width: 0;
	/* fonction d'animation */
	animation: timeliner 32s infinite;
}

@keyframes timeliner {
	0%, 25%, 50%, 75%, 100%	{ width: 0;		}
	20%, 45%, 70%, 90%		{ width: 1024px;	}
}

@keyframes figcaptionner {
	0%, 25%, 50%, 75%, 100%						{ bottom: -55px;	}
	5%, 20%, 30%, 45%, 55%, 70%, 80%, 95%		{ bottom: 5px;		}
}

/* ajouter à l'élément : */
#slideshow figcaption {
	/* ... la propriété animation */
	animation: figcaptionner 32s infinite;
}

.dots_commands  {
	padding:0;
	margin:32px 0 0;
	text-align: center;
}
.dots_commands li {
	display: inline;
	padding:0; margin:0;
}
.dots_commands a {
	position: relative;
	display: inline-block;
	height:8px; width: 8px;
	margin: 0 5px;
	text-indent: -9999px;
	background: #fff;
 
	border-radius: 50%;
	box-shadow: 0 1px 2px rgba(0,0,0,0.55) inset;

}
/* quelques styles au focus */
.dots_commands a:focus { 
	outline: none;
	background: orange;
}
.dots_commands li:first-child a { z-index: 25; }

/* on style after et before, on utilisera les deux */
.dots_commands li:first-child a:after,
.dots_commands li:first-child a:before {
	position: absolute;
	top: 0; left: 0;
	content: " ";
	width: 8px; height: 8px;
	background: #bd9b83;
	z-index:20;

	border-radius: 50%;
	box-shadow: 0 1px 2px rgba(0,0,0,0.55) inset;
}
/* on anime "after" */
.dots_commands li:first-child a:after {
	animation: dotser 32s infinite;
}
/* on cache "before", on l'utilise uniquement au clic (cf. bonux précédent) */
.dots_commands li:first-child a:before { display:none; }
 
/* c'est parti pour l'animation ! */
@keyframes dotser {
	0%, 100% 	{ opacity: 1; left: 0; 		}
 		
	20%			{ opacity: 1; left: 0;		}
	22%			{ opacity: 0; left: 0;		}
	23%			{ opacity: 0; left: 18px;	}
	25%			{ opacity: 1; left: 18px;	}
 		
	45%			{ opacity: 1; left: 18px;	}
	47%			{ opacity: 0; left: 18px;	}
	48%			{ opacity: 0; left: 36px;	}
	50%			{ opacity: 1; left: 36px;	}
 		
	70%			{ opacity: 1; left: 36px;	}
	72%			{ opacity: 0; left: 36px;	}
	73%			{ opacity: 0; left: 54px;	}
	75%			{ opacity: 1; left: 54px;	}
 		
	95%			{ opacity: 1; left: 54px;	}
	97%			{ opacity: 0; left: 54px;	}
	98%			{ opacity: 0; left: 0;	}
}






.diapo{
	margin-top:7%;
}








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
	
		  
    <h1><center>Bienvenue sur le site du JDR</center></h1>
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
    
    <div class="diapo">
		
		<span id="sl_play" class="sl_command"></span>
		<span id="sl_pause" class="sl_command"></span>
 
		<span id="sl_i1" class="sl_command sl_i"></span>
		<span id="sl_i2" class="sl_command sl_i"></span>
		<span id="sl_i3" class="sl_command sl_i"></span>
		<span id="sl_i4" class="sl_command sl_i"></span>
	
	<section id="slideshow">
		
	<div class="container">
		<div class="c_slider"></div>
		<div class="slider">
			<figure>
				<img src="actu/actu1.png" alt="" width="1024" height="439" />
				<figcaption>Bienvenue sur le site du JDR</figcaption>

			</figure><!--
			--><a href="https://discord.com/invite/7CZ26JRPSj" target="_blank"><figure>
				<img src="actu/actu2.png" alt="" width="1024" height="439" />
				<figcaption>Rejoignez-nous sur notre Discord !</figcaption>
			</figure></a><!--
			--><a href="contact.php"><figure>
				<img src="actu/actu3.png" alt="" width="1024" height="439" />
				<figcaption>Contactez-nous pour une quelconque recommandation</figcaption>

			</figure></a><!--
			--><a href="events.php"><figure>
				<img src="actu/actu4.png" alt="" width="1024" height="439" />
				<figcaption>Regardez nos futurs évènements ! </figcaption>
			</figure></a>
		</div>
	</div>
		
	<span id="timeline"></span>
	
	<ul class="dots_commands"><!--
	--><li><a title="Afficher la slide 1" href="#sl_i1">Slide 1</a></li><!--
	--><li><a title="Afficher la slide 2" href="#sl_i2">Slide 2</a></li><!--
	--><li><a title="Afficher la slide 3" href="#sl_i3">Slide 3</a></li><!--
	--><li><a title="Afficher la slide 4" href="#sl_i4">Slide 4</a></li>
</ul>
	
	</div>
	
	<center>
    
    <br/> <br/>
    <span style="color:#959292;font-size:15px">Copyright © 2022 _Kalak_ Tous droits réservés.</span>
    
    </center>
	
</body>
</html>
