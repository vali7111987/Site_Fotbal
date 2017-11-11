<?php
require_once("functii.php");
require_once('menu.php');
//afiseaza detaliile despre echipa selectata;
?> 
<div id="headerU" style="background: #545454 url(images/tari/<?php echo $tara;?>.jpg ) no-repeat 5px 0px;">
</div>
<?php
session_start();

//id care identifica echipa respectiva
$id=$_GET['id'];

//preia informatiile din BD despre echipa respectiva
$query="select nume_complet,data_fondarii,stadion,campionat,presedinte,antrenor from detalii where id=$id limit 1;";
$query2="select stema from echipe where id=$id limit 1;";
$results2=conectare_DB($query2);

while ($rows2=mysql_fetch_array($results2)) {
$stema=$rows2['stema'];
}

$results=conectare_DB($query);
while ($rows=mysql_fetch_array($results)) {
?>   
   <div id="page">
      <div class="content">
         <table width="900" bordercolor="#00BFFF" border="1" cellspacing="5">
	     <tr> 
		    <td> <img src="Steme/<?php echo $stema;?>.jpg"> </td>
            <td>
            <h1 align="center">Nume complet: <font color="FF3300"> <?php echo $rows['nume_complet']; ?> </font> </h1> 
            <h1 align="center">Data fondarii: <font color="FF3300"> <?php echo $rows['data_fondarii'] ?> </font> </h1>
            <h1 align="center">Stadion: <font color="FF3300"> <?php echo $rows['stadion'] ?> <font> </h1>
            <h1 align="center">Campionat: <font color="FF3300"> <?php echo $rows['campionat'] ?> <font> </h1>
            <h1 align="center">Presedinte: <font color="FF3300"> <?php echo $rows['presedinte'] ?> <font> </h1>
            <h1 align="center">Antrenor: <font color="FF3300"> <?php echo $rows['antrenor'] ?> <font> </h1>
            <?php
            if (isset($_SESSION['user'])) {
            ?>
            <h1 align="center"> <a href=cumpara.php> <font color="FF3300"> Cumpara  echipa  </font> </h1>
            <?php } ?>
            </td>
	      </tr>
          </table>
      </div>
	</div>  
<?php
}
require_once('footer.php');
?>

