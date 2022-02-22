<?php
ob_start();
?>

Le panier

<?php
$content = ob_get_clean();
$titre = "panier";
require "template.php";
?>