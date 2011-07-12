<div class="revisions form">
<?php echo $this->Form->create('Revision');?>
	<fieldset>
		<legend><?php __('Add Revision'); ?></legend>
	<?php
		echo $this->Form->input('car_id');
		echo $this->Form->input('revision_date');
		echo $this->Form->input('description');
		echo $this->Form->input('next_revision');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Revisions', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cars', true), array('controller' => 'cars', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Car', true), array('controller' => 'cars', 'action' => 'add')); ?> </li>
	</ul>
</div>