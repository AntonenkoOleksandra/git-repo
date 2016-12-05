<h1 style="text-align:center; font-size:26px; margin:20px 0">Корзина</h1>

<?if($empty_cart):?>

		<form action="/cart" method="post">
			<?=$big_cart;?>
			<input type="submit" name="refresh" value="Пересчитать"  style="margin-left:36%;  margin-bottom:-30px; height:30px; width:130px; margin-top:10px; 
				background: #CEE5D0; border: 0px; font-size: 10pt; font-family:HelveticaRegular" />
		</form>	

		<form action="/order" method="post">
			<input type="submit" name="order" value="Оформить заказ" style="margin-left:55%; height:30px; width:130px; margin-bottom:10px; 
				background: #CEE5D0; border: 0px; font-size: 10pt; font-family:HelveticaRegular" />
		</form>

<?else:?>
Ваша корзина пуста!
<?endif;?>