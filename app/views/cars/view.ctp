<div class="cars view">
<h2><?php  __('Car');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $car['Car']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Make'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($car['Make']['name'], array('controller' => 'makes', 'action' => 'view', $car['Make']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Model'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($car['Model']['name'], array('controller' => 'models', 'action' => 'view', $car['Model']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Motor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($car['Motor']['name'], array('controller' => 'motors', 'action' => 'view', $car['Motor']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vim Number'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $car['Car']['vim_number']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $car['Car']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Car', true), array('action' => 'edit', $car['Car']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Car', true), array('action' => 'delete', $car['Car']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $car['Car']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cars', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Car', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Owners');?></h3>
	<?php if (!empty($car['Owner'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Car Id'); ?></th>
		<th><?php __('Firstname'); ?></th>
		<th><?php __('Lastname'); ?></th>
		<th><?php __('Phone'); ?></th>
		<th><?php __('Cellphone'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($car['Owner'] as $owner):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $owner['id'];?></td>
			<td><?php echo $owner['car_id'];?></td>
			<td><?php echo $owner['firstname'];?></td>
			<td><?php echo $owner['lastname'];?></td>
			<td><?php echo $owner['phone'];?></td>
			<td><?php echo $owner['cellphone'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'owners', 'action' => 'view', $owner['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'owners', 'action' => 'edit', $owner['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'owners', 'action' => 'delete', $owner['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $owner['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Owner', true), array('controller' => 'owners', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Revisions');?></h3>
	<?php if (!empty($car['Revision'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Car Id'); ?></th>
		<th><?php __('Revision Date'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Next Revision'); ?></th>
		<th><?php __('Price'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($car['Revision'] as $revision):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $revision['id'];?></td>
			<td><?php echo $revision['car_id'];?></td>
			<td><?php echo $revision['revision_date'];?></td>
			<td><?php echo $revision['description'];?></td>
			<td><?php echo $revision['next_revision'];?></td>
			<td><?php echo $revision['price'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'revisions', 'action' => 'view', $revision['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'revisions', 'action' => 'edit', $revision['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'revisions', 'action' => 'delete', $revision['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $revision['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Revision', true), array('controller' => 'revisions', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
