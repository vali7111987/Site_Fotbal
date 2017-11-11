<?php
require_once('functii.php');
//preia informatiile userului care vrea sa trimita mesajul
$destinatar=filtrare($_POST['destinatar']);
$subiect=filtrare($_POST['subiect']);
$mesaj=filtrare($_POST['mesaj']);
verific_sesiune(); 
$username=$_SESSION['user'];
$expeditor=$username;

//insereaza mesajul in BD
if ($expeditor==$destinatar) {
   $query1="insert into mesaje values (0,'$username','$username','$destinatar','$subiect','$mesaj');";
   $results1=conectare_DB($query1);
} else {
   $query1="insert into mesaje values (0,'$username','$username','$destinatar','$subiect','$mesaj');";
   $query2="insert into mesaje values (0,'$destinatar','$username','$destinatar','$subiect','$mesaj');";
   $results1=conectare_DB($query1);
   $results2=conectare_DB($query2);
}   
header('Location:mesaje.php');
?>
<!--<h2> Mesajul a fost trimis cu succes </h2>
<a href="mesaje.php"> Mergi inapoi la mesaje </a> -->

