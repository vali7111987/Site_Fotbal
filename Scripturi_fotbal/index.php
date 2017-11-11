<?php
require_once('menu.php');
require_once('functii.php');
//pagina de inceput a site-ului
?>
<div id="header">
   <div id="logo">
      <?php verific_sesiune(); ?>
	  <h1> <a href="http://all-free-download.com/free-website-templates/">Magazinul echipelor de fotbal </a> </h1>
      <h2><a href="http://all-free-download.com/free-website-templates/">Joc simulat</a></h2>
   </div>
</div>
<div id="page">
   <div id="content">
      <div style="margin-bottom: 20px; padding-bottom: 15px; border-bottom: 1px solid #999999;">
         <h1 class="title">Bine ati venit la magazinul virtual al echipelor de fotbal!</h1>
         <p><img src="images/messi.jpg" alt="" width="120" height="160" class="left" /></p>
         <p><strong>Pariaza pe echipa ta</strong> Jocul este foarte simplu.Dupa ce iti creezi un cont,vei primi o suma de bani pe care o vei folosi sa cumperi echipe de fotbal 
         Dupa ce vei cumpara aceste echipe,valoarea echipelor tale va varia in functie de clasamentele UEFA si ale Agentiei De Statistica in Fotbal.</p>
         <h2>Cunostintele tale despre echipele de fotbal  conteaza</h2>
         <p>IIn functie de cunostintele tale in fotbal,poti sa vinzi sau sa cumperi echipe la un anumit moment
         Detalii in pagina Despre</p>
         <blockquote>
         <p>&ldquo;Poti sa negociezi cu alti jucatori vanzarea si cumpararea de echipe &ldquo;</p>
         </blockquote>
      </div>
      <div>
	     &nbsp;
	  </div>
      <div class="twocols">
         <div class="col1">
            <h3 class="title">Informatii suplimentare echipe</h3>
            <p>In partea dreapta vei gasi linkuri catre Site-uri utile care iti pot oferi informatii despre echipe.</p>
         </div>
         <div class="col2">
            <h3 class="title">Site-uri Oficiale Ligi Nationale si UEFA</h3>
            <ul class="list">
               <li><a href="http://www.uefa.com/">UEFA</a></li>
               <li><a href="http://www.iffhs.de/cwr-january-2014">Statistica </a></li>
               <li><a href="http://www.bundesliga.com/en/">Germania</a></li>
               <li><a href="http://www.soccer-spain.com/index.php">Spania</a></li>
               <li><a href="http://all-free-download.com/free-website-templates/">Italia</a></li>
               <li><a href="http://all-free-download.com/free-website-templates/">Anglia</a></li>
               <li><a href="http://all-free-download.com/free-website-templates/">Franta</a></li>
               </ul>
          </div>
       </div>
   </div>
   <div id="sidebar">
      <?php 
	  if (!isset($_SESSION['user'])) {
	     ?>  
		 <div id="search" class="boxed">
            <h2 class="title">Autentificare</h2>
            <div class="content">
               <form id="searchform" method="post" action="autentificare.php">
                <ul>
                   <li> Userul </td> <td> <input type="text" name="user"> </li>
                   <li> Parola </td> <td> <input type="password" name="parola"> </li>
                   <li> Logare </td> <td> <input type="submit" value="Logare"> </li>
                </ul>   
                </form>
             </div>       
         </div>
         <?php 
		 } else { 
		    ?>
		    <h2 class="title"> <font color="#00FFFF"> <a href="delogare.php"> </font> Log out </a> </h2> 
			<?php 
	     } ?>  
		 <div id="news" class="boxed">
            <h2 class="title">Nu esti inca membru?</h2>
            <div class="content">
               <ul>
                  <li class="first">
                  <h3>Inregistreaza-te</h3>
                  <p><a href="register.php">Click pentru a merge la pagina de inregistrare &hellip;</a></p>
                  </li>
               </ul>
            </div>
          </div>
	      <div id="extra" class="boxed">
             <h2 class="title">Spune nu rasismului</h2>
		        <p> <h3 id="albastru"> Cumpara o echipa si daca are negrii! </h3> </p>
             <div class="content">
		         <img src="images/racism.jpg" width="240" height="160">
		     </div>
		  </div>	
   </div>	
</div>	 
<?php
require_once('footer.php');
?>   
