<?php
//Модель вывода каталога
 class Application_Models_Product extends Lib_DateBase
  {	  
  		 function addProduct($array)
	  { 	
		$array['url']=	translitIt($array['name']);
		if(strlen($array['url'])>60)$array['url']=	substr($array['url'], 0, 60);
		//для чистоты работы, тут лучше проверить на уже существующие url,
			if(parent::build_query("INSERT INTO product SET ",$array)){
			    $id = parent::insert_id();
				return $id;
			}
		
		return	false;
	  }
	  
	
	  function updateProduct($array,$id)
	  { 

		if(parent::query("UPDATE product SET ".parent::build_part_query($array)." WHERE id ='%d'",$id)){			   
				return true;
			}
		return	false;
	  }
	  
	   function deleteProduct($id)
	  { 
		if(parent::query("DELETE FROM product WHERE id ='%d'",$id)){
		return true;
		}
		return	false;
	  }
  
	  function getProduct($id)
	  { 
	  	$result=parent::query("SELECT * FROM product WHERE id='%d'",$id);
		 if($product = mysql_fetch_array($result)) 
		 return $product;
	  
		 /*$sql = "SELECT * FROM product WHERE id='$id'";
		 $result = mysql_query($sql)  or die(mysql_error());
	
		 if($row = mysql_fetch_object($result))
		 {		 
		
			$product=array(
				"id"=>$row->id,
				"name"=>$row->name,
				"desc"=>$row->desc,
				"price"=>$row->price
			);
			
		  }
		  return $product; */
	  }
	  
	  function getProductPrice($id)
	  { 
	  		$sql = sprintf("SELECT price FROM product WHERE id='%d'", mysql_real_escape_string($id));
			
		 $result = mysql_query($sql)  or die(mysql_error());
	
		 if($row = mysql_fetch_object($result))
		 {	 		
			 return $row->price; 
		 }
		  return false; 
	  }
	  
		/* $sql = "SELECT price FROM product WHERE id='$id'";
		 $result = mysql_query($sql)  or die(mysql_error());
	
		 if($row = mysql_fetch_object($result))
		 {	 
		
			 return $row->price; 
		 }
		  return false; 
	  }*/
  }