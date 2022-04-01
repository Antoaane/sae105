<?php
    if (count($_POST)==0) {
        header('location: contact.php');
    }

    // PRENOM

    if (!empty($_POST['prenom'])) {
        $prenom=ucfirst(strtolower($_POST['prenom']));
        echo 'Le prenom est : '.$prenom.'<br/>'."\n";
    }
    else {
        echo "Erreur : le prenom est vide !"."/n";
        exit(0);
    }

    // NOM

    if (!empty($_POST['nom'])) {
        $nom=ucfirst(strtolower($_POST['nom']));
        echo 'Le nom est : '.$nom.'<br/>'."\n";
    }
    else {
        echo "Erreur : le nom est vide !"."/n";
        exit(0);
    } 

    // MAIL

    if(!empty($_POST['email'])) {
        // if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
            $email = $_POST['email'];
            echo "L'adresse mail est : ".$email."<br>";
        // } 
        // else {
        //     echo "Erreur : l'adresse mail n'est pas valide";
        //     exit(0);
        // }
    } 
    else {
        echo "Erreur : l'adresse mail est vide";
        exit(0);
    }

    $destinataire = 'antoinelauzis@gmail.com';
    $sujet = 'Demande de renseignement --- '.date('d/m/Y');
    $headers = 'From: mmi21f11@mmi-troyes.fr' . "\r\n" .'Reply-To: mmi21f11@mmi-troyes.fr' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

    echo 'Le sujet est : '.$sujet.'<br/>';

    if(!empty($_POST['message'])) {
        $messageCheck = ucfirst(strtolower($_POST['message']));
        echo 'Le message est : '.$messageCheck.'<br>';
    } else {
        echo 'Le message est vide :/';
        exit(0);
    }

    $message = $messageCheck;

    if (mail($destinataire, $sujet, $message, $headers)) {
        echo 'Message envoyé : OK !'."\n";
        header("Location: confirmation.php");
    } 
    else { 
        echo 'Erreur : message non envoyé !'."\n";
    }
    
    $headers = 'From: mmi21f11@mmi-troyes.fr' . "\r\n" .
    'Reply-To: no-reply@mmi-troyes.fr' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    if (mail($_POST['email'], 'Confirmation de demande', 'Nous avons bien reçu votre demande !', $headers)) {
        echo 'Message de confirmation envoyé : OK !'."\n";
        header("Location: confirmation.php");
    } 
    else {
        echo 'Erreur : message de confirmation non envoyé !'."\n";
    }

       
?>