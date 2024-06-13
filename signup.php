<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sign.css">
    <link rel="shortcut icon" href="taxi.png">
    <title>Learn2drive</title>
</head>
<body>
    <section>
        <header>
            <div class="sq">
                <input type="submit" id="home" value="Home">
                <input type="submit" id="info" value="Info" >
                <input type="submit" id="instructors" value="Instructors" >
                <input type="submit" id="resources" value="Resources" >
                <input type="submit" id="contact" value="Contact" >
                <input type="submit" id="sign" value="Registration">
            </div>

           
        </header>
    </section>
    <section>
        <div class="f">
            <h1 class="welcome">Registration in Learn2drive</h1>
            <form name="form1" action="sign.php" method="post">
                
                <h3><label for="name">Full Name:</label>
                    <input name="nom"id="name" type="text" placeholder="give your full name"><br>
                    <br>
                    <label for="img">Photocopy of identity card: </label>
                    
                     <input type="file" id="img" name="img" accept="image/png,image/jpg,image/jpeg">
                     <br>
            <br>
                    <label for="age">Date of birth:</label>
                    <input type="date" name="db"><br>
                    <br>
                    <label for="name">Place of birth:</label>
                    <input name="pb"id="name" type="text" placeholder="give your place of birth"><br>
                    <br>
                    <label for="name">Adresse:</label>
                    <input name="adr"id="name" type="text" placeholder="give your adresse"><br>
                    <br>
                    
                    <label for="name">Phone number:</label>
                    <input name="pn" id="name" type="text" placeholder="give your phone number"><br>
                    <br>

                    
                    <label for="age">Age:</label>
                    <input name="age" id="age" type="number" min="1" max="99"
                    step="1" value="18"><br>
                    <br>
                    
                    <label for="name">Email:</label>
                    <input name="email"id="name" type="text" placeholder="give your email"><br>
                    <br>
                    
                    <label>Social status:</label>
                    <label class="f3">Student</label>
                    <input type="radio" name="ss" />
                    <label class="f3">Employee</label>
                    <input type="radio" name="ss" />
                    <label class="f3">Other</label>
                    <input type="radio" name="ss" /><br>
                    <br>
                    <label>Which course would you like to enroll in:</label><br>
                    <label class="f3">Code sessions </label>
                    <input type="radio" name="cs" />
                    <label class="f3">Driving sessions</label>
                    <input type="radio" name="cs" /><br>
                    <br>
                    <label>Which license would you like to enroll in :</label><br>
                    <label class="f3">A</label>
                    <input type="radio" name="lic" />
                    <label class="f3">A1</label>
                    <input type="radio" name="lic" />
                    <label class="f3">A2</label>
                    <input type="radio" name="lic" />
                    <label class="f3">B</label>
                    <input type="radio" name="lic" />
                    <label class="f3">C</label>
                    <input type="radio" name="lic" />
                    <label class="f3">C1</label>
                    <input type="radio" name="lic" />
                    <label class="f3">D</label>
                    <input type="radio" name="lic" />
                    <label class="f3">D1</label>
                    <input type="radio" name="lic" /><br>
                    
                    <button id="sub" type="submit" name="envoyer" value="Sign up">submit</button>
                    
                    

                    

                    
              
              </form>
            
            
        </div>

        
    </section>
   
    



    





    <script src="autoecole.js"></script>
</body>
</html>


<?php

header("Location:sign.html");

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