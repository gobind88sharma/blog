<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min.css');
		echo $this->Html->css('font-awesome.min.css');
		echo $this->Html->css('prettyPhoto.css');
		echo $this->Html->css('price-range.css');
		echo $this->Html->css('animate.css');
		echo $this->Html->css('main.css');
		echo $this->Html->css('responsive.css');

		echo '<!--[if lt IE 9]>';
		echo $this->Html->script('html5shiv.js');
		echo $this->Html->script('respond.min.js');
		echo '<![endif]-->';
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

</head>

<body>
	<?php echo $this->Element('header'); ?>
	<?php //echo $this->Element('slider'); ?>
	<section>
		<div class="container">
			<div class="row">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->Element('Sidebar'); ?>
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>
	</section>
	<?php echo $this->Element('footer'); ?>
	<?php
		echo $this->Html->script('jquery.js');
		echo $this->Html->script('bootstrap.min.js');
		echo $this->Html->script('jquery.scrollUp.min.js');
		echo $this->Html->script('price-range.js');
		echo $this->Html->script('jquery.prettyPhoto.js');
		echo $this->Html->script('main.js');
	?>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
