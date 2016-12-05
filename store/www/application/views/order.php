<h1 style="text-align:center; font-size:26px; margin:20px 0">Оформление заказа</h1>

<?if($error){ echo $error;}?><br/>
<?
//echo $dislpay_form;
if($dislpay_form){?>
<form action="" method="post" style="margin-left:41%; font-size:16px; opacity: 0.7; font-family:HelveticaLight">
<table class="table_order_form"> 
<tr bgcolor="#CEE5D0"><td>Ф.И.О.</td><td><input type="text" name="fio" value="<?=$_REQUEST['fio']?>"/></td></tr>
<tr bgcolor="white"><td>E-mail<span style="color: red;">*</span></td><td><input type="text" name="email" value="<?=$_REQUEST['email']?>"/></td></tr>
<tr bgcolor="#CEE5D0"><td>Телефон</td><td><input type="text" name="phone" value="<?=$_REQUEST['phone']?>"/></td></tr>
<tr bgcolor="white"><td>Адрес</td><td><textarea name="adres"><?=$_REQUEST['adres']?></textarea></td></tr>
</table>
<br/>
<span style="margin-left:3.45em"><input type="submit" name="to_order" value="Оформить заказ" style="margin-bottom:20px; 
	background: #CEE5D0; color: black; border: 0px; font-size: 10pt; height:30px; width:140px; font-family:HelveticaRegular"></span>
</form>
<?}
else{ echo $message; };
?>
