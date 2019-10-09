<?php 
if (isset($_POST["tenchuho"]) && isset($_POST["chisocu"]) && isset($_POST["chisomoi"]) && isset($_POST["tinhthanh"])) {
	$tenchuho = $_POST["tenchuho"];
	$chisocu = $_POST["chisocu"];
	$chisomoi = $_POST["chisomoi"];
	$sudung = ($chisomoi - $chisocu);
	
	$diachi = $_POST["diachi"];
	$tinhthanh = $_POST["tinhthanh"];
	$ngaydauki = date('Y-m-d', strtotime($_POST["ngaydauki"]));
	$ngaycuoiki = date('Y-m-d', strtotime($_POST["ngaycuoiki"]));
	if ($sudung <= 100){
           $thanhtien= $sudung * 1500;
       } else if ($sudung > 100){
           $thanhtien = ($sudung-100)*2100 +100*1500;
       } else if ($sudung >300){
           $thanhtien = ($sudung-300)*3500 + 100*2100 + 100*1500;
       }
}
?>
 <form id="tienDien"  name="tienDien"  method="POST" >
 	<h1>
 			Thanh toan tien dien:
 	</h1>
 	<div>
 	<label>Chu Ho:  </label>
 			
 			<input type="text" name="tenchuho" value=<?php echo $_POST["tenchuho"];?> />
 	<div>

 	<div>
 		<label>Gioi tinh:</label>
 			
 			<input type="radio" name="radio" value="nam" class="radio" <?php if (isset($_POST['radio']) && $_POST['radio'] == 'nam'): ?>checked='checked'<?php endif; ?> /> Nam
			<input type="radio" name="radio" value="nu"  class="radio" <?php if (isset($_POST['radio']) && $_POST['radio'] ==  'nu'): ?>checked='checked'<?php endif; ?> /> Nu
 	<div>
 		<label>Dia chi: </label>
 			
 			<input type="text" name="diachi" value=<?php echo $_POST["diachi"];?> />
 	</div>
 	<div>
 		<label>Tinh thanh: <select name="tinhthanh">
 			<option value="ha noi"> Ha noi</option>
 			<option value="da nang"> Da Nang</option>
 			<option value="quang binh"> Quang Binh</option>
 		</select></label>
 			
 			
 	</div>
 	<div>
 		<label>Ngay dau ki:</label>
 			
 			<input type="date" name="ngaydauki" value=<?php echo $_POST["ngaydauki"];?>/>
 	</div>
 	<div>
 		<label>Ngay cuoi ki:</label>
 			
 			<input type="date" name="ngaycuoiki" value=<?php echo $_POST["ngaycuoiki"];?>/>
 	</div>
 	<div>
 		<label>Chi So Cu: </label>
 			
 			<input type="text" name="chisocu" value= <?php echo $_POST["chisocu"];?> />
 	</div>
 	<div>
 		<label>Chi So Moi: </label>
 			
 			<input type="text" name="chisomoi" value= <?php echo $_POST["chisomoi"];?> />
	</div>
	<div>
		<label>Thanh tien:</label>
 			 
 			<input type="text" name="thanhtien"  value= <?php echo $thanhtien;?> />
 	</div>
 	<div>
 			<input type="submit" name="submit" value="Tinh">
 	</div>
 
 </form>