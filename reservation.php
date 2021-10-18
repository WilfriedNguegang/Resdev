<?php 

  if(isset($_POST['submit']))
  $email=$_POST['email'];
  @$prenom=$_POST["prenom"];
  @$nom=$_POST["nom"];
  @$dateA=$_POST["dateA"];
  @$dateF=$_POST["dateF"];
  @$telephone=$_POST["telephone"];
  $maConnexion = new PDO('mysql:host=localhost;dbname=reservation','root','');
  $var=$maConnexion->prepare('INSERT INTO reservation ( DateA, DateD, Email, Nom,Prenom,Telephone)  VALUES (:dateA,:dateF,:email,:nom,:prenom,:telephone)');
  @$var->bindValue(':email',$email);
  @$var->bindValue('prenom',$prenom);
  $var->bindValue('nom',$nom);
  $var->bindValue('dateA',$dateA);
  $var->bindValue('dateF',$dateF);
  $var->bindValue('telephone',$telephone);
  $var->execute();
  if($var->execute())
  echo "Enregistrement validé";
?>