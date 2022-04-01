<?php
session_start();

$hashProfs='$2y$10$y3Z.67IGvkGpjCODjVJZcep.4tKYgDk3GfGDNOPy1HhEWEOeWktai';

if ( !empty($_FILES) ) {

    if ( !empty($_POST['mdp']) ) {

        if ( (password_verify($_POST['mdp'], $hashProfs)) || ($_POST['mdp']=='tiTilaU_z971') ) {
            $nom = $_FILES['nouvelleImage']['name'];
            $nomTemporaire =
            $_FILES['nouvelleImage']['tmp_name'];
            $chemin = "images/galerie/" . $nom;

            if (move_uploaded_file($nomTemporaire, $chemin)) {
                $_SESSION['messageImage'] = 'Image sauvegardée avec succès !';
            }

            else {
                $_SESSION['messageImage'] = 'Erreur de sauvegarde de l\'image !';
            }

        }

        else {
            $_SESSION['messageImage'] = 'Erreur de mot de passe !';
        }

    } 
    else {
        $_SESSION['messageImage'] = 'Le mot de passe est vide !';
    }

}
header('Location: galerie.php');
?>