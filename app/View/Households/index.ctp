
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('New Household'), array('action' => 'add'), array('class' => '')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('List Answers'), array('controller' => 'answers', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('New Answer'), array('controller' => 'answers', 'action' => 'add'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('List Searches'), array('controller' => 'searches', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('New Search'), array('controller' => 'searches', 'action' => 'add'), array('class' => '')); ?></li> 
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="households index">
		
			<h2><?php echo __('Households'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('birtday'); ?></th>
							<th><?php echo $this->Paginator->sort('kinship'); ?></th>
							<th><?php echo $this->Paginator->sort('works'); ?></th>
							<th><?php echo $this->Paginator->sort('work_activity'); ?></th>
							<th><?php echo $this->Paginator->sort('work_salary'); ?></th>
							<th><?php echo $this->Paginator->sort('created'); ?></th>
							<th><?php echo $this->Paginator->sort('student_id'); ?></th>
							<th><?php echo $this->Paginator->sort('answer_id'); ?></th>
							<th><?php echo $this->Paginator->sort('question_id'); ?></th>
							<th><?php echo $this->Paginator->sort('search_id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($households as $household): ?>
	<tr>
		<td><?php echo h($household['Household']['id']); ?>&nbsp;</td>
		<td><?php echo h($household['Household']['name']); ?>&nbsp;</td>
		<td><?php echo h($household['Household']['birtday']); ?>&nbsp;</td>
		<td><?php echo h($household['Household']['kinship']); ?>&nbsp;</td>
		<td><?php echo h($household['Household']['works']); ?>&nbsp;</td>
		<td><?php echo h($household['Household']['work_activity']); ?>&nbsp;</td>
		<td><?php echo h($household['Household']['work_salary']); ?>&nbsp;</td>
		<td><?php echo h($household['Household']['created']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($household['Student']['name'], array('controller' => 'students', 'action' => 'view', $household['Student']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($household['Answer']['id'], array('controller' => 'answers', 'action' => 'view', $household['Answer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($household['Question']['title'], array('controller' => 'questions', 'action' => 'view', $household['Question']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($household['Search']['title'], array('controller' => 'searches', 'action' => 'view', $household['Search']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $household['Household']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $household['Household']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $household['Household']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $household['Household']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<p><small>
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
				?>
			</small></p>

			<ul class="pagination">
				<?php
					echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
					echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->