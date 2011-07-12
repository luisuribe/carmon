<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
	    Carmon :: Your small app for mechanical workshops
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link(__('Carmon :: Your small app for mechanical workshops', true), '/'); ?></h1>
			<ul>
			    <li>
			        <?php echo
			            $this->Html->link(
			                __('Makes', true),
			                '/makes');
	                ?>
			    </li>
			    <li>
			        <?php echo
			            $this->Html->link(
			                __('Models', true),
			                '/cmodels');
	                ?>
			    </li>
			    <li>
			        <?php echo
			            $this->Html->link(
			                __('Motors', true),
			                '/motors');
	                ?>
			    </li>
			    <li>
			        <?php echo
			            $this->Html->link(
			                __('Cars', true),
			                '/cars');
	                ?>
			    </li>
			    <li>
			        <?php echo
			            $this->Html->link(
			                __('Owners', true),
			                '/owners');
	                ?>
			    </li>
			    <li>
			        <?php echo
			            $this->Html->link(
			                __('Revisions', true),
			                '/revisions');
	                ?>
			    </li>
			    <li>
			        <?php echo
			            $this->Html->link(
			                __('Logout', true),
			                '/users/logout');
	                ?>
			    </li>
			</ul>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
