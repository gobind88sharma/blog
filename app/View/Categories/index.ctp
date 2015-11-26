<div class="col-sm-9 padding-right">
	<div class="features_items">
		<h2 class="title text-center">Categories</h2>
		<?php foreach( $Categories as $Category ) : ?>
			<div class="col-sm-4">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<?php echo $this->Html->image('shop/product11.jpg'); ?>
						</div>
					</div>
					<div class="choose">
						<ul class="nav nav-pills nav-justified">
							<li><?php echo $this->Html->link($Category['Category']['category_name'], 
									array('controller'=>'categories', 'action'=>'products', $Category['Category']['id']) 
								); ?></li>
						</ul>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>