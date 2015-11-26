<div class="categories">
<h2><?php echo __('Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category Name'); ?></dt>
		<dd>
			<?php echo h($category['Category']['category_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Order'); ?></dt>
		<dd>
			<?php echo h($category['Category']['display_order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($category['Category']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>