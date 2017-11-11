<?php
require_once('functii.php');
$id=$_GET['id'];
//echo $_GET['id'];
$query="delete from mesaje where id='$id'";
$results=conectare_DB($query);
echo "S-a sters cu succes mesajul";
?>
<a href="mesaje.php"> Mergi inapoi la mesaje </a>
