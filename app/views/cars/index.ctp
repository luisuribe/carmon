<div class="cars index">
	<h2><?php __('Cars');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('make_id');?></th>
			<th><?php echo $this->Paginator->sort('model_id');?></th>
			<th><?php echo $this->Paginator->sort('motor_id');?></th>
			<th><?php echo $this->Paginator->sort('vim_number');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($cars as $car):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $car['Car']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($car['Make']['name'], array('controller' => 'makes', 'action' => 'view', $car['Make']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($car['Model']['name'], array('controller' => 'models', 'action' => 'view', $car['Model']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($car['Motor']['name'], array('controller' => 'motors', 'action' => 'view', $car['Motor']['id'])); ?>
		</td>
		<td><?php echo $car['Car']['vim_number']; ?>&nbsp;</td>
		<td><?php echo $car['Car']['name']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $car['Car']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $car['Car']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $car['Car']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $car['Car']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Car', true), array('action' => 'add')); ?></li>
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