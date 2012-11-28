<div class="dictations form">
<?php echo $this->Form->create('Dictation'); ?>
	<fieldset>
		<legend><?php echo __('Add Dictation'); ?></legend>
	<?php
		echo $this->Form->input('client_id');
		echo $this->Form->input('name');
		echo $this->Form->input('location');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Dictations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dictation Assignments'), array('controller' => 'dictation_assignments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dictation Assignment'), array('controller' => 'dictation_assignments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transcriptions'), array('controller' => 'transcriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transcription'), array('controller' => 'transcriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>
