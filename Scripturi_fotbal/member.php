<?php
//pagina de membru a utilizatorului dupa autentificare
require_once('menu.php');
require_once('functii.php');
?>
<div id="header">
   <div id="logo">
   <?php 
   verific_sesiune(); 
   if (!isset($_SESSION['user'])) {
      ?>
      <h2> <a href="index.php"> Mergi inapoi la prima pagina </a> </h2>
   <?php   
   } else {	 
   //afiseaza toate informatiile relevante pentru uzerul respectiv
   $username=$_SESSION['user'];
   ?>
      <br />
	  <h2 class="title">  <a href="delogare.php"> <font color="#00FFFF">  Log out </font> </a> </h2>
      <h2 class="title">Numarul de echipe detinute: <font color="#00FFFF"> <?php echo nr_echipe($username);?> </font> </h2>
      <h2 class="title">Valoarea totala a echipelor: <font color="#00FFFF"><?php echo valoare_totala($username);?></font> </h2>
      <h2 class="title">Bani ramasi: <font color="#00FFFF"> <?php echo bani_ramasi($username); ?> </font></h2>
      <h2 class="title"> <a href="mesaje.php"> <font color="#00FF00"> Vezi mesajele tale </font> </a> </h2>
      <h2 class="title"> <a href="negocieri.php" <font color="#00FF00"> Mergi la negocieri </font> </a> </h2>
    </div>
</div>
 <?php

//afiseaza toate echipele care apartin userului respectiv in BD 
$query="select id,nume,stema,valoare from echipe where apartinator='$username'";
$results=conectare_DB($query);
while ($rows=mysql_fetch_array($results)) {
?>   
   <div id="page">
      <div id="content">
         <table width="550 bordercolor="#00BFFF" border="1" cellspacing="5">
	     <tr> 
	     <td> 
         <img src="Steme/<?php echo $rows['stema'];?>.jpg">
         </td>
         <td>
         <h1 align="center"> <?php echo $rows['nume']; ?></h1> 
         <h1 align="center"> <?php echo $rows['valoare'] ?></h1>
         <h1 align="center" id="albastru"> <a href="detalii.php?id=<?php echo $rows['id']; ?>"> Click pentru detalii </a> </h1>
         </td>
	     </tr>
         </table>
      </div>
   </div>
<?php
}
require_once('footer.php');
}
?>    