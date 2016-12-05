<!--  <a href="/catalog"><<< Назад</a>  -->
<h1 style="text-align:center; margin:20px 0"><?=$product['name']?></h1>
<div class="card_product" style=" margin:40px 0 50px">
				<div class="product_image" style="text-align:center; margin:10px 0;">
					<image src="/images/<?=$product['id']?>.jpg " />
				</div>
				<div class="product_desc" style="text-align:justify; line-height: 1.5; margin:10px 15%; font-size:15pt; font-family:HelveticaRegular">
					<?=$product['desc']?>			
				</div>
                <br/>
				<div class="price" style="text-align:center; font-size:18pt; font-weight:bold; font-family:HelveticaRegular">
					<?=$product['price']?> грн.					
				</div>
				 <div class="product_buy" style="text-align:right; margin:20px 10%; font-size:20pt; font-weight:bold; font-family:HelveticaRegular">
					<a href="/catalog?in-cart-product-id=<?=$product["id"]?>">Купить</a>  
				</div> 
</div>