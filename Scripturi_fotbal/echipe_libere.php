<?php
require_once("functii.php");
require_once('menu.php');
?>
<div id="headerU" style="background: #545454 url(images/uefa.jpg) no-repeat 5px 0px;">
   <div id="logo">
      <?php verific_sesiune(); ?>
      <h1>Vezi echipele care nu apartin nici unui user </h1> 
    </div>
</div>
<?php
//selecteaza echipele libere din BD
$query="select id,nume,stema,valoare,apartine,apartinator from echipe where apartine=0";
$results=conectare_DB($query);

//afiseaza echipele libere din BD
while ($rows=mysql_fetch_array($results)) {
   ?>   
   <div id="page">
      <div id="content">
         <table width="550 bordercolor="#00BFFF" border="1" cellspacing="5">
	     <tr> 
	        <td> <img src="Steme/<?php echo $rows['stema'];?>.jpg"> </td>
            <td>
            <h1 align="center"> <?php echo $rows['nume']; ?></h1> 
            <h1 align="center"> <?php echo $rows['valoare'] ?></h1>
            <h1 align="center" id="albastru"> <a href="detalii.php?id=<?php echo $rows['id']; ?>"> Click pentru detalii </a> </h1>
             <?php
             if (isset($_SESSION['user'])) {
             ?>
            <h1 align="center"> <a href="cumpara.php?id=<?php echo $rows['id'];?>"> <font color="#00FFFF"> Cumpara  echipa  </font> </h1>
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