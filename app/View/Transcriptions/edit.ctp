<div class="transcriptions form">
<?php echo $this->Form->create('Transcription'); ?>
	<fieldset>
		<legend><?php echo __('Edit Transcription'); ?></legend>
	<?php
		echo $this->Form->input('transcription_id');
		echo $this->Form->input('dictation_id');
		echo $this->Form->input('name');
		echo $this->Form->input('location');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Transcription.transcription_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Transcription.transcription_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Transcriptions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Dictations'), array('controller' => 'dictations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dictation'), array('controller' => 'dictations', 'action' => 'add')); ?> </li>
	</ul>
</div>
