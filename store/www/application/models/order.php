<?php
//Модель оформления заказа
 class Application_Models_Order extends Lib_DateBase // наследует все методы класса для работы с бд
  {	  
		private $fio;
		private $email;
		private $phone;
		private $adres;
		
		//получает список продуктов, возвращает все данные о них. А также разбивает на страницы полученный список
	  function getList($lower_bound=0, $step=6)
	  { 
		// формирует страницу с продуктами 
		$result = parent::query("SELECT * FROM  `order` ORDER BY id LIMIT %d , %d",$lower_bound,$step);
		if(parent::num_rows($result))
		while ($row = parent::fetch_assoc($result))
		{		 
			$orderItems[]=$row;
		}
		
		// вычисляет общее количество продуктов 
		$result = parent::query("SELECT id FROM  `order` ORDER BY id ");	   
		$count = parent::num_rows($result);
	/*	// вычисляет параметры для пагинации
		
		
		$array_page=array(); 
		$k=1;
		if($step=="0")$step=1;		
		for($i=1; $i<=ceil($count/$step); $i++)
			{
				unset($num);
				for($j=0; $j<$step; $j++)
					$num[]=$k++;
				
				$array_page[$i]=$num;
			}
		

		
		foreach($array_page as $pageid=>$page){
	
			foreach($page as $num){
			
				if($num==($lower_bound+1)){
					$activ=$pageid;
				}
			}
		}	

		
		$pagination["activ_page"]=$activ;
		$k=0;
		for($s=0; $s<$count; $s+=$step){
			$class="noactiv";
			if($activ==($k+1)){$class="activ";}
			$pagination[$k]=array($s,$step,$class);
			$k++;
		}
		// дописывает  к возвращаемому массиву информацию о пагинации  		  
		$orderItems[]=array('pagination'=>$pagination);*/
		
		return $orderItems; 
	  }
		
		
		// проверка на корректность ввода данных
		function isValidData($array_data){
			//корректность емайл
			if(!preg_match("/^[A-Za-z0-9._-]+@[A-Za-z0-9_-]+.([A-Za-z0-9_-][A-Za-z0-9_]+)$/", $array_data['email'])){ 
			  $error="E-mail не существует!";	
			} 
			// заполненность адреса
			elseif(!trim($array_data['adres'])){ 
			  $error="Введите адресс!";	
			}
			//если нет ощибок, то заносим информацию в поля класса
			if($error)return $error;
			else{
				$this->fio=trim($array_data['fio']);
				$this->email=trim($array_data['email']);
				$this->phone=trim($array_data['phone']);
				$this->adres=trim($array_data['adres']);
				return false;
			}		
     
		}
		
	//добавление заявки		
	function addOrder(){
		date_default_timezone_set('UTC');
		$date = date("Y-m-d H:i:s"); //текущая дата
			
		$item_position = new Application_Models_Product();
		//добавляем в массив корзины третий параметр  цены товара, для сохранения в заказ
		// это нужно для того чтобы в последствии вывести детальную информацию о заказе. 
		//Если оставить только id то информация может оказаться не верной, так как цены меняютмя.
		foreach($_SESSION['cart'] as $product_id=>$count){
			$price=$item_position->getProductPrice($product_id);
			$product_positions[$product_id] = array(
			"price"=>$price,
			"count"=>$count,
			);
		}
		// сериализуем данные в строку для записи в бд
		$order_content=addslashes(serialize($product_positions));
		// создаем новую модель корзины чтобы узнать сумму заказа
		$cart = new Application_Models_Cart();	
		$summ = $cart->getTotalSumm();
		
		//формируем массив параметров SQL запроса
		$array=array(
			"name"=>$this->fio, 
			"email"=>$this->email,
			"phone"=>$this->phone,
			"adres"=>$this->adres,
			"date"=>$date,
			"summ"=>$summ,
			"order_content"=>$order_content
		);
		
		// отдаем на обработку  родительской функции build_query
		parent::build_query("INSERT INTO `order` SET",$array);
		$id=parent::insert_id(); //заказ номер id добавлен в базу
		
		if($id) $cart->clearCart();// если заказ успешно записан, то отчищаем корзину
		return $id; // возвращаем номер заказа
	}
	
	//вычисляет нижнюю границу для запрашиваемой страницы, и передает данные в getList
	   function getPageList($page=1,$step=5)
	  { 
		
		// вычисляет общее количество продуктов 
		$result = parent::query("SELECT id FROM  `order` ORDER BY id ");	   
		$count = parent::num_rows($result);
		// вычисляет параметры для пагинации
		$array_page=array(); 
		$k=1;
		if($step=="0")$step=1;		
		for($i=1; $i<=ceil($count/$step); $i++)
			{
				unset($num);
				for($j=0; $j<$step; $j++)
					$num[]=$k++;
				
				$array_page[$i]=$num;
			}
			


		$lower_bound=$array_page[$page][0]-1;
		if(!isset($lower_bound))$lower_bound=1;
		
		
		
		return $this->getList($lower_bound, $step);		
	  }
	
  }