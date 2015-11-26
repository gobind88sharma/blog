<div class="pages">
<h2><?php echo __('Page'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($page['Page']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Page Title'); ?></dt>
		<dd>
			<?php echo h($page['Page']['page_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Page Slug'); ?></dt>
		<dd>
			<?php echo h($page['Page']['page_slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Page Content'); ?></dt>
		<dd>
			<?php echo h($page['Page']['page_content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created On'); ?></dt>
		<dd>
			<?php echo h($page['Page']['created_on']); ?>
			&nbsp;
		</dd>
	</dl>
</div>