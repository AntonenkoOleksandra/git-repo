<?php
//класс меню, возвращает html код для меню. 
//Экземпляр класса может быть вызван лишь один раз.
//Реализован патерн Singleton
  class Lib_Menu
  {
	public $MenuItem = array("Каталог"=>"/catalog", "Обратная связь"=>"/feedback", "Вход"=>"/enter");  
   
	protected static $instance; //(экземпляр объекта) Защищаем от создания через new Singleton
	private function __construct() {}	
	public static function getInstance() {//Возвращает единственный экземпляр класса
		if (!is_object(self::$instance)) self::$instance = new self;
		return self::$instance;
    }
	 
	public function  getMenu()
	 {	
	   $print="<ul>";	 
       foreach($this->MenuItem as $name=>$item ){
	    if ($name=="Вход" && $_SESSION["User"]!=""){
				$print.='<li><a href="/enter">'.$_SESSION["User"].'</a> [ <a href="/enter?out=1"><span style="font-size:10px">выйти</span></a> ]</li>';
			}			
		else $print.='<li><a href="'.$item.'">'.$name.'</a></li>';
	   }
	   $print.="</ul>";	
	   return  $print;		
	   $print="<ul>"; 
		foreach($this->MenuItem as $name=>$item ){
		if(!is_array($item)){
		$print.='<li><a href="'.$item.'" rel="nofollow">'.$name.'</a></li>';
		}
		else{
		if(isset($item)){
		$print.='<ul>';
			foreach($item as $sub_item ){
			$print.='<li><a href="'.$sub_item.'" rel="nofollow">'.$sub_item.'</a></li>';
			}
		$print.='</ul>';
		}
		}
		}
		$print.='</ul>';

		return $print;  
	 }
 }
?>