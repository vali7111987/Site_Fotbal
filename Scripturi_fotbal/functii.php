<?php
//conectare si selectarea BD
function conectare_DB($query) {
   $link=mysql_connect('localhost','tomi','portwien7');
   if (!$link) {
      throw new Exception ("Nu ne-am putut conecta la baza de date");
   }
   mysql_selectdb("fotbal");
   $results=mysql_query($query);
   if (!$results) {
      throw new Exception ('Nu s-a putut interoga baza de date');
   }
   return $results;
}

//verifica daca este logat userul si il afiseaza
function verific_sesiune() {
   session_start();
   if (isset($_SESSION['user'])) {
   ?> <h2 id="albastru"> Esti logat ca: <?php echo $_SESSION['user']; ?> </h2>
   <?php } else { ?>
   <h2> Nu esti logat </h2>
  <?php 
  }
}  

//filtrare date de intrare 
function filtrare($input) {
   return htmlspecialchars($input);
}

//cate rezultate returneaza o interogare pe BD
function numarare($query) {
   $results=conectare_DB($query);
   $row = mysql_fetch_row($results);
   $nr = $row[0];
    return $nr;
}

//numara cate echipe are un utilizator
function nr_echipe($username) {
   $query="select count(*) from echipe where apartinator='$username';";
   $nr_echipe=numarare($query);
   return $nr_echipe;
}

//valoarea totala a echipelor unui user
function valoare_totala($username) {
$query="select sum(valoare) from echipe where apartinator='$username';";   
   $val_totala=numarare($query);
   return $val_totala;
}

//banii din contul unui user
function bani_ramasi($username) {
   $query="select money from username where username='$username';";
   $money=numarare($query);
   return $money;
} 

function afisare_mesaje($query) {
   $results=conectare_DB($query);
   $i=1;
   while ($rows=mysql_fetch_array($results)) {
      ?>           
      <h3> <font color="#00FF00"> Mesaj numarul <?php echo $i++;?> </font>   </h3>
      <h3> <font color="#00FFFF"> Expeditor:  </font> <?php echo $rows['expeditor']; ?> </h3>  
      <h3> <font color="#00FFFF"> Destinatar: </font> <?php echo $rows['destinatar']; ?> </h3> 
      <h3> <font color="#00FFFF"> Subiect: </font> <?php echo $rows['subiect']; ?> </h3> 
      <h3> <font color="#00FFFF"> Mesaj: </font>  <?php echo $rows['mesaj']; ?>   </h3>
      <h3> <a href="stergere_mesaj.php?id=<?php echo $rows['id'];?>">  <font color="#FF00FF"> Sterge mesajul  </font> </a> </h3>
      <br />  <br />
      <hr />
      <?php
    }
}
	  
//selecteaza toti userii din BD
function selectare_user() {
   $query="select username from username;";
   $results=conectare_DB($query);
   while ($rows=mysql_fetch_array($results)) {
   ?>
      <option value="<?php echo $rows['username']; ?>" ><?php echo $rows['username'];?> </option>
   <?php   
   }           
}

//selecteaza echipe pentru un anuit user
function selectare_echipe($username) {
   $query="select nume from echipe where apartinator='$username';";
   $results=conectare_DB($query);
   while ($rows=mysql_fetch_array($results)) {
   ?> 
   <input type="checkbox" name="selectie[]" value="<?php  echo $rows['nume']; ?>"> 
   <?php  echo $rows['nume'];    
  }
}

//tranzactiile propuse pentru un anumit user
function tranzactii_primite($username) {
   $query="select *from tranzactii where destinatar='$username';";
   $results=conectare_DB($query);
   $i=1;
   while ($rows=mysql_fetch_array($results)) {
      ?>
       <h3> <font color="#00FF00"> Tranzactia numarul <?php echo $i++;?> </font>   </h3>
       <h3> <font color="#00FFFF"> Expeditor:  </font> <?php echo $rows['expeditor']; ?> </h3>  
       <h3> <font color="#00FFFF"> Destinatar: </font> <?php echo $rows['destinatar']; ?> </h3> 
       <h3> <font color="#00FFFF"> Echipe date: </font> <?php echo $rows['echipe_date']; ?> </h3> 
       <h3> <font color="#00FFFF"> Bani dati: </font> <?php echo $rows['bani_dati']; ?> </h3> 
       <h3> <font color="#00FFFF"> Echipe primite: </font> <?php echo $rows['echipe_primite']; ?> </h3>
       <h3> <font color="#00FFFF"> Bani primiti: </font> <?php echo $rows['bani_primiti']; ?> </h3> 
       <h3> Accepti tranzactia? </h3>
         <form method="post" action="acceptare.php?id=<?php echo $rows['id'];?>">
         DA<input type="radio" name="alegere" value="DA">
         NU<input type="radio" name="alegere" value="NU">
         <input type="submit" value="confirmare">
         </form>
    <?php   
   }
}

//tranzactiile pe care le-a propus un anumit user
function tranzactii_trimise($username) {
  $query="select * from tranzactii where expeditor='$username';";
   $results=conectare_DB($query);
   $i=1;
   while ($rows=mysql_fetch_array($results)) {
      ?>
       <h3> <font color="#00FF00"> Tranzactia numarul <?php echo $i++;?> </font>   </h3>
       <h3> <font color="#00FFFF"> Expeditor:  </font> <?php echo $rows['expeditor']; ?> </h3>  
       <h3> <font color="#00FFFF"> Destinatar: </font> <?php echo $rows['destinatar']; ?> </h3> 
       <h3> <font color="#00FFFF"> Echipe date: </font> <?php echo $rows['echipe_date']; ?> </h3> 
       <h3> <font color="#00FFFF"> Bani dati: </font> <?php echo $rows['bani_dati']; ?> </h3> 
       <h3> <font color="#00FFFF"> Echipe primite: </font> <?php echo $rows['echipe_primite']; ?> </h3>
       <h3> <font color="#00FFFF"> Bani primiti: </font> <?php echo $rows['bani_primiti']; ?> </h3> 
       
   <?php  
   }
} 

//banii pe care un anumit user
function selecteaza_bani($username) {
   $query="select money from username where username='$username';";
   $results=conectare_DB($query);
   while ($rows=mysql_fetch_array($results)) {
      $bani_selectati=$rows['money'];
	  return $bani_selectati;
   }	  
}

//o noua valoare pentru banii din contul unui user
function update_bani($username,$bani) {
   $query="UPDATE username SET money='$bani' WHERE username='$username';";
   $results=conectare_DB($query);
}  

//updateaza conturile a 2 useri in cazul unei tranzactii
function schimba_bani($expeditor,$destinatar,$bani_dati,$bani_primiti) {
   $money_d=selecteaza_bani($expeditor);
   $money_t=selecteaza_bani($destinatar);
   try {
      if (($money_d-$bani_dati)<0) {
         throw new Exception ('Initiatorul tranzactiei are prea putini bani');
      }
	  if (($money_d-$bani_primiti)<0) {
         throw new Exception ('Cel care accepta tranzactia are prea putini bani');
      }
	  $bani_expeditor=$money_d-$bani_dati+$bani_primiti;
	  $bani_destinatar=$money_d+$bani_dati-$bani_primiti;
	  update_bani($expeditor,$bani_expeditor);
	  update_bani($destinatar,$bani_destinatar);
   }    
   catch (Exception $e) {
      echo $e->getMessage();
   }    
} 

//schimba apartinatorul unei echipe
function actualizeaza_echipe($username,$vechipe) {
   foreach ($vechipe as $echipa) {
      $query="UPDATE echipe SET apartinator='$username' WHERE nume='$echipa';";
      $results=conectare_DB($query);
   }
} 
function vezi_meniu() {
   ?>
   <p> <a href="index.php"> Mergi la prima pagina </a> </p>
   <p> <a href="member.php">  Mergi la pagina ta </a> </p>
   <?php
} 
?>
