<?
	$model=new Application_Models_Order;	
	$order=array();
	//if(isset($lower_bound)&&isset($step)){
		 $order=$model->getList(/*$lower_bound,$step*/);
	//}
	//else $order=$model->getList(0,5);
?>	
<h1>Каталог заказов</h1>


	<table class="catalog_table"><tr><th>Дата</th><th>Ф.И.О.</th><th>E-mail</th><th>Телефон</th><th>Адрес</th><th>Сумма</th><!--<th>order_content</th><th></th>--></tr>	 
	<?	
	foreach($order as $array_data){
		if(key($array_data)=="id"){?>
			<tr id="<?=$array_data['id']?>">
			<td class="date"><?=$array_data['date']?></td>
            <td class="fio"><?=$array_data['name']?></td>
			<td class="email"><?=$array_data['email']?></td>
			<td class="phone"><?=$array_data['phone']?></td>
			<td class="adres"><?=$array_data['adres']?></td>
            <td class="summ"><?=$array_data['summ']?></td>
            
			
			</tr>
		<?}
	
		
	}
	?>

	
	</table>
	
	
	
	