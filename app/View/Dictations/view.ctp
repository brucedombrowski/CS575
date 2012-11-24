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
		<li><?php echo $this->Html->link(__('List Transcriptions'), array('controller' => 'transcriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transcription'), array('controller' => 'transcriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Transcriptions'); ?></h3>
	<?php if (!empty($dictation['Transcription'])): ?>
		<dl>
			<dt><?php echo __('Transcription Id'); ?></dt>
		<dd>
	<?php echo $dictation['Transcription']['transcription_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Dictation Id'); ?></dt>
		<dd>
	<?php echo $dictation['Transcription']['dictation_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
	<?php echo $dictation['Transcription']['name']; ?>
&nbsp;</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
	<?php echo $dictation['Transcription']['location']; ?>
&nbsp;</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
	<?php echo $dictation['Transcription']['created']; ?>
&nbsp;</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
	<?php echo $dictation['Transcription']['modified']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Transcription'), array('controller' => 'transcriptions', 'action' => 'edit', $dictation['Transcription']['transcription_id'])); ?></li>
			</ul>
		</div>
	</div>
	