<div class="transcriptions form">
<?php echo $this->Form->create('Transcription'); ?>
	<fieldset>
		<legend><?php echo __('Add Transcription'); ?></legend>
	<?php
		echo $this->Form->input('dictation_id');
		echo $this->Form->input('dictation_assignment_id');
		echo $this->Form->input('name');
		echo $this->Form->input('location');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Transcriptions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Dictations'), array('controller' => 'dictations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dictation'), array('controller' => 'dictations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dictation Assignments'), array('controller' => 'dictation_assignments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assignment'), array('controller' => 'dictation_assignments', 'action' => 'add')); ?> </li>
	</ul>
</div>
