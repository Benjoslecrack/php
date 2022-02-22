<?php
ob_start();
?>

<?php

print_r($_SESSION);

$content = ob_get_clean();
$titre = "dashboard statistique";
require "template.php";
?>