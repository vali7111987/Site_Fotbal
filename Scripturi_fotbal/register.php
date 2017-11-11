<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> register </title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="menu">
   <p>
   <h1 align="center"> Acesta este formularul de inregistrare </h1>  
   <h2 align="center"> Aici poti sa iti creezi cont </h2>
   </p>
</div>
<div id="formular">
      <h2 id="albastru">Formular de inregistrare </h2> 
      <form method="post" action="register_prelucrare.php">
      <table width="70%"> 
      <tr>
      <td>Username </td> <td> <input type="text" name="username" size="35"> </td>
      </tr>
      <td>Parola </td> <td> <input type="password"  name="password"  size="35"> </td>
      </tr>
      <td>Repeta parola </td> <td> <input type="password"  name="rpassword" size="35"> </td>
      </tr>
      <td>Email </td> <td> <input type="text" name="email" size="35"> </td>
      </tr> <td> <input type="submit" id="trimite" value="Trimite"> </td>
      </tr> 
      </table>  
      </form>   
</div>  
   