<?php

  function getUserIpAddr(){ if(!empty($_SERVER['HTTP_CLIENT_IP'])){ $ip = $_SERVER['HTTP_CLIENT_IP']; }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){ $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; }else{ $ip = $_SERVER['REMOTE_ADDR']; } return $ip; } 
  $email = $_GET['email'];
  $fl = fopen("hits.txt", "a");
  $ip = getUserIpAddr();
  fwrite($fl, $email . ":" . $ip);
  fclose($fl);
?>
