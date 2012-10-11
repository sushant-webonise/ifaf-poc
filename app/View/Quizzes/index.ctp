<div class="quizzes index">
	<h2><?php echo __('Quizzes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('course_id'); ?></th>
			<th><?php echo $this->Paginator->sort('is_active'); ?></th>
			<th><?php echo $this->Paginator->sort('no_of_questions'); ?></th>
			<th><?php echo $this->Paginator->sort('duration'); ?></th>
			<th><?php echo $this->Paginator->sort('passing_criteria'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($quizzes as $quiz): ?>
	<tr>
		<td><?php echo h($quiz['Quiz']['id']); ?>&nbsp;</td>
		<td><?php echo h($quiz['Quiz']['title']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($quiz['Course']['title'], array('controller' => 'courses', 'action' => 'view', $quiz['Course']['id'])); ?>
		</td>
		<td><?php echo h($quiz['Quiz']['is_active']); ?>&nbsp;</td>
		<td><?php echo h($quiz['Quiz']['no_of_questions']); ?>&nbsp;</td>
		<td><?php echo h($quiz['Quiz']['duration']); ?>&nbsp;</td>
		<td><?php echo h($quiz['Quiz']['passing_criteria']); ?>&nbsp;</td>
		<td><?php echo h($quiz['Quiz']['created']); ?>&nbsp;</td>
		<td><?php echo h($quiz['Quiz']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $quiz['Quiz']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $quiz['Quiz']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $quiz['Quiz']['id']), null, __('Are you sure you want to delete # %s?', $quiz['Quiz']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Quiz'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
