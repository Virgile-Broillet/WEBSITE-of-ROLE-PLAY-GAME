<!doctype html>
<!-- jdr.php -->
<html>
    <head>
        <meta charset="utf-8" />
        <title>Jeu de Rôle</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <center><h1> Bienvenue sur le site de gestion du JDR </h1></center>
        <h2> </h2>

        <div class="menu">
			<form name="login" method="get" action="http://90.119.146.2/jdr-Morg-Corps/congrats.php">
				<h3>
					<h2> LOGIN </h2>
						Pseudo : <input type="text" name="email"  size="20" maxlength="200" required />
					<br /><br />
						Mot de passe : <input type="password" name="mdp" size="20" maxlength="200" required />
					<br /><br />
						<input type="submit" name="Login" value="Valider L'identitée"/>
						<input type="reset" name="reset" value="Effacer"/>
					<br /><br />
				</h3>
			</form>
			<form name="register" method="get" action="http://90.119.146.2/jdr-Morg-Corps/register.php">
				Pas encore de compte ? <input type="submit" name="register" value="Register"/>
			</form>
        </div>
        <center>
    
    <br/> <br/>
    <span style="color:#959292;font-size:15px">Copyright © 2022 _Kalak_ Tous droits réservés.</span>
    
    </center>
    </body>
</html>
