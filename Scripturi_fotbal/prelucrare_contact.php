<?php
//preia informatiile user
$username=$_POST['username'];
$subiect=$_POST['subiect'];
$email=$_POST['email'];
$datepicker=$_POST['datepicker'];
$comentariu=$_POST['comentariu'];
//trimite mail
$to      ='vali_tm2001@yahoo.com';
$subject = $subiect;
$message = $comentariu;
$headers = "From:$email" . '\r\n' .
    "Reply-To:$email" . "\r\n";
mail($to, $subject, $message, $headers);

