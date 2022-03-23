<?php
    // Include de la template
    require_once './src/common/template.php';

    // verif de la route URL
    if (isset($_GET['route'])) {
        // Tri de la route
        switch ($_GET['route']) {
            case 'login':
                // Inclure le mods/login_DB.php
                break;
            case 'signup':
                if (isset($_POST['pseudo'])) {
                    // Inclure le mods/register_DB.php
                } else {
                    // Si pas de formulaire envoie, affichage du formulaire d'enregistrement
                    require_once './views/register_form.html';
                }
                break;
            // Sécu si rien, renvoie sur Login
            default:
                header('Location: ./login.php');
                break;
        }
    } else {
        // Si rien, affichage du formulaire de login
        require_once './views/login_form.html';
    }
?>