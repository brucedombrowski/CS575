<div class="transcriptions index">
	<h2><?php echo __('Transcriptions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('transcription_id'); ?></th>
			<th><?php echo $this->Paginator->sort('dictation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('dictation_assignment_id'); ?></th>
			<th><?php echo $this->Paginator->sort('qa_assignment_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('location'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($transcriptions as $transcription): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($transcription['Transcription']['name'], array('controller' => 'transcriptions', 'action' => 'view', $transcription['Transcription']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($transcription['Dictation']['name'], array('controller' => 'dictations', 'action' => 'view', $transcription['Dictation']['dictation_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($transcription['DictationAssignment'][''], array('controller' => 'dictation_assignments', 'action' => 'view', $transcription['DictationAssignment']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($transcription['QaAssignment'][''], array('controller' => 'qa_assignments', 'action' => 'view', $transcription['QaAssignment']['id'])); ?>
		</td>
		<td><?php echo h($transcription['Transcription']['name']); ?>&nbsp;</td>
		<td><?php echo h($transcription['Transcription']['location']); ?>&nbsp;</td>
		<td><?php echo h($transcription['Transcription']['created']); ?>&nbsp;</td>
		<td><?php echo h($transcription['Transcription']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $transcription['Transcription']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $transcription['Transcription']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $transcription['Transcription']['id']), null, __('Are you sure you want to delete # %s?', $transcription['Transcription']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Transcription'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Transcriptions'), array('controller' => 'transcriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transcription'), array('controller' => 'transcriptions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dictations'), array('controller' => 'dictations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dictation'), array('controller' => 'dictations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dictation Assignments'), array('controller' => 'dictation_assignments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dictation Assignment'), array('controller' => 'dictation_assignments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Qa Assignments'), array('controller' => 'qa_assignments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qa Assignment'), array('controller' => 'qa_assignments', 'action' => 'add')); ?> </li>
	</ul>
</div>