<!doctype html>
<!-- jdr.php -->
<html>
    <head>
        <meta charset="utf-8" />
        <title>Jeu de Rôle</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <center><h1> Bienvenue l'espace d'enregistrement du JDR </h1></center>
        <h2> </h2>
        
        <div class="menu">
			<form name="form" method="get" action="http://90.119.146.2/jdr-Morg-Corps/register.php">
				<h3>
					<h2> Création de Compte </h2>
						Pseudo : <input type="text" name="email"  size="20" maxlength="200" required />
					<br /><br />
						Mot de passe : <input type="text" name="mdp" size="20" maxlength="200" required />
					<br /><br />
						Confirmer le mot de passe : <input type="text" name="mdp2" size="20" maxlength="200" required />
					<br /><br />
					Numéro de téléphone : <input type="tel" name="phone"  size="20" maxlength="10" required />
					<br /><br />
						Mail de Récupération : <input type="text" name="VMAIL"  size="20" maxlength="200" required />
					<br /><br />
						Confirmer le Mail : <input type="text" name="VMAIL2"  size="20" maxlength="200" required />
					<br /><br />
						Date de Naissance : <SELECT name="jour" size="1"> <OPTION>1</OPTION><OPTION>2</OPTION><OPTION>3</OPTION><OPTION>4</OPTION><OPTION>5</OPTION><OPTION>6</OPTION><OPTION>7</OPTION><OPTION>8</OPTION><OPTION>9</OPTION><OPTION>10</OPTION><OPTION>11</OPTION><OPTION>12</OPTION><OPTION>13</OPTION><OPTION>14</OPTION><OPTION>15</OPTION><OPTION>16</OPTION><OPTION>17</OPTION><OPTION>18</OPTION><OPTION>19</OPTION><OPTION>20</OPTION><OPTION>21</OPTION><OPTION>22</OPTION><OPTION>23</OPTION><OPTION>24</OPTION><OPTION>25</OPTION><OPTION>26</OPTION><OPTION>27</OPTION><OPTION>28</OPTION><OPTION>29</OPTION><OPTION>30</OPTION><OPTION>31</OPTION></SELECT>
											<SELECT name="mois" size="1"> <OPTION>janvier</OPTION><OPTION>février</OPTION><OPTION>mars</OPTION><OPTION>avril</OPTION><OPTION>mai</OPTION><OPTION>juin</OPTION><OPTION>juillet</OPTION><OPTION>août</OPTION><OPTION>septembre</OPTION><OPTION>octobre</OPTION><OPTION>novembre</OPTION><OPTION>décembre</OPTION></SELECT>
											<SELECT name="annee" size="1"> <OPTION>2022</OPTION><OPTION>2021</OPTION><OPTION>2020</OPTION><OPTION>2019</OPTION><OPTION>2018</OPTION><OPTION>2017</OPTION><OPTION>2016</OPTION><OPTION>2015</OPTION><OPTION>2014</OPTION><OPTION>2013</OPTION><OPTION>2012</OPTION><OPTION>2011</OPTION><OPTION>2010</OPTION><OPTION>2009</OPTION><OPTION>2008</OPTION><OPTION>2007</OPTION><OPTION>2006</OPTION><OPTION>2005</OPTION><OPTION>2004</OPTION><OPTION>2003</OPTION><OPTION>2002</OPTION><OPTION>2001</OPTION><OPTION>2000</OPTION><OPTION>1999</OPTION><OPTION>1998</OPTION><OPTION>1997</OPTION><OPTION>1996</OPTION><OPTION>1995</OPTION><OPTION>1994</OPTION><OPTION>1993</OPTION><OPTION>1992</OPTION><OPTION>1993</OPTION><OPTION>1992</OPTION><OPTION>1991</OPTION><OPTION>1990</OPTION><OPTION>1989</OPTION><OPTION>1988</OPTION><OPTION>1987</OPTION><OPTION>1986</OPTION><OPTION>1985</OPTION><OPTION>1984</OPTION><OPTION>1983</OPTION><OPTION>1982</OPTION><OPTION>1981</OPTION><OPTION>1980</OPTION></SELECT>
					<br /><br />
						<input type="submit" name="action" value="S'enregistrer"/>
						<input type="reset" name="reset" value="Effacer"/>
					<br /><br />
				</h3>
			</form>
			
			
			<?php
			
			error_reporting(0);
			
			$name = $_GET['email'];
			$name2 = $_GET['email2'];
			$mdp = $_GET['mdp'];
			$mdp2 = $_GET['mdp2'];
			$phone = $_GET['phone'];
			$mail = $_GET['VMAIL'];
			$mail2 = $_GET['VMAIL2'];
			$jour = $_GET['jour'];
			$mois = $_GET['mois'];
			$annee = $_GET['annee'];
			
			if ($mdp == $mdp2) 
			{
				if ($mail == $mail2) 
				{
					error_reporting(0);
					mkdir("Joueurs/$name");
					$myfile = fopen("Joueurs/$name/$name.php", "w");
					fclose($myfile); copy("Donnees_J.php", "Joueurs/$name/$name.php");
					$myfile2 = fopen("Joueurs/$name/mdp$name.php", "w");
					fclose($myfile2); copy("Donnees_MP.php", "Joueurs/$name/mdp$name.php");
					$myfilelog = fopen("Joueurs/$name/$name.txt", "w");
					fwrite($myfilelog, "$mdp"); fclose($myfilelog);
					$myfilelog2 = fopen("Joueurs/$name/phone.txt", "w");
					fwrite($myfilelog2, "$phone"); fclose($myfilelog2);
					$myfilelog3 = fopen("Joueurs/$name/mail.txt", "w");
					fwrite($myfilelog3, "$mail"); fclose($myfilelog3);
					$myfilelog4 = fopen("Joueurs/$name/birthday.txt", "w");
					fwrite($myfilelog4, "$jour"); fwrite($myfilelog4, "/"); fwrite($myfilelog4, $mois); fwrite($myfilelog4, "/"); fwrite($myfilelog4, $annee); fclose($myfilelog4);
				}
				else
				{
					echo '<html> <red> <h2><span style="color:red">Mail non-identique ! </span></h2> </html>';
				}
			}
			else
				{
					echo '<html> <h2><span style="color:red">Mot de Passe non-identique ! </span></h2> </html>';
				}
			?>
			<form name="login" method="get" action="http://90.119.146.2/jdr-Morg-Corps/jdr.php">
			Après avoir créer votre compte, connectez vous ! <br/><br/><input type="submit" name="action" value="Se connecter"/>
			<br /><br />
			</form>
        </div>
        
			<center>
    
    <br/> <br/>
    <span style="color:#959292;font-size:15px">Copyright © 2022 _Kalak_ Tous droits réservés.</span>
    
    </center>
    </body>
</html>
