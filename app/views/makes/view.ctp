<div class="makes view">
<h2><?php  __('Make');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $make['Make']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $make['Make']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Make', true), array('action' => 'edit', $make['Make']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Make', true), array('action' => 'delete', $make['Make']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $make['Make']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Makes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Make', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
