<div class="dictations view">
<h2><?php  echo __('Dictation'); ?></h2>
	<dl>
		<dt><?php echo __('Dictation Id'); ?></dt>
		<dd>
			<?php echo h($dictation['Dictation']['dictation_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dictation['Client']['name'], array('controller' => 'clients', 'action' => 'view', $dictation['Client']['client_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($dictation['Dictation']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($dictation['Dictation']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($dictation['Dictation']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($dictation['Dictation']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dictation'), array('action' => 'edit', $dictation['Dictation']['dictation_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dictation'), array('action' => 'delete', $dictation['Dictation']['dictation_id']), null, __('Are you sure you want to delete # %s?', $dictation['Dictation']['dictation_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dictations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dictation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dictation Assignments'), array('controller' => 'dictation_assignments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dictation Assignment'), array('controller' => 'dictation_assignments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transcriptions'), array('controller' => 'transcriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transcription'), array('controller' => 'transcriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Dictation Assignments'); ?></h3>
	<?php if (!empty($dictation['DictationAssignment'])): debug($dictation['DictationAssignment']);?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Dictation Assignment Id'); ?></th>
		<th><?php echo __('Dictation Id'); ?></th>
		<th><?php echo __('Account Manager'); ?></th>
		<th><?php echo __('Transcriptionist'); ?></th>
		<th><?php echo __('Valid'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($dictation['DictationAssignment'] as $dictationAssignment): ?>
		<tr>
			<td><?php echo $dictationAssignment['dictation_assignment_id']; ?></td>
			<td><?php echo $dictationAssignment['dictation_id']; ?></td>
			<td><?php echo $this->Html->link($dictationAssignment['AccountManager']['name'], array('controller' => 'users', 'action' => 'view', $dictationAssignment['AccountManager']['user_id'])); ?></td>
			<td><?php echo $this->Html->link($dictationAssignment['Transcriptionist']['name'], array('controller' => 'users', 'action' => 'view', $dictationAssignment['Transcriptionist']['user_id'])); ?></td>
			<td><?php echo $dictationAssignment['valid']; ?></td>
			<td><?php echo $dictationAssignment['created']; ?></td>
			<td><?php echo $dictationAssignment['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dictation_assignments', 'action' => 'view', $dictationAssignment['dictation_assignment_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dictation_assignments', 'action' => 'edit', $dictationAssignment['dictation_assignment_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dictation_assignments', 'action' => 'delete', $dictationAssignment['dictation_assignment_id']), null, __('Are you sure you want to delete # %s?', $dictationAssignment['dictation_assignment_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dictation Assignment'), array('controller' => 'dictation_assignments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Transcriptions'); ?></h3>
	<?php if (!empty($dictation['Transcription'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Transcription Id'); ?></th>
		<th><?php echo __('Dictation Id'); ?></th>
		<th><?php echo __('Dictation Assignment Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($dictation['Transcription'] as $transcription): ?>
		<tr>
			<td><?php echo $transcription['transcription_id']; ?></td>
			<td><?php echo $transcription['dictation_id']; ?></td>
			<td><?php echo $transcription['dictation_assignment_id']; ?></td>
			<td><?php echo $transcription['name']; ?></td>
			<td><?php echo $transcription['location']; ?></td>
			<td><?php echo $transcription['created']; ?></td>
			<td><?php echo $transcription['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'transcriptions', 'action' => 'view', $transcription['transcription_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'transcriptions', 'action' => 'edit', $transcription['transcription_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'transcriptions', 'action' => 'delete', $transcription['transcription_id']), null, __('Are you sure you want to delete # %s?', $transcription['transcription_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Transcription'), array('controller' => 'transcriptions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
