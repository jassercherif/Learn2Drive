<?php
// <!-- // Connexion à la base de données MySQL -->
$conn = mysqli_connect('localhost', 'root', '', 'learn2drive');

// <!-- // Vérification de la connexion -->
if (!$conn) {
    die('Erreur de connexion à la base de données');
}

//  <!-- // Traitement du formulaire d'inscription -->
if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['phone']) &&  isset($_POST['mot_de_passe'])) {
    // <!-- // Récupération des données du formulaire -->
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $mot_de_passe = $_POST['mot_de_passe'];

    // <!-- // Insertion des données de l'utilisateur dans la table "utilisateurs" -->
    $query = "INSERT INTO utilisateur (nom, email,phone,mot_de_passe) VALUES ('$nom', '$email','$phone','$mot_de_passe')";
    $result = mysqli_query($conn, $query);

    // <!-- // Vérification de l'insertion -->
    if ($result) {
      echo "<div class='error-msg'>Successful registration</div>";
      header('Location: login.php');
        }

    } else {
      echo "<div class='error-msg'>Registration error. Try Again.</div>";
    }
  
?>