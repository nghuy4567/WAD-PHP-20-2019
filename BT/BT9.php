 <?php
  echo "<br>";
  $blue = 120/5;
  $red = 120*3/10;

  echo "So bi Xanh: " .$blue ;
  echo "<br>";
  echo "So bi Do: " .$red ;
  echo "<br>";
  
  $yellow = 120 - $red - $blue;
  $white = 0;
  do {
    $yellow --;
    $white ++;
  } while ((3*$yellow) != (7*$white));
  echo "So bi vang: " .$yellow;
  echo "<br>";
  echo "So bi trang: " .$white;
  echo "<br>";

?>