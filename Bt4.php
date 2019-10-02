 	<?php
  echo "<br>";
  function so(){
    for ($n = 0; $n <= 100 ; $n++) { 
      if ($n %6 == 0) {
        echo $n. "Cac so chia het cho 6:" ;
      } elseif ($n %3 == 0) {
        echo $n. "Cac so chia het cho 3:";
      } elseif ($n %2 == 0) {
        echo $n. "Cac so chia het cho 2:";
      }else
        echo $n. "Cac so khong chia het cho 2, 3, 6";   
        echo "<br>";     
    }
  }
  so();
?>