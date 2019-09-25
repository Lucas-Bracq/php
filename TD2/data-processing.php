<?php
    include 'formulaire.html';
    if($_POST['Submit'] =='Send'){
        $message='Voicivosidentifiants d\'inscription:'.PHP_EOL;
        $message.='Email:'.$_POST['mail'].PHP_EOL;
        $message.='Motdepasse:'.PHP_EOL.$_POST['Vérification'];
    }
    else{
        echo '<br/><strong> Bouton non géré!</strong>';
    }