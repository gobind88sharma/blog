<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('admin/style.css');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

</head>

<body>
	<div id="container">
	
	<?php echo $this->Element('admin/Header'); ?>
	<div id="content">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->Element('admin/Sidebar'); ?>
		<?php echo $this->fetch('content'); ?>
	</div>
	<?php echo $this->Element('admin/footer'); ?>

	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
