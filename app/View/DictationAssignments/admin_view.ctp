<div class="dictationAssignments view">
<h2><?php  echo __('Dictation Assignment'); ?></h2>
	<dl>
		<dt><?php echo __('Dictation Assignment Id'); ?></dt>
		<dd>
			<?php echo h($dictationAssignment['DictationAssignment']['dictation_assignment_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dictation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dictationAssignment['Dictation']['name'], array('controller' => 'dictations', 'action' => 'view', $dictationAssignment['Dictation']['dictation_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account Manager Id'); ?></dt>
		<dd>
			<?php echo h($dictationAssignment['DictationAssignment']['account_manager_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Transcriptionist Id'); ?></dt>
		<dd>
			<?php echo h($dictationAssignment['DictationAssignment']['transcriptionist_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valid'); ?></dt>
		<dd>
			<?php echo h($dictationAssignment['DictationAssignment']['valid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($dictationAssignment['DictationAssignment']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($dictationAssignment['DictationAssignment']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dictation Assignment'), array('action' => 'edit', $dictationAssignment['DictationAssignment']['dictation_assignment_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dictation Assignment'), array('action' => 'delete', $dictationAssignment['DictationAssignment']['dictation_assignment_id']), null, __('Are you sure you want to delete # %s?', $dictationAssignment['DictationAssignment']['dictation_assignment_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dictation Assignments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dictation Assignment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dictations'), array('controller' => 'dictations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dictation'), array('controller' => 'dictations', 'action' => 'add')); ?> </li>
	</ul>
</div>
