<div class="owners view">
<h2><?php  __('Owner');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $owner['Owner']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Car'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($owner['Car']['name'], array('controller' => 'cars', 'action' => 'view', $owner['Car']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Firstname'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $owner['Owner']['firstname']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lastname'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $owner['Owner']['lastname']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Phone'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $owner['Owner']['phone']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cellphone'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $owner['Owner']['cellphone']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Owner', true), array('action' => 'edit', $owner['Owner']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Owner', true), array('action' => 'delete', $owner['Owner']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $owner['Owner']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Owners', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cars', true), array('controller' => 'cars', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Car', true), array('controller' => 'cars', 'action' => 'add')); ?> </li>
	</ul>
</div>
