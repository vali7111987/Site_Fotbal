<?php
require_once('functii.php');
session_start();
//preia informatiile despre detaliile tranzactiei
$expeditor=$_SESSION['expeditor'];
$destinatar=$_SESSION['destinatar'];
$echipe_date=implode(",",$_POST['selectie1']);
$echipe_primite=implode(",",$_POST['selectie2']);
$bani_dati=$_POST['dati'];
$bani_primiti=$_POST['primiti'];
//adauga noua tranzactie in BD
$query="insert into tranzactii values (0,'$expeditor','$destinatar',
       '$echipe_date',$bani_dati,'$echipe_primite',$bani_primiti,0,0);";
$results=conectare_DB($query);
?>
<h2 class="title">Tranzactie initiata.Asteapta raspunsul </h2>
<?php vezi_meniu(); ?>