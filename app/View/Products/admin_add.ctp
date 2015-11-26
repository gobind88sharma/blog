<div class="products">
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('Add Product'); ?></legend>
	<?php
		echo $this->Form->input('Category');
		echo $this->Form->input('product_name');
		echo $this->Form->input('product_price');
		echo $this->Form->input('product_description');
		echo $this->Form->input('display_order');
		echo $this->Form->input('status');
		//echo $this->Form->input('created_on');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>