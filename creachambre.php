<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Formulaire d'enregistrement chambre</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>

<body>

    <style>
        body {
            background-image: url('front/image/enregistrement_client.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    </style>
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
    <div class="container">
        <h1>CHAMBRES</h1>
        <br>
        <div class="row">
            <div class="col-md-6 offset-3">
                <form class="needs-validation" novalidate method="POST">
                    <div class="col-md-6 mr-auto">
                        <label for="Nom">Prix</label>
                        <input type="text" class="form-control" id="prix" name="prix" placeholder="Montant">
                    </div>
                    <div class="col-md-6 mr-auto">
                        <label>Description</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="description">
                    </div>
                    <div class="col-md-6 mr-auto">
                        <label>Catégorie</label>
                        <input type="text" class="form-control" id="Categorie" name="Categorie" placeholder="Espace catégorie">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="btn">Enregistrement chambre</button>
                    <button type="submit" class="btn btn-primary" name="btn"><a href="verification.php">Retour administrateur</a></button>
                </form>
            </div>

        </div>
    </div>

</body>

</html>