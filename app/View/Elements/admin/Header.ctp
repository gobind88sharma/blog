<div id="header">
	<div class="logo">
		<h1><?php echo $this->Html->link('Administrator', array('controller' => 'pages', 'action' => 'index')); ?></h1>
	</div>
</div>
<nav>
	<ul>
		<li><?php echo $this->Html->link('Pages', array('controller' => 'pages', 'action' => 'index')); ?>
			<ul>
				<li><?php echo $this->Html->link('Add Page', array('controller' => 'pages', 'action' => 'add')); ?></li>
			</ul>
		</li>
		<li><?php echo $this->Html->link('Categories', array('controller' => 'categories', 'action' => 'index')); ?>
			<ul>
				<li><?php echo $this->Html->link('Add Category', array('controller' => 'categories', 'action' => 'add')); ?></li>
			</ul>
		</li>
		<li><?php echo $this->Html->link('Products', array('controller' => 'products', 'action' => 'index')); ?>
			<ul>
				<li><?php echo $this->Html->link('Add Product', array('controller' => 'products', 'action' => 'add')); ?></li>
				<li><?php echo $this->Html->link('Product Attributes', array('controller' => 'products', 'action' => 'add')); ?></li>
				<li><?php echo $this->Html->link('Product Options', array('controller' => 'products', 'action' => 'add')); ?></li>
			</ul>
		</li>
		<li><?php echo $this->Html->link('Users', array('controller' => 'users', 'action' => 'index')); ?>
			<ul>
				<li><?php echo $this->Html->link('Add User', array('controller' => 'users', 'action' => 'add')); ?></li>
			</ul>
		</li>
		<li>
			<?php echo $this->Html->link( 'Logout', array('controller' => 'users', 'action' => 'logout') );  ?>
		</li>
	</ul>
</nav>