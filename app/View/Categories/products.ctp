<div class="col-sm-9 padding-right">
	<div class="features_items">
		<h2 class="title text-center"><?php echo $Category['Category']['category_name']; ?></h2>
		<?php foreach( $Category['Product'] as $Product ) : ?>
			<div class="col-sm-4">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<?php echo $this->Html->image('shop/product12.jpg', array() ); ?>
							<h2>$<?php echo $Product['product_price']; ?></h2>
							<p><?php echo $Product['product_name']; ?></p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>
						<div class="product-overlay">
							<div class="overlay-content">
								<h2>$<?php echo $Product['product_price']; ?></h2>
								<p><?php echo $Product['product_name']; ?></p>
								<p><?php echo $Product['product_description']; ?></p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
								<?php echo $this->Html->link('<i class="fa fa-eye"></i>View',
										array('controller'=>'products', 'action'=>'index', $Product['id']),
										array('class'=>'btn btn-default add-to-cart', 'escape'=>false)
									); ?>
							</div>
						</div>
					</div>
					<div class="choose">
						<ul class="nav nav-pills nav-justified">
							<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
							<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
						</ul>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>