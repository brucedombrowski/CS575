<div class="dictationAssignments index">
	<h2><?php echo __('Dictation Assignments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('dictation_assignment_id'); ?></th>
			<th><?php echo $this->Paginator->sort('dictation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('account_manager_id'); ?></th>
			<th><?php echo $this->Paginator->sort('transcriptionist_id'); ?></th>
			<th><?php echo $this->Paginator->sort('valid'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($dictationAssignments as $dictationAssignment): ?>
	<tr>
		<td><?php echo h($dictationAssignment['DictationAssignment']['dictation_assignment_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dictationAssignment['Dictation']['name'], array('controller' => 'dictations', 'action' => 'view', $dictationAssignment['Dictation']['dictation_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($dictationAssignment['AccountManager']['name'], array('controller' => 'users', 'action' => 'view', $dictationAssignment['AccountManager']['user_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($dictationAssignment['Transcriptionist']['name'], array('controller' => 'users', 'action' => 'view', $dictationAssignment['Transcriptionist']['user_id'])); ?>
		</td>
		<td><?php echo h($dictationAssignment['DictationAssignment']['valid']); ?>&nbsp;</td>
		<td><?php echo h($dictationAssignment['DictationAssignment']['created']); ?>&nbsp;</td>
		<td><?php echo h($dictationAssignment['DictationAssignment']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dictationAssignment['DictationAssignment']['dictation_assignment_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dictationAssignment['DictationAssignment']['dictation_assignment_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dictationAssignment['DictationAssignment']['dictation_assignment_id']), null, __('Are you sure you want to delete # %s?', $dictationAssignment['DictationAssignment']['dictation_assignment_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Dictation Assignment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Dictations'), array('controller' => 'dictations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dictation'), array('controller' => 'dictations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Manager'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
