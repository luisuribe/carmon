<div class="owners form">
<?php echo $this->Form->create('Owner');?>
	<fieldset>
		<legend><?php __('Edit Owner'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('car_id');
		echo $this->Form->input('firstname');
		echo $this->Form->input('lastname');
		echo $this->Form->input('phone');
		echo $this->Form->input('cellphone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Owner.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Owner.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Owners', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cars', true), array('controller' => 'cars', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Car', true), array('controller' => 'cars', 'action' => 'add')); ?> </li>
	</ul>
</div>