
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rooms Resa Inscription</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./style.css">
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

        <header class="header">

        <a href="#" class="logo"> <i class="fas fa-hotel"></i> Rooms Resa </a>
        </header>

        <div class="container">
            <div class="title">Inscription</div>
            <div class="content">
                    <form class="needs-validation" novalidate method="POST" >
                        <div class="user-details">
                            <div class="input-box">
                            <span class="details">Adresse e-mail</label>
                            <input type="mail" class="form-control" id="email" name="email" placeholder="Saisissez votre @ mail*">

                        </div>
                        <div class="input-box">
                            <span class="details">Mot de passe</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="input-box">
                            <label for="Sexe">Sexe</label>
                            <select class="form-control" name="sexe">
                            <option value="Féminin">Féminin</option>
                            <option value="Masculin">Masculin</option>
                        </select>
                        </div>
                        <div class="input-box">
                            <span class="details">Nom</label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Saisissez votre nom*">
                        </div>
                        <div class="input-box">
                            <span class="details">Prénom</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Saisissez votre prénom*">
                        </div>
                        <div class="input-box">
                            <span class="details">Ville</label>
                            <input type="text" class="form-control" id="ville" name="ville" placeholder="Saisissez votre ville">
                        </div>
                        <div class="input-box">
                            <span class="details">Téléphone</label>
                            <input type="text" class="form-control" id="numero" name="numero" placeholder="Saisissez votre numéro portable">
                        </div>
                        <div class="input-box">
                            <span class="details">Date de naissance</label>
                            <input type="date" class="form-control" id="date" name="date" placeholder="Saisissez votre date de naissance">
                        </div>
            
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">J'accepte les conditions d'utilisation</label>
                        </div>
                        <div class="button">
                        <input type="submit" name="btn" value="Je Crée mon compte"></input>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
</body>

</html>