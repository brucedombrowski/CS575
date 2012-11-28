<div class="transcriptions view">
<h2><?php  echo __('Transcription'); ?></h2>
	<dl>
		<dt><?php echo __('Transcription Id'); ?></dt>
		<dd>
			<?php echo h($transcription['Transcription']['transcription_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dictation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transcription['Dictation']['name'], array('controller' => 'dictations', 'action' => 'view', $transcription['Dictation']['dictation_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assignment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transcription['Assignment']['dictation_assignment_id'], array('controller' => 'dictation_assignments', 'action' => 'view', $transcription['Assignment']['dictation_assignment_id'])); ?>
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
		<li><?php echo $this->Html->link(__('Edit Transcription'), array('action' => 'edit', $transcription['Transcription']['transcription_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Transcription'), array('action' => 'delete', $transcription['Transcription']['transcription_id']), null, __('Are you sure you want to delete # %s?', $transcription['Transcription']['transcription_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Transcriptions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transcription'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dictations'), array('controller' => 'dictations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dictation'), array('controller' => 'dictations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dictation Assignments'), array('controller' => 'dictation_assignments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assignment'), array('controller' => 'dictation_assignments', 'action' => 'add')); ?> </li>
	</ul>
</div>
