<?php

ob_start();
?>

Ici la page d'accueil

<?php
$content = ob_get_clean();
$titre = "Accueil";
require "template.php";
?>