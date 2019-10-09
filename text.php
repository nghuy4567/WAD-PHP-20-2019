<head>
<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″ />
<title>Tính Tiền Điện </title>
<style type=”text/css”>

</style>
</head>

<body>

<?php
if(isset($_POST[“tenchuho”]) && isset($_POST[“chisocu”]) && isset($_POST[“chisomoi”]))
{
$tenchuho=$_POST[“tenchuho”];
$chisocu=$_POST[“chisocu”];
$chisomoi=$_POST[“chisomoi”];
$dongia=$_POST[“dongia”];

$thanhtien=($chisomoi-$chisocu)*$dongia;
}
?>
<form id=”form1″ name=”form1″ method=”post” action=””>
<table width=”400″ border=”0″ align=”center” bordercolor=”#FFCC99″ bgcolor=”#FFCC99″>
<tr>
<td colspan=”2″ align=”center” bgcolor=”#FF6600″><h2 class=”style1″>Thanh Toán Tiền Điện </h2></td>
</tr>
<tr>
<td width=”142″><strong>Tên Chủ Hộ </strong></td>
<td width=”242″><label>
<input name=”tenchuho” type=”text” id=”tenchuho” value=”<?php echo $_POST[“tenchuho”];?>” />
</label></td>
</tr>
<tr>
<td><strong>Chỉ Số Cũ </strong></td>
<td><label>
<input name=”chiso_u” type=”text” id=”chisocu” value=”<?php echo $_POST[“chiso_u”];?>” />
(Kw)</label></td>
</tr>
<tr>
<td><strong>Chỉ Số Mới </strong></td>
<td><label>
<input name=”chisomoi” type=”text” id=”chisomoi” value=”<?php echo $_POST[“chisomoi”];?>” />
(Kw)</label></td>
</tr>
<tr>
<td><strong>Đơn Giá </strong></td>
<td><label>
<input name=”dongia” type=”text” id=”dongia” value=”<?php echo $_POST[“dongia”];?>” />
(VNĐ)</label></td>
</tr>
<tr>
<td><strong>Số Tiền Thanh Toán </strong></td>
<td><label>
<input name=”thanhtien” type=”text” id=”thanhtien” style=”background-color:#FF99FF” value=”<?php echo $thanhtien;?>” readonly=”true” />
(VNĐ) </label></td>
</tr>
<tr>
<td colspan=”2″ align=”center” bgcolor=”#FFCC99″><label>
<input type=”submit” name=”Submit” value=”Tinh” />
</label></td>
</tr>
</table>
</form>

</body>