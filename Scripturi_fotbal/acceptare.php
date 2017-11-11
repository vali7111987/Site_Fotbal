<?php 
require_once('functii.php');

//preia informatiile despre tranzactie si alegerea facuta
$id=$_GET['id'];
$alegere=$_POST['alegere'];
verific_sesiune(); $username=$_SESSION['user'];
$query="select * from tranzactii where id='$id';";
$results=conectare_DB($query);
while ($rows=mysql_fetch_array($results)) {
    $expeditor=$rows['expeditor'];
	  $destinatar=$rows['destinatar'];
	  $echipe_date=$rows['echipe_date'];
	  $bani_dati=$rows['bani_dati'];
	  $bani_primite=$rows['echipe_primite'];
	  $echipe_primite=$rows['echipe_primite'];
	  $bani_primiti=$rows['bani_primiti'];
}
if ($alegere=='NU') {
   echo "Ai selectat raspunsul negativ";
   //insereaza mesajul in BD
      $subiect='Tranzactie respinsa';
      $mesaj="Nu s-a acceptat $echipe_date si $bani_dati pentru 
              $echipe_primite si  $bani_primiti";
      //destinatarul tranzactiei este expeditorul mesajuluide respingere si vice-versa
      $query1="insert into mesaje values (0,'$expeditor','$destinatar','$expeditor','$subiect','$mesaj');";
      $query2="insert into mesaje values (0,'$destinatar','$destinatar','$expeditor','$subiect','$mesaj');";
      $results1=conectare_DB($query1);
      $results2=conectare_DB($query2);
      $query="delete from tranzactii where id='$id';";
      $results=conectare_DB($query);
   //daca selectezi raspunsul pozitiv,ia informatiile referitoare la tranzactie din BD
} else {
    //insereaza mesajul in BD
      $subiect='Tranzactie acceptata';
      $mesaj="S-a acceptat $echipe_date si $bani_dati pentru 
              $echipe_primite si  $bani_primiti";
      //destinatarul tranzactiei este expeditorul mesajuluide acceptare si vice-versa
      $query1="insert into mesaje values (0,'$expeditor','$destinatar','$expeditor','$subiect','$mesaj');";
      $query2="insert into mesaje values (0,'$destinatar','$destinatar','$expeditor','$subiect','$mesaj');";
      $results1=conectare_DB($query1);
      $results2=conectare_DB($query2);
      $query="delete from tranzactii where id='$id';";
      $results=conectare_DB($query);
    //sparge stringul care contin echipele
	  $v_date=explode(",",$echipe_date);
	  $v_primite=explode(",",$echipe_primite);
	  //actualizeaza banii celor 2 implicati in tranzactie
	  schimba_bani($expeditor,$destinatar,$bani_dati,$bani_primiti);
	  //actualizeaza echipele celor 2 implicati in tranzactie
	  actualizeaza_echipe($expeditor,$v_primite);
	  actualizeaza_echipe($destinatar,$v_date);
	  ?> <h2> S-a realizat tranzactia </h2> <?php
	  //sterge tranzactia daca s-a efectuat
	  $query="DELETE FROM tranzactii WHERE id='$id';";
	  $results=conectare_DB($query);
}
vezi_meniu();	 
?>
