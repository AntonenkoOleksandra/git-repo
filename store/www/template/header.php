<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/template/style.css" type="text/css" />
</head>
<body>
			
	<header>
        <div class="wrap">
            <div class="row">
            <a href="/"><img src="/images/logo0-0.png" alt="logo" class="logoHeader"><span class="logoHeaderText">Analog photo</span></a>
        	<div class="menu">
				<?=$menu?>
			</div>
            <a href="/cart"><img src="/images/basket.png" alt="basket" class="basketHeader"></a>
			<div class="smalcart">
				<strong>Товаров в корзине:</strong>	<?=$smal_cart['cart_count']?> шт.<br><strong>На сумму:</strong>	<?=$smal_cart['cart_price']?> грн <br>
			</div>
            </div><!--end of row--> 
        </div><!--end of wrap1--> 
    
    	<div class="pic">
            <div class="wrap">
                <div class="headerLogo">
                    <h2>ЛОВИ МОМЕНТ</h2>
                    <p>Будь готов снимать всегда и везде. Для тебя нет ограничений. Отключи разум. Пусть на фотографиях будут только чувства. Остановись, досчитай до 5 и снимай.</p>
                </div><!--end of headerLogo-->
            </div><!--end of wrap2-->
        </div><!--end of pic-->
    </header>
	
</body>
</html>	
	