<div class="dictations index">
	<h2><?php echo __('Dictations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('dictation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('client_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('location'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($dictations as $dictation): ?>
	<tr>
		<td><?php echo h($dictation['Dictation']['dictation_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dictation['Client']['name'], array('controller' => 'clients', 'action' => 'view', $dictation['Client']['client_id'])); ?>
		</td>
		<td><?php echo h($dictation['Dictation']['name']); ?>&nbsp;</td>
		<td><?php echo h($dictation['Dictation']['location']); ?>&nbsp;</td>
		<td><?php echo h($dictation['Dictation']['created']); ?>&nbsp;</td>
		<td><?php echo h($dictation['Dictation']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dictation['Dictation']['dictation_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dictation['Dictation']['dictation_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dictation['Dictation']['dictation_id']), null, __('Are you sure you want to delete # %s?', $dictation['Dictation']['dictation_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Dictation'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dictation Assignments'), array('controller' => 'dictation_assignments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dictation Assignment'), array('controller' => 'dictation_assignments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transcriptions'), array('controller' => 'transcriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transcription'), array('controller' => 'transcriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>
