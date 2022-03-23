<?php
    // Include de la template
    require_once './src/common/template.php';

    // verif de la route URL
    if (isset($_GET['route'])) {
        // Tri de la route
        switch ($_GET['route']) {
            // route Login
            case 'login':
                // Inclure le mods/login_DB.php
                break;
            // route Enregistrement
            case 'signup':
                if (isset($_POST['pseudo'])) {
                    // Inclure le mods/register_DB.php
                } else {
                    // Si pas de formulaire envoié, affichage du formulaire d'enregistrement
                    require_once './views/register_form.html';
                }
                break;
            // Sécu si route différent des différent switch, renvoie sur login.php
            default:
                header('Location: ./login.php');
                exit();
                break;
        }
    } else {
        // si pas de route, affichage du formulaire de login
        require_once './views/login_form.html';
    }

    require_once './src/common/footer.php';
?>