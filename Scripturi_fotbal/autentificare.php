<?php
require_once("functii.php");
//preia informatiile legate de user si parola de la formularul HTML
$username=filtrare($_POST['user']);
$parola=filtrare($_POST['parola']);
session_start();
$_SESSION['test2']=$parola;
echo "<br />";
try {
   if (!isset($_POST['user']))   {
      throw new Exception('Nu ai completat userul');
   }
   if  (!isset($_POST['parola'])) {
      throw new Exception('Nu ai completat parola');
   }
   
   //daca userul si parola corespund cu cele din BD,se realizeaza autentificarea
   //echo $parola;
   $query="SELECT * FROM username WHERE username='$username' AND password='$parola';";
   $results=conectare_DB($query);
   if(mysql_num_rows($results) == 0) {
      throw new Exception ('Nu s-a putut realiza autentificarea');
   }  
   $_SESSION['user']=$username;
   
   ?> 
   <div id="sidebar">
      <div id="search" class="boxed">
         <h3 class="title">  Autentificare reusita   </h3> 
         <div class="content">
            <p> Esti autentificat ca <?php echo $_SESSION['user'];?> </p>
            <?php vezi_meniu(); ?>
         </div>
      </div>
   </div>       
<?php
}    
catch (Exception $e) {
   echo $e->getMessage();
}
?>                        