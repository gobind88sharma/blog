<div class="pages">
<?php echo $this->Form->create('Page'); ?>
	<fieldset>
		<legend><?php echo __('Edit Page'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('page_title');
		echo $this->Form->input('page_slug');
		echo $this->Form->input('page_content');
		//echo $this->Form->input('created_on');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
