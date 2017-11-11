<?php
//afiseaza mesajele utilizatorului respectiv 
require_once('menu.php');
require_once('functii.php');
?>
   <div id="header">
      <div id="logo">
          <?php verific_sesiune(); $username=$_SESSION['user'];?>
          <br />
          <h2 class="title"> <a href="adauga_mesaj.php"> <font color="#00FFFF"> Trimite un mesaj nou  </font> </a> </h2>
          <br />
        </div>
    </div>
<?php
//selecteaza mesajele primite,respectiv trimise pentru utilizatorul respectiv
$queryp="select * from mesaje where destinatar='$username'and username='$username';";
$queryt="select * from mesaje where expeditor='$username' and username='$username';";
$queryp_nr="select count(*) from mesaje where destinatar='$username';";
$queryt_nr="select count(*) from mesaje where expeditor='$username';";
?>     
<div id="page">
   <div id="sidebar" style="float:left">
      <div id="search" class="boxed">
         <h3 class="title">  Mesaje trimise   </h3> 
         <div class="content">
            <?php
            //numara in BD sa bada daca ai mesaje trimise,daca ai le afiseaza
		    if  (numarare($queryt_nr)==0) { 
               ?> <h3> Nu ai mesaje trimise <h3> <?php
            } else {
               afisare_mesaje($queryt); 
            }
            ?> 
         </div>
      </div>
   </div>
   <div id="sidebar">
      <div id="search" class="boxed">
         <h3 class="title">  Mesaje primite   </h3> 
         <div class="content">
            <?php
		    //numara in BD sa bada daca ai mesaje primite,daca ai le afiseaza
            if  (numarare($queryp_nr)==0) { 
               ?> <h3> Nu ai mesaje primite </h3> <?php
            } else {
               afisare_mesaje($queryp); 
            }
            ?> 
         </div>
      </div>
   </div>
</div> 
   
  
   