<div class="revisions index">
	<h2><?php __('Revisions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('car_id');?></th>
			<th><?php echo $this->Paginator->sort('revision_date');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('next_revision');?></th>
			<th><?php echo $this->Paginator->sort('price');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($revisions as $revision):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $revision['Revision']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($revision['Car']['name'], array('controller' => 'cars', 'action' => 'view', $revision['Car']['id'])); ?>
		</td>
		<td><?php echo $revision['Revision']['revision_date']; ?>&nbsp;</td>
		<td><?php echo $revision['Revision']['description']; ?>&nbsp;</td>
		<td><?php echo $revision['Revision']['next_revision']; ?>&nbsp;</td>
		<td><?php echo $revision['Revision']['price']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $revision['Revision']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $revision['Revision']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $revision['Revision']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $revision['Revision']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Revision', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cars', true), array('controller' => 'cars', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Car', true), array('controller' => 'cars', 'action' => 'add')); ?> </li>
	</ul>
</div>