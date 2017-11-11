<?php
require_once("functii.php");
$tara=$_GET['tara'];
require_once('menu.php');
?> 
<!--Selecteaza imaginea cu tara respectiva -->
<div id="headerU" style="background: #545454 url(images/tari/<?php echo $tara;?>.jpg ) no-repeat 5px 0px;">
   <div id="logo">
      <?php verific_sesiune(); ?>
      <h1>Vezi echipele din <?php echo $tara; ?> </h1> 
   </div>
</div>
<?php
//selecteaza toate echipele din BD apartinand tarii respective
$query="select id,echipe.nume,echipe.stema,echipe.valoare,echipe.apartine,echipe.apartinator from echipe,tari where echipe.idt=tari.idt and tari.tara='$tara'";
$results=conectare_DB($query);

//afiseaza informatiile pentru fiecare echipa apartinand tarii respective
while ($rows=mysql_fetch_array($results)) {
?>   
   <div id="page">
      <div class="content">
         <table width="550 bordercolor="#00BFFF" border="1" cellspacing="5">
	       <tr> 
	          <td> <img src="Steme/<?php echo $rows['stema'];?>.jpg"> 
                   <?php $_SESSION['stema']=$rows['stema']; ?>
              </td>
              <td>
              <h1 align="center">Nume : <font color="FF3300"> <?php echo $rows['nume']; ?> </font> </h1> 
              <h1 align="center"> Valoare: <font color="FF3300"> <?php echo $rows['valoare'] ?>  </font> </h1>
              <h1 align="center" id="albastru"> <a href="detalii.php?id=<?php echo $rows['id']; ?>">Click pentru detalii </a> </h1>
              <?php 
			  if ($rows['apartine']==0) {
                 ?> <h1 align="center"> Echipa libera </h1> 
                 <?php 
                 if (isset($_SESSION['user'])) {
                 ?>
                    <h1 align="center"> <a href="cumpara.php?id=<?php echo $rows['id'];?>"> <font color="#00FFFF"> Cumpara  echipa  </font> </h1>
                 <?php
                 }
              } else {
                 ?> <h1 align="center">  <?php echo $rows['apartinator']; ?> </h1>
                 <?php 
                 } 
                 ?>       
              </td>
	       </tr>
        </table>
      </div>
   </div>   
<?php
}
require_once('footer.php');
?>
