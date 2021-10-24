  
<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';

    //On tente de se connecter
    try {
        $conn = new PDO("mysql:host=$servername;dbname=reservation", $username, $password);
        //On définit le mode d'erreur de PDO sur Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connexion réussie';
    } 
    
    //On capture les exception
    catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }

    //On ferme la connexion
    $conn = NULL;
?>