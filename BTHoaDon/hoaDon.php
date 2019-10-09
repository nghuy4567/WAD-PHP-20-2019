<?php
  $tenchuho = $_POST['tenchuho'];
  $diachi = $_POST['diachi'];
  $ngaysinh = $_POST['ngaysinh'];
  $sudung;
  $thanhtien;
  $tinhthanh = $_POST['tinhthanh'];
  $gioitinh = $_POST['gender'] == "Male" ? 'Ông' : 'Bà';
  if (isset($_POST['submit'])) {
      $sudung = $_POST['chisomoi'] - $_POST['chisocu'];
    if ($sudung <= 100){
           $thanhtien= $sudung * 1500;
       } else if ($sudung > 100){
           $thanhtien = ($sudung-100)*2100 +100*1500;
       } else if ($sudung >300){
           $thanhtien = ($sudung-300)*3500 + 100*2100 + 100*1500;
       }  
       } 
?>
<div>
    <h3>PHIẾU TÍNH TIỀN ĐIỆN</h3>
    <p><?php echo $gioitinh?>  :   <?php echo $tenchuho?></p>
    <p>Sinh ngày : <?php echo $ngaysinh?></p>    
    <p>Địa chỉ : <?php echo $diachi?></p>
    <p>Tỉnh : <?php echo $tinhthanh?></p>    
    <p>Đã sử dụng <?php echo number_format($sudung, 0, ',', '.') ?> số điện</p>
    <p>Số tiền điện cần thanh toán là: <?php echo number_format($thanhtien)?> VND</p>
</div>
