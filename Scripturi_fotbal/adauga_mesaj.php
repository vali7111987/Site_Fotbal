<?php
require_once("functii.php");
require_once('menu.php');
//formular care iti permite trimiterea mesajelor catre un alt utilizator
?>
<div id="formular">
   <h2 id="albastru"> Formular pentru trimiterea mesajelor </h2>
   <?php verific_sesiune(); $username=$_SESSION['user']; ?>
   <form method="post" action="prelucreaza_mesaj.php">
      <h3> Alege userul  catre care vei sa trimiti mesajul:
      <select name="destinatar"> </h3> <?php selectare_user($results); ?> </select>
      Subiectul: <input type="text" name="subiect"> <br />
      Mesajul: <br /> <textarea rows="10" cols="50" name="mesaj"> </textarea>  
	  <br />
     <input type="submit" value="Trimite mesaj">
   </form>
</div>

