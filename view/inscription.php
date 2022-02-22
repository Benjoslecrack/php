<?php
ob_start();
?>

<?php
$content = ob_get_clean();
$titre = "inscription";
require "template.php";
?>