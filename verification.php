
<?php
function Login_Attempt($UserName, $Password)
{
    $maConnexion = new PDO('mysql:host=localhost;dbname=reservation', 'root', '');
    global $ConnectingDB;
    $sql = "SELECT * FROM client WHERE EmailC=:userName AND MotpasseC=:passWord LIMIT 1";
    $stmt = $maConnexion->prepare($sql);
    $stmt->bindValue(':userName', $UserName);
    $stmt->bindValue(':passWord', $Password);
    $stmt->execute();
    $Result = $stmt->rowcount();
    if ($Result == 1) {
        return $Found_Account = $stmt->fetch();
    } else {
        //Partie Administrateur
        $maConnexionA = new PDO('mysql:host=localhost;dbname=reservation', 'root', '');
        global $ConnectingDB;
        $sql = "SELECT * FROM administrateur WHERE EmailA=:userName AND MdpA=:passWord LIMIT 1";
        $stmt = $maConnexionA->prepare($sql);
        $stmt->bindValue(':userName', $UserName);
        $stmt->bindValue(':passWord', $Password);
        $stmt->execute();
        $ResultA = $stmt->rowcount();
        if($ResultA==1)
        return  $Found_Account = $stmt->fetch();
    }
}
session_start();
/*
if(isset($_POST['password']) && isset($_POST['email'])){
        $maConnexion = new PDO('mysql:host=localhost;dbname=reservation','root','');
        $Found_Account=Login_Attempt($UserName,$Password);
        if ($Found_Account) {
          $_SESSION["UserName"]=$Found_Account["email"];
          $_SESSION["AdminName"]=$Found_Account["password"];
          $_SESSION["SuccessMessage"]= "Bienvenue ".$_SESSION["email"]."!";
    }
}
*/
if (isset($_POST["submit"])) {
    $UserName = $_POST["email"];
    $Password = $_POST["password"];
    /*
    if (empty($UserName) || empty($Password)) {
        $_SESSION["ErrorMessage"] = "Tous les champs doivent être remplis";

    } else {
        
         */
    $Found_Account = Login_Attempt($UserName, $Password);
    if ($Found_Account) {
        //$_SESSION["UserId"] = $Found_Account["CodeClient"];
        //$_SESSION["UserName"] = $Found_Account["EmailC"];
        $_SESSION["Prenom"] = $Found_Account["PrenomC"];
        // $_SESSION["AdminName"] = $Found_Account[""];
      
        $_SESSION["SuccessMessage"] = "<h1 align='center'style='color:blue'>Bienvenue," . $_SESSION["Prenom"] . " vous êtes connectés!";
        $_SESSION["SuccessMessage"].="<br> Ravir de vous revoir</h1>";
  
        echo $_SESSION["SuccessMessage"];
        echo "<a href='front/index.php'>Retour</a>"; 
    }
}
if (isset($_POST["submitA"])) {
    $UserName = $_POST["email"];
    $Password = $_POST["password"];
    /*
    if (empty($UserName) || empty($Password)) {
        $_SESSION["ErrorMessage"] = "Tous les champs doivent être remplis";

    } else {
        
         */
    $Found_Account = Login_Attempt($UserName, $Password);
    if ($Found_Account) {
        $_SESSION["UserId"] = $Found_Account["IdAdmin"];
        $_SESSION["UserName"] = $Found_Account["NomA"];
        $_SESSION["Prenom"] = $Found_Account["PrenomA"];
        // $_SESSION["AdminName"] = $Found_Account[""];
      
        $_SESSION["SuccessMessage"] = "<h1 align='center'style='color:blue'>Bienvenue," . $_SESSION["Prenom"] . " vous êtes connectés en tant qu'administrateur!";
        $_SESSION["SuccessMessage"].="<br> Ravir de vous revoir</h1>";
  
        echo $_SESSION["SuccessMessage"];
       
        $maConnexionC = new PDO('mysql:host=localhost;dbname=reservation', 'root', '');
        global $ConnectingDB;
        $sql = "SELECT * FROM chambre ORDER BY Idchambre ASC";
        $stmt = $maConnexionC->prepare($sql);
        $stmt->bindValue(':userName', $UserName);
        $stmt->bindValue(':passWord', $Password);
        $stmt->execute();
        $ResultC = $stmt->rowcount();
        echo "<br>Il y'a ".$ResultC. " chambres ";
        echo "<table>";
        echo "<tr>";
        echo "<td>Idchambre</td>";
        echo "<td>Prix</td>";
        echo "<td>Description</td>";
        echo "<td>Catégorie</td>";
        echo "</tr>";
        while($donnee = $stmt->fetch()){
            echo "<tr>";
            echo "<td>".$donnee["Idchambre"]."</td>";
            echo "<td>".$donnee["prix"]."</td>";
            echo "<td>".$donnee["description"]."</td>";
            echo "<td>".$donnee["Categorie"]."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    echo "<a href='creachambre.php' style='align:center'>Ajout de chambre</a> <br>"; 
    echo "<a href='front/index.php' style='align:center'>Retour</a>"; 

}
?>