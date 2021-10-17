<?php
if(isset($_POST['btn']))
$sexe=$_POST["sexe"];
$maConnexion = new PDO('mysql:host=localhost;dbname=reservation','root','');
$var=$maConnexion->prepare('INSERT INTO client (SexeC)  VALUES (:sexe)');
$var->bindValue(':sexe',$sexe);
$var->execute();
?>
<form method="POST" >
    <label>Sexe</label>
    <input type="text" name="sexe">
    <button type="submit" class="btn btn-primary" name="btn">Creer mon compte</button>
</form>