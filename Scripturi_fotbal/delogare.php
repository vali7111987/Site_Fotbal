<?php
require_once("functii.php");
session_start();
if (isset($_SESSION['user'])) {
   unset($_SESSION['user']);
}
?>
<h2> Te-ai delogat cu succes </h2>
<?php vezi_meniu(); ?>
    