
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Formulaire d'inscription</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    if(isset($_POST['btn']))
    $email=$_POST['email'];
    @$password=$_POST["password"];
    @$sexe=$_POST["sexe"];
    @$prenom=$_POST["prenom"];
    @$ville=$_POST["ville"];
    @$nom=$_POST["nom"];
    @$numero=$_POST["numero"];
    @$date=$_POST["date"];
    $maConnexion = new PDO('mysql:host=localhost;dbname=reservation','root','');
    $var=$maConnexion->prepare('INSERT INTO client ( EmailC, MotpasseC, SexeC, PrenomC,VilleC,NomC,NumeroC,DatenaisC)  VALUES (:email,:password,:sexe,:nom,:prenom,:ville,:numero,:date)');
    $var->bindValue(':sexe',$sexe);
    @$var->bindValue('email',$email);
    $var->bindValue('password',$password);
    $var->bindValue('prenom',$prenom);
    $var->bindValue('numero',$numero);
    $var->bindValue('nom',$nom);
    $var->bindValue('ville',$ville);
    $var->bindValue('date',$date);
    if($var->execute())
    echo "Enregistrement validé";
   
    ?>
        <div class="container">
            <h1>Votre espace client</h1>
            <br>
            <div class="row">
                <div class="col-md-6 offset-3">
                    <form class="needs-validation" novalidate method="POST" >
                        <div class="col-3 mr-auto">
                            <label>Adresse e-mail</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Saisissez votre @ mail*">

                        </div>
                        <div class="col-3 mr-auto ">
                            <label>Mot de passe</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="col-3 mr-auto">
                            <label for="Sexe">Sexe</label>
                            <select class="form-control" name="sexe">
                            <option value="Féminin">Féminin</option>
                            <option value="Masculin">Masculin</option>
                        </select>
                        </div>
                        <div class="col-3 mr-auto">
                            <label for="Nom">Nom</label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Saisissez votre nom*">
                        </div>
                        <div class="col-3 mr-auto">
                            <label>Prénom</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Saisissez votre prénom*">
                        </div>
                        <div class="col-3 mr-auto">
                            <label>Ville</label>
                            <input type="text" class="form-control" id="ville" name="ville" placeholder="Saisissez votre ville">
                        </div>
                        <div class="col-3 mr-auto">
                            <label>Numéro de téléphone</label>
                            <input type="text" class="form-control" id="numero" name="numero" placeholder="Saisissez votre numéro portable">
                        </div>
                        <div class="col-3 mr-auto">
                            <label>Date de naissance</label>
                            <input type="date" class="form-control" id="date" name="date" placeholder="Saisissez votre date de naissance">
                        </div>
                        <br>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">J'accepte les conditions d'utilisation</label>
                        </div><br>
                        <button type="submit" class="btn btn-primary" name="btn">Creer mon compte</button>
                    </form>
                </div>

            </div>
        </div>
        
</body>

</html>