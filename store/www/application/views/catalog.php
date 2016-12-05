<h1 style="text-align:center; font-size:26px; margin:20px 0">Каталог</h1>
<?
//представление каталога (страница каталога)
foreach($Items as $item)
		{
			if($i%3==0):?> 
			<div style="clear:both;"></div>
			<?endif;?>
            <div class="content">
     	  <div class="wrap" style="clear:right; line-height: 1.8">
        <!--     <div class="row">
                      
            <figure> -->
			<div class="product" >
				<div class="product_image">
					<a href="/product/<?=$item["url"]?>"><image src="/uploads/<?=$item["image_url"]?>" /></a>
				</div>
				<h2 style="font-size:20px">
				<a href="/product/<?=$item["url"]?>"><?=$item["name"]?></a>
				</h2>
				<div class="product_price" style="font-size:18px; width:300px">
				<span style="margin-right:150px"><?=$item["price"]?> грн.</span><a href="/catalog?in-cart-product-id=<?=$item["id"]?>" style="margin-right:10px">Купить<!--<image src="/images/basket.png">--></a>
                
            
			
			</div>
           <!-- </figure>
                </div>-->
                </div>
                 </div>
		<?
			$i++;
		}
		
		echo $pager;
		?>

