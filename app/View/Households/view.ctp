
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Household'), array('action' => 'edit', $household['Household']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Household'), array('action' => 'delete', $household['Household']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $household['Household']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Households'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Household'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Answers'), array('controller' => 'answers', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Answer'), array('controller' => 'answers', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Searches'), array('controller' => 'searches', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Search'), array('controller' => 'searches', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="households view">

			<h2><?php  echo __('Household'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($household['Household']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($household['Household']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Birtday'); ?></strong></td>
		<td>
			<?php echo h($household['Household']['birtday']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Kinship'); ?></strong></td>
		<td>
			<?php echo h($household['Household']['kinship']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Works'); ?></strong></td>
		<td>
			<?php echo h($household['Household']['works']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Work Activity'); ?></strong></td>
		<td>
			<?php echo h($household['Household']['work_activity']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Work Salary'); ?></strong></td>
		<td>
			<?php echo h($household['Household']['work_salary']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($household['Household']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Student'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($household['Student']['name'], array('controller' => 'students', 'action' => 'view', $household['Student']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Answer'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($household['Answer']['id'], array('controller' => 'answers', 'action' => 'view', $household['Answer']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Question'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($household['Question']['title'], array('controller' => 'questions', 'action' => 'view', $household['Question']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Search'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($household['Search']['title'], array('controller' => 'searches', 'action' => 'view', $household['Search']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
