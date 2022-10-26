<?php
    echo 'Je suis le controlleur home';
?>

<?php
    class HomepageController {

        function home($name): string {
            return 'JE suis sur la page d\'accueil du contrôleur homepage';
        }
    }
?>
