 	
<?php

// Vous pouvez appeler ce fichier newsletters.php
// OU
// lui donner le nom que vous voulez



  // Créer une connexion
  //$conn = mysqli_connect($servername, $username, $password, $DBname);
$conn= new PDO('mysql:host=localhost;dbname=reservation','root','');
  // Vérifier la connexion
  if (!$conn) {
      die("La connexion a échoué: " . mysqli_connect_error());
  }

// envoie du mail

// titre du mail
$titre = "Newletters";


$q = $conn->query("SELECT EmailC FROM client"); // requete
$compteur=1; // variable pour compter les mails
//while ($r = mysqli_fetch_array($q)) {
    @$e_mail=$_POST['email']; //prend l'email de la table

// 1 exemple de contenu du mail
$contenu = 'Bonjour! <br />Email : '.$e_mail.'<br />';
$contenu .= 'Voici la dernière newletters::';
$contenu .= 'Au revoir <br /><br />';

// envoi du mail HTML
$from = "From: hello <newsletter@monsite.ext>\nMime-Version:";
$from .= " 1.0\nContent-Type: text/html; charset=ISO-8859-1\n";
// envoie du mail
//$message = "Line 1\r\nLine 2\r\nLine 3";
$to  = 'johny@example.com, sally@example.com'; // notez la virgule

     // Sujet
     $subject = 'Calendrier des anniversaires pour Août';

     // message
     $message = '
     <html>
      <head>
       <title>Calendrier des anniversaires pour Août</title>
      </head>
      <body>
       <p>Voici les anniversaires à venir au mois d\'Août !</p>
       <table>
        <tr>
         <th>Personne</th><th>Jour</th><th>Mois</th><th>Année</th>
        </tr>
        <tr>
         <td>Josiane</td><td>3</td><td>Août</td><td>1970</td>
        </tr>
        <tr>
         <td>Emma</td><td>26</td><td>Août</td><td>1973</td>
        </tr>
       </table>
      </body>
     </html>
     ';
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// En-têtes additionnels
$headers[] = 'To: Mary <mary@example.com>, Kelly <kelly@example.com>';
$headers[] = 'From: Anniversaire <anniversaire@example.com>';
$headers[] = 'Cc: anniversaire_archive@example.com';
$headers[] = 'Bcc: anniversaire_verif@example.com';

// Envoi
mail($to, $subject, $message, implode("\r\n", $headers));
//mail($e_mail,$titre,$contenu);

      echo'N° '.$compteur.' - '.$e_mail.' : envoyé avec succès!<br />';
      $compteur++; // ajoute 1 à la variable du compteur
     // }  // fin du while


?>