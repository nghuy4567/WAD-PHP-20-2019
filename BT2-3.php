<?php
 
	echo "<br>";

	
  $thu=2;//gán giá trị cho biến.
  if($thu =2){
    echo "Thu 2";
  }else if ($thu = 3){
    echo "Thu 3";
  }else if ($thu = 4){
    echo "Thu 4";
  }else if ($thu = 5){
    echo "Thu 5";
  }else if ($thu = 6){
    echo "Thu 6";
  }else if ($thu = 7){
    echo "Thu 7";
  }else{
    echo "Chu Nhat";
  }
 ?>

<?php
echo "<br>";
$so=7;
switch($so){
  case 1:
    echo "hôm nay là chủ nhật";
  break;
  case 2:
    echo "hôm nay là thứ 2";
  break;
  case 3:
    echo "hôm nay là thứ 3";
  break;
  case 4:
    echo "hôm nay là thứ tư";
  break;
  case 5:
    echo "hôm nay là thứ 5";
  break;
  case 6:
    echo "hôm nay là thứ 6";
  break;
  case 7:
    echo "hôm nay là thứ 7";
  break;
  default:
    echo"Không có ngày này";
  break;
}
?>