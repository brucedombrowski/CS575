<div class="dictationAssignments form">
<?php echo $this->Form->create('DictationAssignment'); ?>
	<fieldset>
		<legend><?php echo __('Edit Dictation Assignment'); ?></legend>
	<?php
		echo $this->Form->input('dictation_assignment_id');
		echo $this->Form->input('dictation_id');
		echo $this->Form->input('account_manager_id');
		echo $this->Form->input('transcriptionist_id');
		echo $this->Form->input('valid');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DictationAssignment.dictation_assignment_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DictationAssignment.dictation_assignment_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Dictation Assignments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Dictations'), array('controller' => 'dictations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dictation'), array('controller' => 'dictations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Manager'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
