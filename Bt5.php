<?php
  echo "<br>";
    function book(){
        $b = 27;
        $m = $b/3;
        for($n=0; $n<27; $n++){
            $b = $b - $n;
            $m = $m + $n;
            if($b == (2*$m)) {
                echo "So sach phai chuyen la: " . ($n + 1);
            }
        }
    }
    echo book();
?>
