<div class="cars form">
<?php echo $this->Form->create('Car');?>
	<fieldset>
		<legend><?php __('Add Car'); ?></legend>
	<?php
		echo $this->Form->input('make_id');
		echo $this->Form->input('model_id');
		echo $this->Form->input('motor_id');
		echo $this->Form->input('vim_number');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cars', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Makes', true), array('controller' => 'makes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Make', true), array('controller' => 'makes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Models', true), array('controller' => 'models', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Model', true), array('controller' => 'models', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Motors', true), array('controller' => 'motors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Motor', true), array('controller' => 'motors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Owners', true), array('controller' => 'owners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner', true), array('controller' => 'owners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Revisions', true), array('controller' => 'revisions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Revision', true), array('controller' => 'revisions', 'action' => 'add')); ?> </li>
	</ul>
</div>