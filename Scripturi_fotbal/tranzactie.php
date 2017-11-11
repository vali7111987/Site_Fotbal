<?php
//propune catre alt user tranzactia pe care vrei sa o efectuezi
require_once('menu.php');
require_once('functii.php');
?>
<html>
<body>
   <div id="header">
      <div id="logo">
          <?php verific_sesiune(); $username=$_SESSION['user'];?>
          <br />
          <h2 class="title"> <font color="#00FFFF"> Incheierea unui schimb de echipe  </font>  </h2>
          <br />
       </div>
    </div>
<?php
//preia initiatorul si cel care trebuie sa accepte tranzactia
$partener=$_POST['partener'];
$_SESSION['expeditor']=$username;
$_SESSION['destinatar']=$partener;
?>   
<div id="formular">
   <form method="post" action="tranzactie_prelucrare.php">
   <p>Alege echipa/echipele pe care vrei sa le dai </p>
   <?php
   //selecteaza toate echipele utilizatorului respectiv din BD
   $query="select nume from echipe where apartinator='$username';";
   $results=conectare_DB($query);
   while ($rows=mysql_fetch_array($results)) {
      ?> 
      <input type="checkbox" name="selectie1[]" value="<?php  echo $rows['nume']; ?>"> 
      <?php  echo $rows['nume'];   
   } 
   ?>
   <p> Scrie banii pe care ii dai in tranzactie 
   <input type="text" name="dati"> </p> 
   <p>Alege echipa/echipele pe care vrei sa le primesti </p>
   <?php
   $query="select nume from echipe where apartinator='$partener';";
   $results=conectare_DB($query);
   while ($rows=mysql_fetch_array($results)) {
      ?> 
      <input type="checkbox" name="selectie2[]" value="<?php  echo $rows['nume']; ?>"> 
      <?php  echo $rows['nume'];   
   } 
   ?>
   <p>Scrie banii pe care vrei sa ii primesti 
   <input type="text" name="primiti">  </p>
   <p> <input type="submit" value="Initiaza tranzactie"> </p>
   </form>
</div>
</body>
</html>  
       
    
   