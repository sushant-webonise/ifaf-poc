<div class="courses view">
<h2><?php  echo __('Course'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($course['Course']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($course['Course']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($course['User']['name'], array('controller' => 'users', 'action' => 'view', $course['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($course['Course']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($course['Course']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($course['Course']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course'), array('action' => 'edit', $course['Course']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course'), array('action' => 'delete', $course['Course']['id']), null, __('Are you sure you want to delete # %s?', $course['Course']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quizzes'), array('controller' => 'quizzes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quiz'), array('controller' => 'quizzes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Quizzes'); ?></h3>
	<?php if (!empty($course['Quiz'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Course Id'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('No Of Questions'); ?></th>
		<th><?php echo __('Duration'); ?></th>
		<th><?php echo __('Passing Criteria'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($course['Quiz'] as $quiz): ?>
		<tr>
			<td><?php echo $quiz['id']; ?></td>
			<td><?php echo $quiz['title']; ?></td>
			<td><?php echo $quiz['course_id']; ?></td>
			<td><?php echo $quiz['is_active']; ?></td>
			<td><?php echo $quiz['no_of_questions']; ?></td>
			<td><?php echo $quiz['duration']; ?></td>
			<td><?php echo $quiz['passing_criteria']; ?></td>
			<td><?php echo $quiz['created']; ?></td>
			<td><?php echo $quiz['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'quizzes', 'action' => 'view', $quiz['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'quizzes', 'action' => 'edit', $quiz['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'quizzes', 'action' => 'delete', $quiz['id']), null, __('Are you sure you want to delete # %s?', $quiz['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Quiz'), array('controller' => 'quizzes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
