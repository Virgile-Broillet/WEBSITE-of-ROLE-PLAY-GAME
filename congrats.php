<!doctype html>
<!-- jdr.php -->
<html>
    <head>
        <meta charset="utf-8" />
        <title>Jeu de Rôle</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <?php 
		error_reporting(0);
		session_start();
		$name=$_GET['email'];
		$mdp=$_GET['mdp'];
		$file = file_get_contents("Joueurs/$name/$name.txt");
		$naiss = file_get_contents("Joueurs/$name/birthday.txt");
		$mail = file_get_contents("Joueurs/$name/mail.txt");
		$phone = file_get_contents("Joueurs/$name/phone.txt");
		$_SESSION['nom']=$name;
		$_SESSION['modp']=$mdp;
		$_SESSION['naiss']=$naiss;
		$_SESSION['mail']=$mail;
		$_SESSION['phone']=$phone;
		

	?>
    <body>
	        <center><h1> Espace de vérification d'Identitée </h1></center>
        <h2> </h2>
        <?php 
        
        error_reporting(0);
        
        if ($mdp == $file)
        {
			echo '<html> <body> <center> <img src="img/valider.jpg" width="200" height="200"> <h2>Votre Identité est Validé <br /> Connectez vous sous le nom : '; echo $name; echo ' </h2> <form name="conexion" method="get" action="Joueurs/'; echo $name; echo '/'; echo $name; echo '.php"> <h2><input type="submit" name="action" value="Se connecter"/></h2> </form> </center> </body> </html>';
		
		}else if ($mdp == " ")
		{
			echo '<html> <body> <center> <img src="img/non-valider.jpg" width="200" height="200"> <h2>Mot de passe ou pseudo éronnée <br /> Veuillez vous créez un compte ou réssayer: </h2> <form name="conexion" method="get" action="http://90.119.146.2/jdr-Morg-Corps/register.php"> <h2><input type="submit" name="action" value="Se créé un compte"/></h2> </form> <form name="login" method="get" action="http://90.119.146.2/jdr-Morg-Corps/jdr.php"> <h2><input type="submit" name="action" value="Réssayer"/></h2> </form> </center> </body> </html>';
		}else
		{
			echo '<html> <body> <center> <img src="img/non-valider.jpg" width="200" height="200"> <h2>Mot de passe ou pseudo éronnée <br /> Veuillez vous créez un compte ou réssayer: </h2> <form name="conexion" method="get" action="http://90.119.146.2/jdr-Morg-Corps/register.php"> <h2><input type="submit" name="action" value="Se créé un compte"/></h2> </form> <form name="login" method="get" action="http://90.119.146.2/jdr-Morg-Corps/jdr.php"> <h2><input type="submit" name="action" value="Réssayer"/></h2> </form> </center> </body> </html>';
		}
    
        
        ?>

        </div>
    </body>
    <center>
    
    <br/> <br/>
    <span style="color:#959292;font-size:15px">Copyright © 2022 _Kalak_ Tous droits réservés.</span>
    
    </center>
</html>
