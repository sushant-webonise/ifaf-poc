<div class="quizzes form">
<?php echo $this->Form->create('Quiz'); ?>
	<fieldset>
		<legend><?php echo __('Add Quiz'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('course_id');
		echo $this->Form->input('is_active');
		echo $this->Form->input('no_of_questions');
		echo $this->Form->input('duration');
		echo $this->Form->input('passing_criteria');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Quizzes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
