<?php
//prelucreaza informatiile trimise de user pentru inregistrare
require_once("functii.php");
//creeaza variabile cu nume scurte 
$username=filtrare($_POST['username']);
$password= filtrare($_POST['password']);
$rpassword=filtrare($_POST['rpassword']);
$email=filtrare($_POST['email']);
session_start();
$_SESSION['test1']=$password;
//verifica daca informatiile sunt corecte
try {
   //adresa de email nu este valida 
   if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
      throw new Exception ('That is not a valid email adress');
   }
   //parolele nu sunt identice 
   if ($password!=$rpassword) {
      throw new Exception('The passwords you entered do not match');
   }
   //verifica daca lungimea parolei este corecta 
   if (strlen($username)>16) {
      throw new Exception ('Your username must be less yhan 17 character long');
   }
   //insereaza informatiile userului in BD
   $query="INSERT INTO username  VALUES ('$username',sha1('$password'),'$email','500');";
   $results=conectare_DB($query);
   echo 'Autentificarea a reusit';
   echo "<br />"; 
  vezi_meniu(); 
   $_SESSION['user']=$username;
   echo $_SESSION['user'];
}    
   catch (Exception $e) {
      echo $e->getMessage();
   }
?>