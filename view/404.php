<?php

include "../repository/MusiqueRepository.php";
ob_start();

echo "<pre>";
var_dump($_SERVER);
echo "</pre>";
?>

Erreur page introuvé, Erreur 404

<?php

$content = ob_get_clean();
$titre = "Page d'erreur";
require "template.php";