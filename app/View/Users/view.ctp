<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Role']['name'], array('controller' => 'roles', 'action' => 'view', $user['Role']['role_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['user_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Dictation Assignment'), array('controller' => 'dictation_assignments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Clients'); ?></h3>
	<?php if (!empty($user['Client'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Zip'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Client'] as $client): ?>
		<tr>
			<td><?php echo $client['name']; ?></td>
			<td><?php echo $client['address']; ?></td>
			<td><?php echo $client['city']; ?></td>
			<td><?php echo $client['state']; ?></td>
			<td><?php echo $client['zip']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clients', 'action' => 'view', $client['client_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clients', 'action' => 'edit', $client['client_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<div class="related">
	<h3><?php echo __('Dictations Assigned By This User'); ?></h3>
	<?php if (!empty($user['Assigner'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Dictation Assignment Id'); ?></th>
		<th><?php echo __('Dictation Name'); ?></th>
		<th><?php echo __('Account Manager'); ?></th>
		<th><?php echo __('Transcriptionist'); ?></th>
		<th><?php echo __('Valid'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Assigner'] as $assigner): ?>
		<tr>
			<td><?php echo $assigner['dictation_assignment_id']; ?></td>
			<td><?php echo $assigner['Dictation']['name']; ?></td>
			<td><?php echo $assigner['AccountManager']['name']; ?></td>
			<td><?php echo $assigner['Transcriptionist']['name']; ?></td>
			<td><?php echo $assigner['valid']; ?></td>
			<td><?php echo $assigner['created']; ?></td>
			<td><?php echo $assigner['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dictation_assignments', 'action' => 'view', $assigner['dictation_assignment_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dictation_assignments', 'action' => 'edit', $assigner['dictation_assignment_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<div class="related">
	<h3><?php echo __('Dictations Assigned to this User'); ?></h3>
	<?php if (!empty($user['Assignee'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Dictation Assignment Id'); ?></th>
		<th><?php echo __('Dictation Name'); ?></th>
		<th><?php echo __('Account Manager'); ?></th>
		<th><?php echo __('Transcriptionist'); ?></th>
		<th><?php echo __('Valid'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Assignee'] as $assignee): ?>
		<tr>
			<td><?php echo $assignee['dictation_assignment_id']; ?></td>
			<td><?php echo $assignee['Dictation']['name']; ?></td>
			<td><?php echo $assignee['AccountManager']['name']; ?></td>
			<td><?php echo $assignee['Transcriptionist']['name']; ?></td>
			<td><?php echo $assignee['valid']; ?></td>
			<td><?php echo $assignee['created']; ?></td>
			<td><?php echo $assignee['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dictation_assignments', 'action' => 'view', $assignee['dictation_assignment_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dictation_assignments', 'action' => 'edit', $assignee['dictation_assignment_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dictation_assignments', 'action' => 'delete', $assignee['dictation_assignment_id']), null, __('Are you sure you want to delete # %s?', $assignee['dictation_assignment_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
