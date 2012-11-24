<div class="clients view">
<h2><?php  echo __('Client'); ?></h2>
	<dl>
		<dt><?php echo __('Client Id'); ?></dt>
		<dd>
			<?php echo h($client['Client']['client_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($client['Client']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($client['Client']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($client['Client']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($client['Client']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($client['Client']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($client['Client']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($client['Client']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Manager'); ?></dt>
		<dd>
			<?php echo $this->Html->link($client['Manager']['name'], array('controller' => 'users', 'action' => 'view', $client['Manager']['user_id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Client'), array('action' => 'edit', $client['Client']['client_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Client'), array('action' => 'delete', $client['Client']['client_id']), null, __('Are you sure you want to delete # %s?', $client['Client']['client_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manager'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dictations'), array('controller' => 'dictations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dictation'), array('controller' => 'dictations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Dictations'); ?></h3>
	<?php if (!empty($client['Dictation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Dictation Id'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($client['Dictation'] as $dictation): ?>
		<tr>
			<td><?php echo $dictation['dictation_id']; ?></td>
			<td><?php echo $dictation['client_id']; ?></td>
			<td><?php echo $dictation['name']; ?></td>
			<td><?php echo $dictation['location']; ?></td>
			<td><?php echo $dictation['created']; ?></td>
			<td><?php echo $dictation['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dictations', 'action' => 'view', $dictation['dictation_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dictations', 'action' => 'edit', $dictation['dictation_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dictations', 'action' => 'delete', $dictation['dictation_id']), null, __('Are you sure you want to delete # %s?', $dictation['dictation_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dictation'), array('controller' => 'dictations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
