<?php
  $n1 = 1;
  $n2 = "2";
  echo $n1+$n2;
  echo "<pre>";
  $x = getdate();
  echo '$x = getdate();';
  echo "<pre>";
  print_r($x);
  echo "</pre>";
  
  $x = date('Y-m-d H:i:s');
  echo '$x = date(\'Y-m-d H:i:s\');<br>',$x, " ";
  echo gettype($x), "<hr>";
  
  $x = gmdate('Y-m-d H:i:s');
  echo '$x = gmdate(\'Y-m-d H:i:s\');<br>',$x, " ";
  echo $x." "; 
  echo gettype($x), "<hr>";

  
  $x = strtotime(gmdate('Y-m-d H:i:s'));
  echo 'strtotime(gmdate(\'Y-m-d H:i:s\'));<br>';
  echo $x, " ";
  echo gettype($x), "<br>";
  
?>