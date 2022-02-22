<?php

ob_start();
session_unset();

print_r($_SESSION);
?>

Vous avez été deconnecté !

<?php

echo "qsdf";

$content = ob_get_clean();
$titre = "Deconnexion";
require "template.php";