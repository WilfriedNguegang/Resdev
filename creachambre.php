<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Formulaire d'enregistrement chambre</title>
    <!-- CSS only -->
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    
    if (isset($_POST['btn'])) 
        $prix = $_POST["prix"];
        @$description = $_POST["description"];
        @$Categorie = $_POST["Categorie"];
        $maConnexion = new PDO('mysql:host=localhost;dbname=reservation', 'root', '');
        $var = $maConnexion->prepare('INSERT INTO chambre ( prix, description, Categorie)  VALUES (:prix,:description,:Categorie)');
        @$var->bindValue(':prix', $prix);
        $var->bindValue('description', $description);
        $var->bindValue('Categorie', $Categorie);
        $var->execute();
    
    if ($var->execute()){
        echo "Enregistrement validé";
    }
    else{
        echo "Echec";
    }

    ?>

    <header class="header">

    <a href="#" class="logo"> <i class="fas fa-hotel"></i> Rooms Resa </a>
    </header>
    <div class="container">
    <div class="title">Chambre</div>
        <div class="content">
            <div class="col-md-6 offset-3">
                <form class="needs-validation" novalidate method="POST">
                    <div class="user-details">
                    <div class="input-box">
                        <span class="details">Prix</label>
                        <input type="text" class="form-control" id="prix" name="prix" placeholder="Montant">
                    </div>
                    <div class="input-box">
                        <span class="details">Description</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="description">
                    </div>
                    <div class="input-box">
                        <span class="details">Catégorie</label>
                        <input type="text" class="form-control" id="Categorie" name="Categorie" placeholder="Espace catégorie">
                    </div>
                    <div class="button">
                    <input type="submit" class="btn btn-primary" name="btn" value="Enregistrement chambre" style="margin-bottom:5px"></input>
                    <input type="submit" class="btn btn-primary" name="btn" value="Retour administrateur"><a href="verification.php"></a></input>
                    </div>
                </form>
            </div>

        </div>
    </div>

</body>

</html>