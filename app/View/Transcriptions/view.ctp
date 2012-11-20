<div class="transcriptions view">
<h2><?php  echo __('Transcription'); ?></h2>
	<dl>
		<dt><?php echo __('Transcription'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transcription['Transcription']['name'], array('controller' => 'transcriptions', 'action' => 'view', $transcription['Transcription']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dictation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transcription['Dictation']['name'], array('controller' => 'dictations', 'action' => 'view', $transcription['Dictation']['dictation_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dictation Assignment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transcription['DictationAssignment'][''], array('controller' => 'dictation_assignments', 'action' => 'view', $transcription['DictationAssignment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qa Assignment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transcription['QaAssignment'][''], array('controller' => 'qa_assignments', 'action' => 'view', $transcription['QaAssignment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($transcription['Transcription']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($transcription['Transcription']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($transcription['Transcription']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($transcription['Transcription']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Transcription'), array('action' => 'edit', $transcription['Transcription']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Transcription'), array('action' => 'delete', $transcription['Transcription']['id']), null, __('Are you sure you want to delete # %s?', $transcription['Transcription']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Transcriptions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transcription'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Qa Assignments'); ?></h3>
	<?php if (!empty($transcription['QaAssignment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Qa Assignment Id'); ?></th>
		<th><?php echo __('Transcription Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($transcription['QaAssignment'] as $qaAssignment): ?>
		<tr>
			<td><?php echo $qaAssignment['qa_assignment_id']; ?></td>
			<td><?php echo $qaAssignment['transcription_id']; ?></td>
			<td><?php echo $qaAssignment['user_id']; ?></td>
			<td><?php echo $qaAssignment['created']; ?></td>
			<td><?php echo $qaAssignment['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'qa_assignments', 'action' => 'view', $qaAssignment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'qa_assignments', 'action' => 'edit', $qaAssignment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'qa_assignments', 'action' => 'delete', $qaAssignment['id']), null, __('Are you sure you want to delete # %s?', $qaAssignment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Qa Assignment'), array('controller' => 'qa_assignments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Transcriptions'); ?></h3>
	<?php if (!empty($transcription['Transcription'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Transcription Id'); ?></th>
		<th><?php echo __('Dictation Id'); ?></th>
		<th><?php echo __('Dictation Assignment Id'); ?></th>
		<th><?php echo __('Qa Assignment Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($transcription['Transcription'] as $transcription): ?>
		<tr>
			<td><?php echo $transcription['transcription_id']; ?></td>
			<td><?php echo $transcription['dictation_id']; ?></td>
			<td><?php echo $transcription['dictation_assignment_id']; ?></td>
			<td><?php echo $transcription['qa_assignment_id']; ?></td>
			<td><?php echo $transcription['name']; ?></td>
			<td><?php echo $transcription['location']; ?></td>
			<td><?php echo $transcription['created']; ?></td>
			<td><?php echo $transcription['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'transcriptions', 'action' => 'view', $transcription['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'transcriptions', 'action' => 'edit', $transcription['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'transcriptions', 'action' => 'delete', $transcription['id']), null, __('Are you sure you want to delete # %s?', $transcription['id'])); ?>
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
