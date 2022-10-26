<?php
    echo 'Je suis le controlleur contact';
?>

<?php
    class ContactController {

        /**
         * Contact function
         */
        function contact( String $name): string {
            return "HEllo $name!";
        }
    }
?>
