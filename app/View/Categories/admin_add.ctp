<div class="categories">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('Add Category'); ?></legend>
	<?php
		echo $this->Form->input('category_name');
		echo $this->Form->input('display_order');
		echo $this->Form->input('status');
		//echo $this->Form->input('created_on');
		//echo $this->Form->input('Product');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>