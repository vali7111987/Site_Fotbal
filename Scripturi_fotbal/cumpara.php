<?php
require_once("functii.php");
verific_sesiune();

// preia informatiile despre user
$user=$_SESSION['user'];

//banii pe care userul ii mai are in cont
$bani=bani_ramasi($user);

//id-ul care identifica echipa respectiva
$id=$_GET['id'];

//vezi cati bani are userul in cont
$query="SELECT valoare FROM echipe WHERE id='$id';";
$valoare=numarare($query);

if ($valoare>$bani) {
   echo "Nu se poate cumpara echipa.Ai prea putini bani";
   ?> 
   <p> <a href='member.php'> Mergi la contul tau </a> </p> 
   <?php
} else {
   //echipa din libera este setata ca apartinand userului respectiv
   $query="UPDATE  echipe SET apartinator='$user' WHERE id=$id;";
   $results=conectare_DB($query);
   $query="UPDATE echipe SET apartine=1 WHERE id=$id;";
   $results=conectare_DB($query);
   
   //scade din banii userului in BD valoarea echipei
   $bani=$bani-$valoare;
   $query="UPDATE  username SET money=$bani WHERE username='$user';";
   $results=conectare_DB($query);
   ?>
   <div id="formular">
     <p> Ai reusit sa cumperi </p>
     <br /> 
     <?php vezi_meniu(); ?>
   </div>
<?php 
} 
?>