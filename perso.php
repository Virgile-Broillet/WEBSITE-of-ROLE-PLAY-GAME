<!DOCTYPE HTML>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Création de personnage</title>
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
	
		  
    <h1><center>Création de Perso</center></h1>
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
	<?php
	
	if ($nom == "_Kalak_" or $nom == "Morganne LaufeyMJ")
	{
		echo '<html><div class="base"><center><h1> Espace de création de Personnage (Page Admin) <br/><br/><br /></h1>
                        
            <div class="perso">
			<form name="form" method="get" action="perso.php">
				<h2>
						Type de Personnage : <SELECT name="Type" size="1"><OPTION>Lambda</OPTION><OPTION>Majeur</OPTION></SELECT>
					<br /><br />
						Classe du Personnage : <SELECT name="Classe" size="1"><OPTION>Tank</OPTION><OPTION>Tank Lucide</OPTION><OPTION>Guerrier</OPTION><OPTION>Guerrier Lucide</OPTION><OPTION>Lucide</OPTION><OPTION>Assassin</OPTION><OPTION>Acrobate</OPTION></SELECT>
					<br /><br />
						Niveau du Personnage : <SELECT name="lvl" size="1"> <OPTION>1</OPTION><OPTION>2</OPTION><OPTION>3</OPTION><OPTION>4</OPTION><OPTION>5</OPTION><OPTION>6</OPTION><OPTION>7</OPTION><OPTION>8</OPTION><OPTION>9</OPTION><OPTION>10</OPTION><OPTION>11</OPTION><OPTION>12</OPTION><OPTION>13</OPTION><OPTION>14</OPTION><OPTION>15</OPTION><OPTION>16</OPTION><OPTION>17</OPTION><OPTION>18</OPTION><OPTION>19</OPTION><OPTION>20</OPTION></SELECT>
					<br /><br />
						Nombre de Personnage à créer : <SELECT name="nb" size="1"> <OPTION>1</OPTION><OPTION>2</OPTION><OPTION>3</OPTION><OPTION>4</OPTION><OPTION>5</OPTION><OPTION>6</OPTION><OPTION>7</OPTION><OPTION>8</OPTION><OPTION>9</OPTION><OPTION>10</OPTION><OPTION>11</OPTION><OPTION>12</OPTION><OPTION>13</OPTION><OPTION>14</OPTION><OPTION>15</OPTION><OPTION>16</OPTION><OPTION>17</OPTION><OPTION>18</OPTION><OPTION>19</OPTION><OPTION>20</OPTION><OPTION>21</OPTION><OPTION>22</OPTION><OPTION>23</OPTION><OPTION>24</OPTION><OPTION>25</OPTION><OPTION>26</OPTION><OPTION>27</OPTION><OPTION>28</OPTION><OPTION>29</OPTION><OPTION>30</OPTION><OPTION>31</OPTION><OPTION>32</OPTION><OPTION>33</OPTION><OPTION>34</OPTION><OPTION>35</OPTION><OPTION>36</OPTION><OPTION>37</OPTION><OPTION>38</OPTION><OPTION>39</OPTION><OPTION>40</OPTION><OPTION>41</OPTION><OPTION>42</OPTION><OPTION>43</OPTION><OPTION>44</OPTION><OPTION>45</OPTION><OPTION>46</OPTION><OPTION>47</OPTION><OPTION>48</OPTION><OPTION>49</OPTION><OPTION>50</OPTION></SELECT>
					<br /><br />
						<input type="submit" name="bouton" value="Créer le(s) Personnage(s)"/>
						<input type="submit" name="reset" value="Recommencer"/>
					<br /><br />
				</h2>
			</form></div></html>';
			
			if (isset($_GET['bouton']))
	{
		//<<Programme Créer par Virgile/Morganne>>//
		
		$type = $_GET['Type'];
		$classe = $_GET['Classe'];
                $lvl = $_GET['lvl'];
		
		if($_GET['nb']==1)
		{
			echo '<html><h2>Voici votre ';echo $classe; echo '</h2></html>';
		}else{
			echo '<html><h2>Voici vos ';echo $classe;echo 's'; echo '</h2></html>';
		}
		
		for ($i=0;$i<$_GET['nb'];$i++)
		{
		$MIN_RAND_NV1 = rand(30,40);
        $MAX_RAND_NV1 = rand(30,40);
		$SPE_STV_NV1 = rand(4,17);

		$SPE_STP_NV1 = rand(60,95);
		$SPE_STP_G_NV1 = rand(60,90);
		$SPE_STP_NV6 = rand(70, 95);
		$SPE_STP_G_NV6 = rand(70,95);
		$SPE_STP_NV11 = rand(75, 95);
		$SPE_STP_G_NV11 = rand(75,95);
		$SPE_STP_NV16 = rand(80, 95);
		$SPE_STP_G_NV16 = rand(80,95);
		$SPE_STP_NV20 = rand(85, 95);
		$SPE_STP_G_NV20 = rand(85,95);

		$Ar_NV1 = rand(1,2);
		$Ar_NV6 = rand(1,3);
		$Ar_NV11 = rand(1,4);
		$Ar_NV16 = rand(1,5);

		$PVR_MIN_STP = rand(20,170-$SPE_STP_NV1-$MIN_RAND_NV1);
		$PVR_MIN_STP_G = rand(20,170-$SPE_STP_G_NV1-$MIN_RAND_NV1);
		$PVR_MIN_STP_NV6 = rand(20,180-$SPE_STP_NV6-$MIN_RAND_NV1);
		$PVR_MIN_STP_G_NV6 = rand(20,180-$SPE_STP_G_NV6-$MIN_RAND_NV1);
		$PVR_MIN_STP_NV11 = rand(20,185-$SPE_STP_NV11-$MIN_RAND_NV1);
		$PVR_MIN_STP_G_NV11 = rand(20,185-$SPE_STP_G_NV11-$MIN_RAND_NV1);
		$PVR_MIN_STP_NV16 = rand(20,190-$SPE_STP_NV16-$MIN_RAND_NV1);
		$PVR_MIN_STP_G_NV16 = rand(20,190-$SPE_STP_G_NV16-$MIN_RAND_NV1);
		$PVR_MIN_STP_NV20 = rand(20,195-$SPE_STP_NV20-$MIN_RAND_NV1);
		$PVR_MIN_STP_G_NV20 = rand(20,195-$SPE_STP_G_NV20-$MIN_RAND_NV1);
	
		$PVR_MIN_STV = rand(5,9);
        $PVR_MIN_STV_NV2 = rand(6,10);
        $PVR_MIN_STV_NV3 = rand(7,11);
        $PVR_MIN_STV_NV4 = rand(9,13);
        $PVR_MIN_STV_NV5 = rand(10,14);
        $PVR_MIN_STV_NV6 = rand(11,15);
        $PVR_MIN_STV_NV7 = rand(12,16);
        $PVR_MIN_STV_NV8 = rand(13,17);
        $PVR_MIN_STV_NV9 = rand(15,19);
        $PVR_MIN_STV_NV10 = rand(16,20);
        $PVR_MIN_STV_NV11 = rand(17,21);
        $PVR_MIN_STV_NV12 = rand(18,22);
        $PVR_MIN_STV_NV13 = rand(18,22);
        $PVR_MIN_STV_NV14 = rand(20,24);
        $PVR_MIN_STV_NV15 = rand(19,23);
        $PVR_MIN_STV_NV16 = rand(18,22);
        $PVR_MIN_STV_NV17 = rand(20,24);
        $PVR_MIN_STV_NV18 = rand(22,26);
        $PVR_MIN_STV_NV19 = rand(21,25);
        $PVR_MIN_STV_NV20 = rand(24,28);
        

		
		if ($type == "Lambda")
		{
                 if ($lvl == 1)
                    {
                     if ($classe == "Tank")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $SPE_STP_NV1; echo ' | Mental : '; echo $PVR_MIN_STP; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $SPE_STP_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $SPE_STP_NV1; echo ' | Mental : '; echo $PVR_MIN_STP; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $SPE_STP_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Tank Lucide")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier")
			{
				if ($SPE_STP_G_NV1 < 96)
				{
					if (170-$SPE_STP_G_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_G_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier Lucide")
			{
				if ($SPE_STP_G_NV1 < 96)
				{
					if (170-$SPE_STP_G_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_G_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Lucide")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Assassin")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-95-$PVR_MIN_STP; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-95-$PVR_MIN_STP; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}else if ($classe == "Acrobate")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-95-$PVR_MIN_STP; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-95-$PVR_MIN_STP; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}
                                }
                     if ($lvl == 2)
                    {
                     if ($classe == "Tank")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 28-2-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $SPE_STP_NV1; echo ' | Mental : '; echo $PVR_MIN_STP; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 28-2-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $SPE_STP_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 28-2-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $SPE_STP_NV1; echo ' | Mental : '; echo $PVR_MIN_STP; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 28-2-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $SPE_STP_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 28-2-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo 2; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 28-2-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo 2; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 28-2-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo 2; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 28-2-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo 2; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Tank Lucide")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 28-2-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 28-2-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 28-2-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 28-2-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 28-2-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 28-2-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 28-2-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 28-2-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier")
			{
				if ($SPE_STP_G_NV1 < 96)
				{
					if (170-$SPE_STP_G_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_G_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier Lucide")
			{
				if ($SPE_STP_G_NV1 < 96)
				{
					if (170-$SPE_STP_G_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_G_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Lucide")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Assassin")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-95-$PVR_MIN_STP; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-95-$PVR_MIN_STP; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}else if ($classe == "Acrobate")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-95-$PVR_MIN_STP; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-95-$PVR_MIN_STP; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 28-$Ar_NV1-$PVR_MIN_STV_NV2; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV2; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}
                                }if ($lvl == 3)
                    {
                     if ($classe == "Tank")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 30-2-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $SPE_STP_NV1; echo ' | Mental : '; echo $PVR_MIN_STP; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 30-2-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $SPE_STP_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 30-2-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $SPE_STP_NV1; echo ' | Mental : '; echo $PVR_MIN_STP; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 30-2-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $SPE_STP_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 30-2-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo 2; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 30-2-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo 2; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 30-2-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo 2; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 30-2-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo 2; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Tank Lucide")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 30-2-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 30-2-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 30-2-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 30-2-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 30-2-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 30-2-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 30-2-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 30-2-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier")
			{
				if ($SPE_STP_G_NV1 < 96)
				{
					if (170-$SPE_STP_G_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_G_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier Lucide")
			{
				if ($SPE_STP_G_NV1 < 96)
				{
					if (170-$SPE_STP_G_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_G_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Lucide")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Assassin")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-95-$PVR_MIN_STP; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-95-$PVR_MIN_STP; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}else if ($classe == "Acrobate")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-95-$PVR_MIN_STP; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-95-$PVR_MIN_STP; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 30-$Ar_NV1-$PVR_MIN_STV_NV3; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV3; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}
                                }if ($type == "Lambda")
		{
                     if ($lvl == 4)
                    {
                     if ($classe == "Tank")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 32-2-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $SPE_STP_NV1; echo ' | Mental : '; echo $PVR_MIN_STP; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 32-2-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $SPE_STP_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 32-2-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $SPE_STP_NV1; echo ' | Mental : '; echo $PVR_MIN_STP; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 32-2-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $SPE_STP_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 32-2-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo 2; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 32-2-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo 2; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 32-2-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo 2; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 32-2-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo 2; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Tank Lucide")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 32-2-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 32-2-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 32-2-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 32-2-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 32-2-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 32-2-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 32-2-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 32-2-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier")
			{
				if ($SPE_STP_G_NV1 < 96)
				{
					if (170-$SPE_STP_G_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_G_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier Lucide")
			{
				if ($SPE_STP_G_NV1 < 96)
				{
					if (170-$SPE_STP_G_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_G_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Lucide")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Assassin")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-95-$PVR_MIN_STP; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-95-$PVR_MIN_STP; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}else if ($classe == "Acrobate")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-95-$PVR_MIN_STP; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-95-$PVR_MIN_STP; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 32-$Ar_NV1-$PVR_MIN_STV_NV4; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV4; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}
                                }if ($lvl == 5)
                    {
                     if ($classe == "Tank")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 34-2-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $SPE_STP_NV1; echo ' | Mental : '; echo $PVR_MIN_STP; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 34-2-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $SPE_STP_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 34-2-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $SPE_STP_NV1; echo ' | Mental : '; echo $PVR_MIN_STP; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 34-2-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $SPE_STP_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 34-2-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo 2; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 34-2-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo 2; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 34-2-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo 2; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 34-2-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo 2; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Tank Lucide")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 34-2-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 34-2-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 34-2-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 34-2-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 34-2-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 34-2-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 34-2-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 34-2-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier")
			{
				if ($SPE_STP_G_NV1 < 96)
				{
					if (170-$SPE_STP_G_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_G_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier Lucide")
			{
				if ($SPE_STP_G_NV1 < 96)
				{
					if (170-$SPE_STP_G_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_G_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Lucide")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Assassin")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-95-$PVR_MIN_STP; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-95-$PVR_MIN_STP; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}else if ($classe == "Acrobate")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-95-$PVR_MIN_STP; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-95-$PVR_MIN_STP; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 34-$Ar_NV1-$PVR_MIN_STV_NV5; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV5; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}
                                }if ($lvl == 6)
                    {
                     if ($classe == "Tank")
			{
				if ($SPE_STP_NV6 < 96)
				{
					if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
                                                 
							echo '<html><h3>Points de vie : ';echo 36-3-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $SPE_STP_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 36-3-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $SPE_STP_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 36-3-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $SPE_STP_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 36-3-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $SPE_STP_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 36-3-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo 3; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 36-3-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo 3; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 36-3-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo 3; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 36-3-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo 3; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Tank Lucide")
			{
				if ($SPE_STP_NV6 < 96)
				{
					if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 36-3-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 36-3-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 36-3-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 36-3-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 36-3-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 36-3-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 36-3-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 36-3-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier")
			{
				if ($SPE_STP_G_NV6 < 96)
				{
					if (180-$SPE_STP_G_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_G_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier Lucide")
			{
				if ($SPE_STP_G_NV6 < 96)
				{
					if (180-$SPE_STP_G_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_G_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Lucide")
			{
				if ($SPE_STP_NV6 < 96)
				{
					if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Assassin")
			{
				if ($SPE_STP_NV6 < 96)
				{
					if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-95-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-95-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}else if ($classe == "Acrobate")
			{
				if ($SPE_STP_NV6 < 96)
				{
					if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-95-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-95-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 36-$Ar_NV6-$PVR_MIN_STV_NV6; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV6; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}
                                }
                     if ($lvl == 7)
                    {
                     if ($classe == "Tank")
			{
				if ($SPE_STP_NV6 < 96)
				{
					if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 38-3-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $SPE_STP_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 38-3-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $SPE_STP_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 38-3-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $SPE_STP_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 38-3-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $SPE_STP_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 38-3-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo 3; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 38-3-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo 3; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 38-3-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo 3; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 38-3-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo 3; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Tank Lucide")
			{
				if ($SPE_STP_NV6 < 96)
				{
					if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 38-3-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 38-3-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 38-3-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 38-3-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 38-3-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 38-3-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 38-3-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 38-3-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier")
			{
				if ($SPE_STP_G_NV6 < 96)
				{
					if (180-$SPE_STP_G_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_G_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier Lucide")
			{
				if ($SPE_STP_G_NV6 < 96)
				{
					if (180-$SPE_STP_G_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_G_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Lucide")
			{
				if ($SPE_STP_NV6 < 96)
				{
					if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Assassin")
			{
				if ($SPE_STP_NV6 < 96)
				{
					if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-95-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-95-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}else if ($classe == "Acrobate")
			{
				if ($SPE_STP_NV6 < 96)
				{
					if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-95-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-95-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 38-$Ar_NV6-$PVR_MIN_STV_NV7; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV7; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}
                                }if ($lvl == 8)
                    {
                     if ($classe == "Tank")
			{
				if ($SPE_STP_NV6 < 96)
				{
					if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 40-3-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $SPE_STP_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 40-3-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $SPE_STP_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 40-3-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $SPE_STP_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 40-3-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $SPE_STP_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 40-3-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo 3; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 40-3-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo 3; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 40-3-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo 3; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 40-3-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo 3; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Tank Lucide")
			{
				if ($SPE_STP_NV6 < 96)
				{
					if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 40-3-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 40-3-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 40-3-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 40-3-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 40-3-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 40-3-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 40-3-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 40-3-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier")
			{
				if ($SPE_STP_G_NV6 < 96)
				{
					if (180-$SPE_STP_G_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_G_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier Lucide")
			{
				if ($SPE_STP_G_NV6 < 96)
				{
					if (180-$SPE_STP_G_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_G_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Lucide")
			{
				if ($SPE_STP_NV6 < 96)
				{
					if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Assassin")
			{
				if ($SPE_STP_NV6 < 96)
				{
					if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-95-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-95-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}else if ($classe == "Acrobate")
			{
				if ($SPE_STP_NV6 < 96)
				{
					if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-95-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-95-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 40-$Ar_NV6-$PVR_MIN_STV_NV8; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV8; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}
                                }if ($type == "Lambda")
		{
                     if ($lvl == 9)
                    {
                     if ($classe == "Tank")
			{
				if ($SPE_STP_NV6 < 96)
				{
					if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 42-3-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $SPE_STP_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 42-3-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $SPE_STP_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 42-3-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $SPE_STP_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 42-3-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $SPE_STP_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 42-3-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo 3; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 42-3-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo 3; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 42-3-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo 3; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 42-3-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo 3; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Tank Lucide")
			{
				if ($SPE_STP_NV6 < 96)
				{
					if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 42-3-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 42-3-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 42-3-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 42-3-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 42-3-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 42-3-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 42-3-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 42-3-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier")
			{
				if ($SPE_STP_G_NV6 < 96)
				{
					if (180-$SPE_STP_G_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_G_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier Lucide")
			{
				if ($SPE_STP_G_NV6 < 96)
				{
					if (180-$SPE_STP_G_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_G_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Lucide")
			{
				if ($SPE_STP_NV6 < 96)
				{
					if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Assassin")
			{
				if ($SPE_STP_NV6 < 96)
				{
					if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-95-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-95-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}else if ($classe == "Acrobate")
			{
				if ($SPE_STP_NV6 < 96)
				{
					if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-95-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-95-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 42-$Ar_NV6-$PVR_MIN_STV_NV9; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV9; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}
                                }if ($lvl == 10)
                    {
                     if ($classe == "Tank")
			{
				if ($SPE_STP_NV6 < 96)
				{
					if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 44-3-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $SPE_STP_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 44-3-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $SPE_STP_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 44-3-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $SPE_STP_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 44-3-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $SPE_STP_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 44-3-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo 3; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 44-3-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo 3; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 44-3-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo 3; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 44-3-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo 3; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Tank Lucide")
			{
				if ($SPE_STP_NV6 < 96)
				{
					if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 44-3-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 44-3-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 44-3-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 44-3-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 44-3-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 44-3-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 44-3-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 44-3-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo 3; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier")
			{
				if ($SPE_STP_G_NV6 < 96)
				{
					if (180-$SPE_STP_G_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_G_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier Lucide")
			{
				if ($SPE_STP_G_NV6 < 96)
				{
					if (180-$SPE_STP_G_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $SPE_STP_G_NV6; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-$SPE_STP_G_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_G_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_G_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_G_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV6; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_G_NV6_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Lucide")
			{
				if ($SPE_STP_NV6 < 96)
				{
					if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV6; echo ' | Dextérité : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$PVR_MIN_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 180-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Assassin")
			{
				if ($SPE_STP_NV6 < 96)
				{
					if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-95-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-95-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}else if ($classe == "Acrobate")
			{
				if ($SPE_STP_NV6 < 96)
				{
					if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
					{
						if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-$SPE_STP_NV6-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV6; echo '</h3></html>';
						}
					}else if (180-$SPE_STP_NV6-$MIN_RAND_NV1 > 0)
						{
							if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-95-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 180-$SPE_STP_NV6-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $PVR_MIN_STP_NV6; echo ' | Mental : '; echo 180-95-$PVR_MIN_STP_NV6; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 44-$Ar_NV6-$PVR_MIN_STV_NV10; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV10; echo ' | Armure : '; echo $Ar_NV6; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 180-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}
                                }if ($lvl == 11)
                    {
                     if ($classe == "Tank")
			{
				if ($SPE_STP_NV11 < 96)
				{
					if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
                                                 
							echo '<html><h3>Points de vie : ';echo 46-4-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $SPE_STP_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 46-4-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $SPE_STP_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 46-4-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $SPE_STP_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 46-4-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $SPE_STP_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 46-4-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo 4; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 46-4-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo 4; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 46-4-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo 4; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 46-4-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo 4; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Tank Lucide")
			{
				if ($SPE_STP_NV11 < 96)
				{
					if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 46-4-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 46-4-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 46-4-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 46-4-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 46-4-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 46-4-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 46-4-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 46-4-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier")
			{
				if ($SPE_STP_G_NV11 < 96)
				{
					if (185-$SPE_STP_G_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_G_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier Lucide")
			{
				if ($SPE_STP_G_NV11 < 96)
				{
					if (185-$SPE_STP_G_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_G_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Lucide")
			{
				if ($SPE_STP_NV11 < 96)
				{
					if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Assassin")
			{
				if ($SPE_STP_NV11 < 96)
				{
					if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-95-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-95-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}else if ($classe == "Acrobate")
			{
				if ($SPE_STP_NV11 < 96)
				{
					if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-95-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-95-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 46-$Ar_NV11-$PVR_MIN_STV_NV11; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV11; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}
                                }
                     if ($lvl == 12)
                    {
                     if ($classe == "Tank")
			{
				if ($SPE_STP_NV11 < 96)
				{
					if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 48-4-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $SPE_STP_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 48-4-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $SPE_STP_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 48-4-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $SPE_STP_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 48-4-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $SPE_STP_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 48-4-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo 4; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 48-4-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo 4; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 48-4-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo 4; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 48-4-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo 4; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Tank Lucide")
			{
				if ($SPE_STP_NV11 < 96)
				{
					if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 48-4-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 48-4-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 48-4-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 48-4-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 48-4-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 48-4-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 48-4-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 48-4-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier")
			{
				if ($SPE_STP_G_NV11 < 96)
				{
					if (185-$SPE_STP_G_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_G_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier Lucide")
			{
				if ($SPE_STP_G_NV11 < 96)
				{
					if (185-$SPE_STP_G_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_G_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Lucide")
			{
				if ($SPE_STP_NV11 < 96)
				{
					if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Assassin")
			{
				if ($SPE_STP_NV11 < 96)
				{
					if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-95-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-95-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}else if ($classe == "Acrobate")
			{
				if ($SPE_STP_NV11 < 96)
				{
					if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-95-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-95-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 48-$Ar_NV11-$PVR_MIN_STV_NV12; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV12; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}
                                }if ($lvl == 13)
                    {
                     if ($classe == "Tank")
			{
				if ($SPE_STP_NV11 < 96)
				{
					if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 50-4-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $SPE_STP_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 50-4-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $SPE_STP_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 50-4-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $SPE_STP_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 50-4-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $SPE_STP_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 50-4-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo 4; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 50-4-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo 4; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 50-4-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo 4; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 50-4-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo 4; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Tank Lucide")
			{
				if ($SPE_STP_NV11 < 96)
				{
					if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 50-4-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 50-4-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 50-4-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 50-4-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 50-4-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 50-4-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 50-4-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 50-4-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier")
			{
				if ($SPE_STP_G_NV11 < 96)
				{
					if (185-$SPE_STP_G_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_G_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier Lucide")
			{
				if ($SPE_STP_G_NV11 < 96)
				{
					if (185-$SPE_STP_G_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_G_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Lucide")
			{
				if ($SPE_STP_NV11 < 96)
				{
					if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Assassin")
			{
				if ($SPE_STP_NV11 < 96)
				{
					if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-95-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-95-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}else if ($classe == "Acrobate")
			{
				if ($SPE_STP_NV11 < 96)
				{
					if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-95-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-95-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 50-$Ar_NV11-$PVR_MIN_STV_NV13; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV13; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}
                                }if ($type == "Lambda")
		{
                     if ($lvl == 14)
                    {
                     if ($classe == "Tank")
			{
				if ($SPE_STP_NV11 < 96)
				{
					if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 52-4-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $SPE_STP_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 52-4-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $SPE_STP_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 52-4-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $SPE_STP_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 52-4-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $SPE_STP_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 52-4-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo 4; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 52-4-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo 4; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 52-4-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo 4; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 52-4-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo 4; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Tank Lucide")
			{
				if ($SPE_STP_NV11 < 96)
				{
					if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 52-4-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 52-4-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 52-4-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 52-4-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 52-4-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 52-4-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 52-4-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 52-4-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier")
			{
				if ($SPE_STP_G_NV11 < 96)
				{
					if (185-$SPE_STP_G_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_G_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier Lucide")
			{
				if ($SPE_STP_G_NV11 < 96)
				{
					if (185-$SPE_STP_G_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_G_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Lucide")
			{
				if ($SPE_STP_NV11 < 96)
				{
					if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Assassin")
			{
				if ($SPE_STP_NV11 < 96)
				{
					if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-95-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-95-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}else if ($classe == "Acrobate")
			{
				if ($SPE_STP_NV11 < 96)
				{
					if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-95-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-95-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 52-$Ar_NV11-$PVR_MIN_STV_NV14; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV14; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}
                                }if ($lvl == 15)
                    {
                     if ($classe == "Tank")
			{
				if ($SPE_STP_NV11 < 96)
				{
					if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 54-4-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $SPE_STP_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 54-4-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $SPE_STP_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 54-4-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $SPE_STP_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 54-4-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $SPE_STP_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 54-4-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo 4; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 54-4-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo 4; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 54-4-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo 4; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 54-4-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo 4; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Tank Lucide")
			{
				if ($SPE_STP_NV11 < 96)
				{
					if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 54-4-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 54-4-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 54-4-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 54-4-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 54-4-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 54-4-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 54-4-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 54-4-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo 4; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier")
			{
				if ($SPE_STP_G_NV11 < 96)
				{
					if (185-$SPE_STP_G_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_G_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier Lucide")
			{
				if ($SPE_STP_G_NV11 < 96)
				{
					if (185-$SPE_STP_G_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $SPE_STP_G_NV11; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-$SPE_STP_G_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_G_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_G_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_G_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV11; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_G_NV11_NV6; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Lucide")
			{
				if ($SPE_STP_NV11 < 96)
				{
					if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV11; echo ' | Dextérité : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$PVR_MIN_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 185-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Assassin")
			{
				if ($SPE_STP_NV11 < 96)
				{
					if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-95-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-95-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}else if ($classe == "Acrobate")
			{
				if ($SPE_STP_NV11 < 96)
				{
					if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
					{
						if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-$SPE_STP_NV11-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV11; echo '</h3></html>';
						}
					}else if (185-$SPE_STP_NV11-$MIN_RAND_NV1 > 0)
						{
							if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-95-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 185-$SPE_STP_NV11-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $PVR_MIN_STP_NV11; echo ' | Mental : '; echo 185-95-$PVR_MIN_STP_NV11; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 54-$Ar_NV11-$PVR_MIN_STV_NV15; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV15; echo ' | Armure : '; echo $Ar_NV11; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 185-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}
                                }if ($lvl == 16)
                    {
                     if ($classe == "Tank")
			{
				if ($SPE_STP_NV16 < 96)
				{
					if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
                                                 
							echo '<html><h3>Points de vie : ';echo 56-5-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $SPE_STP_NV16; echo ' | Mental : '; echo $PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 56-5-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $SPE_STP_NV16; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 56-5-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $SPE_STP_NV16; echo ' | Mental : '; echo $PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 56-5-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $SPE_STP_NV16; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 56-5-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo 5; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 56-5-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo 5; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 56-5-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo 5; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 56-5-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo 5; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Tank Lucide")
			{
				if ($SPE_STP_NV16 < 96)
				{
					if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 56-5-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 56-5-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 56-5-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 56-5-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 56-5-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 56-5-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 56-5-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 56-5-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier")
			{
				if ($SPE_STP_G_NV16 < 96)
				{
					if (190-$SPE_STP_G_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_G_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier Lucide")
			{
				if ($SPE_STP_G_NV16 < 96)
				{
					if (190-$SPE_STP_G_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_G_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Lucide")
			{
				if ($SPE_STP_NV16 < 96)
				{
					if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Assassin")
			{
				if ($SPE_STP_NV16 < 96)
				{
					if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-95-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-95-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}else if ($classe == "Acrobate")
			{
				if ($SPE_STP_NV16 < 96)
				{
					if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-95-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-95-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 56-$Ar_NV16-$PVR_MIN_STV_NV16; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV16; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}
                                }
                     if ($lvl == 17)
                    {
                     if ($classe == "Tank")
			{
				if ($SPE_STP_NV16 < 96)
				{
					if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 58-5-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $SPE_STP_NV16; echo ' | Mental : '; echo $PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 58-5-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $SPE_STP_NV16; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 58-5-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $SPE_STP_NV16; echo ' | Mental : '; echo $PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 58-5-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $SPE_STP_NV16; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 58-5-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo 5; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 58-5-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo 5; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 58-5-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo 5; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 58-5-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo 5; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Tank Lucide")
			{
				if ($SPE_STP_NV16 < 96)
				{
					if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 58-5-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 58-5-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 58-5-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 58-5-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 58-5-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 58-5-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 58-5-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 58-5-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier")
			{
				if ($SPE_STP_G_NV16 < 96)
				{
					if (190-$SPE_STP_G_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_G_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier Lucide")
			{
				if ($SPE_STP_G_NV16 < 96)
				{
					if (190-$SPE_STP_G_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_G_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Lucide")
			{
				if ($SPE_STP_NV16 < 96)
				{
					if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Assassin")
			{
				if ($SPE_STP_NV16 < 96)
				{
					if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-95-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-95-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}else if ($classe == "Acrobate")
			{
				if ($SPE_STP_NV16 < 96)
				{
					if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-95-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-95-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 58-$Ar_NV16-$PVR_MIN_STV_NV17; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV17; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}
                                }if ($lvl == 18)
                    {
                     if ($classe == "Tank")
			{
				if ($SPE_STP_NV16 < 96)
				{
					if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 60-5-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $SPE_STP_NV16; echo ' | Mental : '; echo $PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 60-5-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $SPE_STP_NV16; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 60-5-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $SPE_STP_NV16; echo ' | Mental : '; echo $PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 60-5-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $SPE_STP_NV16; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 60-5-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo 5; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 60-5-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo 5; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 60-5-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo 5; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 60-5-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo 5; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Tank Lucide")
			{
				if ($SPE_STP_NV16 < 96)
				{
					if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 60-5-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 60-5-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 60-5-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 60-5-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 60-5-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 60-5-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 60-5-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 60-5-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier")
			{
				if ($SPE_STP_G_NV16 < 96)
				{
					if (190-$SPE_STP_G_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_G_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier Lucide")
			{
				if ($SPE_STP_G_NV16 < 96)
				{
					if (190-$SPE_STP_G_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_G_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Lucide")
			{
				if ($SPE_STP_NV16 < 96)
				{
					if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Assassin")
			{
				if ($SPE_STP_NV16 < 96)
				{
					if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-95-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-95-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}else if ($classe == "Acrobate")
			{
				if ($SPE_STP_NV16 < 96)
				{
					if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-95-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-95-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 60-$Ar_NV16-$PVR_MIN_STV_NV18; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV18; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}
                                }if ($type == "Lambda")
		{
                     if ($lvl == 19)
                    {
                     if ($classe == "Tank")
			{
				if ($SPE_STP_NV16 < 96)
				{
					if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 62-5-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $SPE_STP_NV16; echo ' | Mental : '; echo $PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 62-5-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $SPE_STP_NV16; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 62-5-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $SPE_STP_NV16; echo ' | Mental : '; echo $PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 62-5-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $SPE_STP_NV16; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 62-5-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo 5; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 62-5-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo 5; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 62-5-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo 5; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 62-5-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo 5; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Tank Lucide")
			{
				if ($SPE_STP_NV16 < 96)
				{
					if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 62-5-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 62-5-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 62-5-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 62-5-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 62-5-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 62-5-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 62-5-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 62-5-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier")
			{
				if ($SPE_STP_G_NV16 < 96)
				{
					if (190-$SPE_STP_G_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_G_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier Lucide")
			{
				if ($SPE_STP_G_NV16 < 96)
				{
					if (190-$SPE_STP_G_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV16; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-$SPE_STP_G_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_G_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_G_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV16; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_G_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Lucide")
			{
				if ($SPE_STP_NV16 < 96)
				{
					if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV16; echo ' | Dextérité : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$PVR_MIN_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 190-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Assassin")
			{
				if ($SPE_STP_NV16 < 96)
				{
					if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-95-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-95-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}else if ($classe == "Acrobate")
			{
				if ($SPE_STP_NV16 < 96)
				{
					if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
					{
						if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-$SPE_STP_NV16-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV16; echo '</h3></html>';
						}
					}else if (190-$SPE_STP_NV16-$MIN_RAND_NV1 > 0)
						{
							if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-95-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 190-$SPE_STP_NV16-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV16; echo ' | Mental : '; echo 190-95-$PVR_MIN_STP_NV16; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 62-$Ar_NV16-$PVR_MIN_STV_NV19; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV19; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 190-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}
                                }if ($lvl == 20)
                    {
                     if ($classe == "Tank")
			{
				if ($SPE_STP_NV20 < 96)
				{
					if (195-$SPE_STP_NV20-$MIN_RAND_NV1 > 0)
					{
						if ( 195-$SPE_STP_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 65-5-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $SPE_STP_NV20; echo ' | Mental : '; echo $PVR_MIN_STP_NV20; echo ' | Dextérité : '; echo 195-$SPE_STP_NV20-$PVR_MIN_STP_NV20; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 65-5-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $SPE_STP_NV20; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 195-$SPE_STP_NV20-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 195-$SPE_STP_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 65-5-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $SPE_STP_NV20; echo ' | Mental : '; echo $PVR_MIN_STP_NV20; echo ' | Dextérité : '; echo 195-$SPE_STP_NV20-$PVR_MIN_STP_NV20; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 65-5-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $SPE_STP_NV20; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 195-$SPE_STP_NV20-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (195-$SPE_STP_NV20-$MIN_RAND_NV1 > 0)
						{
							if ( 195-$SPE_STP_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 65-5-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo 5; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV20; echo ' | Dextérité : '; echo 195-95-$PVR_MIN_STP_NV20; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 65-5-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo 5; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 195-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 195-$SPE_STP_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 65-5-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo 5; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_NV20; echo ' | Dextérité : '; echo 195-95-$PVR_MIN_STP_NV20; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 65-5-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo 5; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 195-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Tank Lucide")
			{
				if ($SPE_STP_NV20 < 96)
				{
					if (195-$SPE_STP_NV20-$MIN_RAND_NV1 > 0)
					{
						if ( 195-$SPE_STP_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 65-5-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $PVR_MIN_STP_NV20; echo ' | Mental : '; echo $SPE_STP_NV20; echo ' | Dextérité : '; echo 195-$SPE_STP_NV20-$PVR_MIN_STP_NV20; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 65-5-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV20; echo ' | Dextérité : '; echo 195-$SPE_STP_NV20-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 195-$SPE_STP_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 65-5-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $PVR_MIN_STP_NV20; echo ' | Mental : '; echo $SPE_STP_NV20; echo ' | Dextérité : '; echo 195-$SPE_STP_NV20-$PVR_MIN_STP_NV20; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 65-5-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV20; echo ' | Dextérité : '; echo 195-$SPE_STP_NV20-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (195-$SPE_STP_NV20-$MIN_RAND_NV1 > 0)
						{
							if ( 195-$SPE_STP_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 65-5-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $PVR_MIN_STP_NV20; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 195-95-$PVR_MIN_STP_NV20; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 65-5-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 195-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 195-$SPE_STP_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 65-5-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $PVR_MIN_STP_NV20; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 195-95-$PVR_MIN_STP_NV20; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 65-5-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo 5; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 195-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier")
			{
				if ($SPE_STP_G_NV20 < 96)
				{
					if (195-$SPE_STP_G_NV20-$MIN_RAND_NV1 > 0)
					{
						if ( 195-$SPE_STP_G_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV20; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV20; echo ' | Dextérité : '; echo 195-$SPE_STP_G_NV20-$PVR_MIN_STP_G_NV20; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV20; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 195-$SPE_STP_G_NV20-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 195-$SPE_STP_G_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV20; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV20; echo ' | Dextérité : '; echo 195-$SPE_STP_G_NV20-$PVR_MIN_STP_G_NV20; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV20; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 195-$SPE_STP_G_NV20-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (195-$SPE_STP_G_NV20-$MIN_RAND_NV1 > 0)
						{
							if ( 195-$SPE_STP_G_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV20; echo ' | Dextérité : '; echo 195-95-$PVR_MIN_STP_G_NV20; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 195-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 195-$SPE_STP_G_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV20; echo ' | Dextérité : '; echo 195-95-$PVR_MIN_STP_G_NV20; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 195-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier Lucide")
			{
				if ($SPE_STP_G_NV20 < 96)
				{
					if (195-$SPE_STP_G_NV20-$MIN_RAND_NV1 > 0)
					{
						if ( 195-$SPE_STP_G_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV20; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV20; echo ' | Dextérité : '; echo 195-$SPE_STP_G_NV20-$PVR_MIN_STP_G_NV20; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV20; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 195-$SPE_STP_G_NV20-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 195-$SPE_STP_G_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV20; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV20; echo ' | Dextérité : '; echo 195-$SPE_STP_G_NV20-$PVR_MIN_STP_G_NV20; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $SPE_STP_G_NV20; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 195-$SPE_STP_G_NV20-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (195-$SPE_STP_G_NV20-$MIN_RAND_NV1 > 0)
						{
							if ( 195-$SPE_STP_G_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV20; echo ' | Dextérité : '; echo 195-95-$PVR_MIN_STP_G_NV20; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 195-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 195-$SPE_STP_G_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G_NV20; echo ' | Dextérité : '; echo 195-95-$PVR_MIN_STP_G_NV20; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 195-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Lucide")
			{
				if ($SPE_STP_NV20 < 96)
				{
					if (195-$SPE_STP_NV20-$MIN_RAND_NV1 > 0)
					{
						if ( 195-$SPE_STP_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV20; echo ' | Mental : '; echo $SPE_STP_NV20; echo ' | Dextérité : '; echo 195-$SPE_STP_NV20-$PVR_MIN_STP_NV20; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV20; echo ' | Dextérité : '; echo 195-$SPE_STP_NV20-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 195-$SPE_STP_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV20; echo ' | Mental : '; echo $SPE_STP_NV20; echo ' | Dextérité : '; echo 195-$SPE_STP_NV20-$PVR_MIN_STP_NV20; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV20; echo ' | Dextérité : '; echo 195-$SPE_STP_NV20-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (195-$SPE_STP_NV20-$MIN_RAND_NV1 > 0)
						{
							if ( 195-$SPE_STP_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV20; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 195-95-$PVR_MIN_STP_NV20; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 195-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 195-$SPE_STP_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV20; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 195-95-$PVR_MIN_STP_NV20; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 195-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Assassin")
			{
				if ($SPE_STP_NV20 < 96)
				{
					if (195-$SPE_STP_NV20-$MIN_RAND_NV1 > 0)
					{
						if ( 195-$SPE_STP_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV20; echo ' | Mental : '; echo 195-$SPE_STP_NV20-$PVR_MIN_STP_NV20; echo ' | Dextérité : '; echo $SPE_STP_NV20; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 195-$SPE_STP_NV20-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV20; echo '</h3></html>';
						}
						
					}else if ( 195-$SPE_STP_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV20; echo ' | Mental : '; echo 195-$SPE_STP_NV20-$PVR_MIN_STP_NV20; echo ' | Dextérité : '; echo $SPE_STP_NV20; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 195-$SPE_STP_NV20-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV20; echo '</h3></html>';
						}
					}else if (195-$SPE_STP_NV20-$MIN_RAND_NV1 > 0)
						{
							if ( 195-$SPE_STP_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV20; echo ' | Mental : '; echo 195-95-$PVR_MIN_STP_NV20; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 195-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 195-$SPE_STP_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV20; echo ' | Mental : '; echo 195-95-$PVR_MIN_STP_NV20; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 195-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}else if ($classe == "Acrobate")
			{
				if ($SPE_STP_NV20 < 96)
				{
					if (195-$SPE_STP_NV20-$MIN_RAND_NV1 > 0)
					{
						if ( 195-$SPE_STP_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV20; echo ' | Mental : '; echo 195-$SPE_STP_NV20-$PVR_MIN_STP_NV20; echo ' | Dextérité : '; echo $SPE_STP_NV20; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 195-$SPE_STP_NV20-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV20; echo '</h3></html>';
						}
						
					}else if ( 195-$SPE_STP_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV20; echo ' | Mental : '; echo 195-$SPE_STP_NV20-$PVR_MIN_STP_NV20; echo ' | Dextérité : '; echo $SPE_STP_NV20; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 195-$SPE_STP_NV20-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV20; echo '</h3></html>';
						}
					}else if (195-$SPE_STP_NV20-$MIN_RAND_NV1 > 0)
						{
							if ( 195-$SPE_STP_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV20; echo ' | Mental : '; echo 195-95-$PVR_MIN_STP_NV20; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 195-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 195-$SPE_STP_NV20-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $PVR_MIN_STP_NV20; echo ' | Mental : '; echo 195-95-$PVR_MIN_STP_NV20; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 65-$Ar_NV16-$PVR_MIN_STV_NV20; echo ' | Lucidité : '; echo $PVR_MIN_STV_NV20; echo ' | Armure : '; echo $Ar_NV16; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 195-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}
                                }
			}
			}
		}
	}}}}
			
	}else{
		
		echo '<html><div class="base"><center><h1> Espace de création de Personnage <br/><br/><br /></h1>
                        
            <div class="perso">
			<form name="form" method="get" action="perso.php">
				<h2>
						Type de Personnage : <SELECT name="Type" size="1"><OPTION>Lambda</OPTION><OPTION>Majeur</OPTION></SELECT>
					<br /><br />
						Classe du Personnage : <SELECT name="Classe" size="1"><OPTION>Tank</OPTION><OPTION>Tank Lucide</OPTION><OPTION>Guerrier</OPTION><OPTION>Guerrier Lucide</OPTION><OPTION>Lucide</OPTION><OPTION>Assassin</OPTION><OPTION>Acrobate</OPTION></SELECT>
					<br /><br />
						Nombre de Personnage à créer : <SELECT name="nb" size="1"> <OPTION>1</OPTION><OPTION>2</OPTION><OPTION>3</OPTION><OPTION>4</OPTION></SELECT>
					<br /><br />
						<input type="submit" name="bouton" value="Créer le(s) Personnage(s)"/>
						<input type="submit" name="reset" value="Recommencer"/>
					<br /><br />
				</h2>
			</form></div></html>';
		
		if (isset($_GET['bouton']))
	{
		
		$type = $_GET['Type'];
		$classe = $_GET['Classe'];
		
		if($_GET['nb']==1)
		{
			echo '<html><h2>Voici votre ';echo $classe; echo '</h2></html>';
		}else{
			echo '<html><h2>Voici vos ';echo $classe;echo 's'; echo '</h2></html>';
		}
		
		for ($i=0;$i<$_GET['nb'];$i++)
		{
			$MIN_RAND_NV1 = rand(30,40);
		$MAX_RAND_NV1 = rand(30,40);
		$SPE_STV_NV1 = rand(4,17);

		$SPE_STP_NV1 = rand(60,95);
		$SPE_STP_G_NV1 = rand(60,90);

		$Ar_NV1 = rand(1,2);

		$PVR_MIN_STP = rand(20,170-$SPE_STP_NV1-$MIN_RAND_NV1);
		$PVR_MIN_STP_G = rand(20,170-$SPE_STP_G_NV1-$MIN_RAND_NV1);
	
		$PVR_MIN_STV = rand(5,9);
		
		//echo $type; echo " / ";
		//echo $classe; echo " / ";
		//echo $MIN_RAND_NV1; echo " / ";
		//echo $MAX_RAND_NV1; echo " / ";
		//echo $SPE_STV_NV1; echo " / ";
		//echo $SPE_STP_NV1; echo " / ";
		//echo $SPE_STP_G_NV1; echo " / ";
		//echo $Ar_NV1; echo " / ";
		//echo $PVR_MIN_STP; echo " / ";
		//echo $PVR_MIN_STP_G; echo " / ";
		//echo $PVR_MIN_STV; echo " // ";
		
		if ($type == "Lambda")
		{
			if ($classe == "Tank")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $SPE_STP_NV1; echo ' | Mental : '; echo $PVR_MIN_STP; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $SPE_STP_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $SPE_STP_NV1; echo ' | Mental : '; echo $PVR_MIN_STP; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $SPE_STP_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Tank Lucide")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-2-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo 2; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier")
			{
				if ($SPE_STP_G_NV1 < 96)
				{
					if (170-$SPE_STP_G_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_G_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Guerrier Lucide")
			{
				if ($SPE_STP_G_NV1 < 96)
				{
					if (170-$SPE_STP_G_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $SPE_STP_G_NV1; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_G_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_G_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_G_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $PVR_MIN_STP_G; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP_G; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo 95; echo ' | Mental : '; echo $MAX_RAND_NV1; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Lucide")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo $SPE_STP_NV1; echo ' | Dextérité : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$PVR_MIN_STP; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 95; echo ' | Dextérité : '; echo 170-95-$MAX_RAND_NV1; echo '</h3></html>';
						}
					}else if ($classe == "Assassin")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-95-$PVR_MIN_STP; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-95-$PVR_MIN_STP; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo $PVR_MIN_STV; echo ' | Lucidité : '; echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}else if ($classe == "Acrobate")
			{
				if ($SPE_STP_NV1 < 96)
				{
					if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
					{
						if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$PVR_MIN_STP; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-$SPE_STP_NV1-$MAX_RAND_NV1; echo ' | Dextérité : '; echo $SPE_STP_NV1; echo '</h3></html>';
						}
					}else if (170-$SPE_STP_NV1-$MIN_RAND_NV1 > 0)
						{
							if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-95-$PVR_MIN_STP; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1;echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
						
					}else if ( 170-$SPE_STP_NV1-$MIN_RAND_NV1 < 96)
						{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $PVR_MIN_STP; echo ' | Mental : '; echo 170-95-$PVR_MIN_STP; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}else{
							echo '<html><h3>Points de vie : ';echo 25-$Ar_NV1-$PVR_MIN_STV; echo ' | Lucidité : '; echo $PVR_MIN_STV; echo ' | Armure : '; echo $Ar_NV1; echo ' | Force : '; echo $MAX_RAND_NV1; echo ' | Mental : '; echo 170-95-$MAX_RAND_NV1; echo ' | Dextérité : '; echo 95; echo '</h3></html>';
						}
					}
			}
		}
	}
	}
	
	
  ?>
	</center></div>
	<center>
    
    <br/> <br/>
    <span style="color:#959292;font-size:15px">Copyright © 2022 _Kalak_ Tous droits réservés.</span>
    
    </center>
  </body>
  
</html>
