<?php
//Vezi tranzactiile userului respectiv
require_once('menu.php');
require_once('functii.php');
?>
<div id="header">
   <div id="logo">
      <?php verific_sesiune(); $username=$_SESSION['user'];?>
      <br />
      <form method="post" action="tranzactie.php">
         <h2 class="title">  <font color="#00FFFF"> Incheie o noua tranzactie cu:  </font> 
         <select name="partener">  <?php selectare_user(); ?> </select>  </h2>
         <br />
         <h2 class="title"> <font color="#00FFFF"> <input type="submit" value="Mergi la negociere"> </font> </h2>
       </form>
    </div>
</div>
<?php
?>
<div id="page">
   <div id="sidebar" style="float:left">
      <div id="search" class="boxed">
         <h2 class="title">  Tranzactii primite   </h2> 
         <div class="content">
            <?php tranzactii_primite($username); ?>
         </div>
      </div>
   </div>
   <div id="sidebar">
      <div id="search" class="boxed">
         <h2 class="title"> Tranzactii trimise  </h2> 
      </div>
	  <div class="content">
         <?php tranzactii_trimise($username);?>
      </div>
   </div>
</div>
     