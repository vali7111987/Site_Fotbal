<?php
require_once('menu.php');
require_once('functii.php');
//vezi toate tarile existente in BD
?>
<div id="headerU" style="background: #545454 url(images/uefa.jpg) no-repeat 5px 0px;">
   <div id="logo">
    <?php verific_sesiune(); ?>
    <h1>Selecteaza o tara pentru a vedea echipele din acea tara </h1> 
    </div>
</div>
<div id="page">
   <div class="content">
      <table width="500" border="1" cellspacing="5">
	  <tr> 
	     <td> 
         <a href="echipe.php?tara=Germania"> <h1 class="title"> Germania  </h1> </a>
	     <img src="images/echipe/Germania.jpg" width="215" height="160"> 
         </td>
	     <td>
         <a href="echipe.php?tara=Spania"> <h1 class="title"> Spania  </h1> </a> 
	     <img src="images/echipe/Spania.jpg" width="215" height="160"> 
         </td>
	     <td> 
         <a href="echipe.php?tara=Italia"> <h1 class="title"> Italia  </h1> </a> 
	     <img src="images/echipe/Italia.jpg" width="215" height="160"> 
         </td>
	  </tr> 
	  <tr>
	     <td> 
         <a href="echipe.php?tara=Anglia"> <h1 class="title"> Anglia </h1> </a>
	     <img src="images/echipe/Anglia.jpg" width="215" height="160"> 
         </td>
	     <td> 
         <a href="echipe.php?tara=Franta"> <h1 class="title"> Franta </h1> </a>
	     <img src="images/echipe/Franta.jpg" width="215" height="160"> 
         </td>
	     <td> 
         <a href="echipe.php?tara=Portugalia"> <h1 class="title"> Portugalia </h1> </a>
	    <img src="images/echipe/Portugalia.jpg" width="215" height="160"> 
         </td>
	   </tr> 
	   <tr>
	      <td> 
          <a href="echipe.php?tara=Olanda"> <h1 class="title"> Olanda </h1> </a>
	      <img src="images/echipe/Olanda.jpg" width="215" height="160"> 
          </td>
	      <td> 
          <a href="echipe.php?tara=Ucraina"> <h1 class="title"> Ucraina </h1> </a>
	      <img src="images/echipe/Ucraina.jpg" width="215" height="160"> 
          </td>
	      <td>
          <a href="echipe.php?tara=Rusia"> <h1 class="title"> Rusia </h1> </a>
	      <img src="images/echipe/Rusia.jpg" width="215" height="160"> 
          </td>
	  </tr>
	  </table>
   </div>
</div>
<?php
require_once('footer.php');
?>  