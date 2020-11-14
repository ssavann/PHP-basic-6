<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Formulaire Prenom et Age</title>
</head>
<body>

<?php 
    if(isset($_POST['valider'])){ //pour verifier si l'utilisateur a bien cliquer sur le bouton valider

        if(($_POST['prenom']) AND ($_POST['age'])) {     // Test de $_POST['prenom'] et $_POST['age'] - DEBUT 
        // Donc, si prenom et age contiennent de l'information, ca va executer le echo $votrePrenom et $votreAge
        
            $votrePrenom = $_POST['prenom'];
            $votreAge    = $_POST['age'];
            $votreAge    = ceil($votreAge);  // Pour arrondir l'age a une valeur superieure au lieu d'un chiffre decimale

        //  if(($votrePrenom) AND ($votreAge)) {  //une alternative si on ne veut pas utiliser les superglobales $_POST['prenom'] et $_POST['age']
            
            if((is_numeric($votreAge)) AND ($votreAge > 0)){  //forcer $votreAge a accepter seulement le numerique ET plus grand que zero
                echo '<h2 align="center">Bonjour ' .$votrePrenom. ', vous avez ' .$votreAge. ' ans.</h2>';
            } else {
                echo '<h2 align="center">Veuillez entree un age correct</h2>';
            } // si $votreAge est numerique ET positif - FIN


            
    } else {            // Test de $_POST['prenom'] et $_POST['age'] - SUITE
            echo '<h2 align="center">Erreur: veuillez remplir tous les champs! </h2>';
            }  // Test de $_POST['prenom'] et $_POST['age'] - FIN

}  
?>


<form method="post" action="">
    <p align="center">
        <input type="text" name="prenom" placeholder="votre prenom"  />
    </p>
    <p align="center">
        <input type="text" name="age" placeholder="votre age" />
    </p>
    <p align="center">
    <input type="submit" name="valider" value="Valider" />
    </p>
</form>


</body>
</html>