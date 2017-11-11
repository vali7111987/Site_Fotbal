<?php
require_once("functii.php");
require_once('menu.php');
//formularul pentru trimiterea unor mesaje catre administrator site
?>
<head>
  <meta charset="utf-8" />
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
</head>
<div id="formular">
   <h2 id="albastru"> Formular de inregistrare </h2> 
   <form method="post" action="prelucrare_contact.php">
      <table width="80%"> 
      <tr>
         <td>Username </td> <td> <input type="text" name="username" size="35"> </td>
      </tr>
	  <tr>
         <td> Subiect </td> <td> <input type="text" name="subiect" size="35"> </td>
      </tr>
      <tr>
         <td>Email </td> <td> <input type="text" name="email" size="35"> </td>
      </tr>
      <tr>
         <td>Data </td> <td> <input type="text" id="datepicker" name="datepicker" size="35"> </td> 
      </tr>
         <td> Comentariu </td>
         <td> <textarea name="comentariu" rows="10" cols="40" > </textarea> </td>
      </tr>
      </tr> 
	     <td> <input type="submit" id="trimite" value="Trimite"> </td>
      </tr>
      </table>  
   </form>   
</div> 
<script>
  $(function() {
     $.datepicker.setDefaults( $.datepicker.regional[ "" ] );
	 $('#datepicker').datepicker({dateFormat: 'dd/mm/yy'});
    $( "#datepicker" ).datepicker({
    onSelect: function (dateText, inst) {
    $(this).parent('form').submit();
    }
    });
  });
  </script>
</body>
</html>
<?php
require_once('footer.php');
?>
