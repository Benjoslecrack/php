<?php
ob_start();
?>

<?php
$content = ob_get_clean();
$titre = "page rap";
require "template.php";
?>