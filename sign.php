<?php



$nom =$_POST['nom'] ;
$img =$_POST['img'] ;
$db  =$_POST['db'] ;
$pb  =$_POST['pb'] ;
$adr =$_POST['adr'] ;
$pn =$_POST['pn'] ;
$age =$_POST['age'] ;
$email =$_POST['email'] ; 
$ss =$_POST['ss'] ; 
$cs =$_POST['cs'] ; 
$lic =$_POST['lic'] ;




$connexion=mysqli_connect("localhost", "root", "");
if ($connexion)
			{// Connexion au serveur effectuée
			echo "connexion réussie";
			$bd = mysqli_select_db($connexion, "learn2drive");
			if ($bd)
			{	
				// Connexion à la base de données effectuée
				echo "connexion à la BD réussie";
				$requete = "INSERT INTO `condidat` (`nom`,`img`,`db`,`pb`,`adr`,`pn`,`age`,`email`,`ss`,`cs`,`lic`) values ('$nom','$img','$db','$pb','$adr','$pn','$age','$email','$ss','$cs','$lic')";
				
				if (isset($_POST['envoyer']))
			{
				/*echo "vous avez une alerte";
				echo "$ss et $cs";*/
				echo '<script>alert("enregistrer");</script>';
				header("Location:registration.html");
				$resultat = mysqli_query($connexion, $requete);

				if ($resultat)
				{	// requête exécutée
					echo "Requête correcte";
					/*$nbr_lignes = mysqli_num_rows($resultat);
					echo "$nbr_lignes lignes extraites de la base";
					while($ligne = mysqli_fetch_row($resultat)) 
					{	
						$log = $ligne[0];
						$gp = $ligne[1];
						echo $log. "-" .$gp." ";
					}*/
                    
				} 
				else 
					echo "Requête incorrecte"; 
			} 
			else 
				echo "<p> BD inconnue</p>";
		}
		} 
		else 
			echo "Erreur de connexion";








?>
