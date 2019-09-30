<?php
    include 'formulaire.html';
    $id = $_POST('identifiant');
    $email = $_POST('mail');
    $sexe = $_POST('civilité');
    $password = $_POST('mdp');
    $Cpassword = $_POST('vmp');
    $Submit = $_POST('Submit');


    if($Submit =='Send')
        $email.='Email:'.$_POST['mail'].PHP_EOL;
        $message.=$password.PHP_EOL.$_POST['Vérification'];
        mail($email, 'Voici vos identifiants' , $message);
        echo '<!DOCTYPE html> 
              <html lang="fr">
              <head>
              <title>Message envoyé</title>
              </head>
              <body>
              <header> Merci pour le soutien</header>
              <ul>
              <li><a href="index.html">Menu principal</a></li>
              </ul></body>' .PHP_EOL;
    }
    else{
        echo '<br/><strong> Bouton non géré!</strong>';
    }