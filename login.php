<?php 

    $title = "Forum webdevs1 | Login";
    require_once './src/common/template.php';

    if (isset($_GET['route'])) {
        switch ($_GET['route']) {
            case 'login':
                // Inclure le mods/login_DB.php
                break;
            case 'signup':
                if (isset($_POST['pseudo'])) {
                    // Inclure le mods/register_DB.php
                } else {
                    require_once './views/register_form.html';
                }
                break;
        }
    } else {
        require_once './views/login_form.html';
    }
?>