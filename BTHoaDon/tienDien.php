
 <form  action="hoaDon.php"  method="POST" >
 	<h1>
 			Thanh toan tien dien:
 	</h1>
 	<div>
 		<label>Chu Ho: </label> 			
 		<input type="text" name="tenchuho" required />
 	<div>
 	<div>
            <label>Ngay Sinh: </label>
            <input type="date" name="ngaysinh" required>
    </div>	
 	<div>
 		<label>Gioi tinh: </label>			
 		<input name="gender" type="radio" value="Male"/> Nam
		<input name="gender" type="radio" value="Female"/> Nu
 	<div>
 		<label>Dia chi: </label>			
 		<input type="text" name="diachi" required />
 	</div>
 	<div>
 		<label>Tinh thanh: <select name="tinhthanh">
 			<option value="">-- Vui long chon --</option>
            <option>Quảng Bìnhh</option>
            <option>Quảng Trị</option>
            <option>Huế</option>
 		</select></label>			
 	</div>
 	<div>
 		<label>Ngay dau ki: </label>
 		<input type="date" name="ngaydauki" required/>
 	</div>
 	<div>
 		<label>Ngay cuoi ki: </label>
 		<input type="date" name="ngaycuoiki" required/>
 	</div>
 	<div>
 		<label>Chi So Cu: </label>
 		<input type="text" name="chisocu" required/>
 	</div>
 	<div>
 		<label>Chi So Moi: </label>
 		<input type="text" name="chisomoi" required />
	</div>
 	<div>
 		<input type="submit" name="submit" value="Tinh">
 	</div>
 </form>