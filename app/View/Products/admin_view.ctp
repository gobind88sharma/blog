<div class="products">
<h2><?php echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Name'); ?></dt>
		<dd>
			<?php echo h($product['Product']['product_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Price'); ?></dt>
		<dd>
			<?php echo h($product['Product']['product_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Description'); ?></dt>
		<dd>
			<?php echo h($product['Product']['product_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Order'); ?></dt>
		<dd>
			<?php echo h($product['Product']['display_order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($product['Product']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created On'); ?></dt>
		<dd>
			<?php echo h($product['Product']['created_on']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Categories'); ?></h3>
	<?php if (!empty($product['Category'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Category Name'); ?></th>
		<th><?php echo __('Display Order'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created On'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Category'] as $category): ?>
		<tr>
			<td><?php echo $category['id']; ?></td>
			<td><?php echo $category['category_name']; ?></td>
			<td><?php echo $category['display_order']; ?></td>
			<td><?php echo $category['status']; ?></td>
			<td><?php echo $category['created_on']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'categories', 'action' => 'view', $category['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'categories', 'action' => 'edit', $category['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'categories', 'action' => 'delete', $category['id']), array(), __('Are you sure you want to delete # %s?', $category['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
