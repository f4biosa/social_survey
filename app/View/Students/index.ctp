
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('New Student'), array('action' => 'add'), array('class' => '')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Households'), array('controller' => 'households', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('New Household'), array('controller' => 'households', 'action' => 'add'), array('class' => '')); ?></li> 
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="students index">
		
			<h2><?php echo __('Students'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('enrollment'); ?></th>
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('campus'); ?></th>
							<th><?php echo $this->Paginator->sort('course'); ?></th>
							<th><?php echo $this->Paginator->sort('birthday'); ?></th>
							<th><?php echo $this->Paginator->sort('birth_hometown'); ?></th>
							<th><?php echo $this->Paginator->sort('birth_home_state'); ?></th>
							<th><?php echo $this->Paginator->sort('nationality'); ?></th>
							<th><?php echo $this->Paginator->sort('father'); ?></th>
							<th><?php echo $this->Paginator->sort('mather'); ?></th>
							<th><?php echo $this->Paginator->sort('address'); ?></th>
							<th><?php echo $this->Paginator->sort('address_number'); ?></th>
							<th><?php echo $this->Paginator->sort('address_district'); ?></th>
							<th><?php echo $this->Paginator->sort('address_city'); ?></th>
							<th><?php echo $this->Paginator->sort('address_country'); ?></th>
							<th><?php echo $this->Paginator->sort('address_cep'); ?></th>
							<th><?php echo $this->Paginator->sort('address_landmark'); ?></th>
							<th><?php echo $this->Paginator->sort('phone_residential'); ?></th>
							<th><?php echo $this->Paginator->sort('phone_mobile'); ?></th>
							<th><?php echo $this->Paginator->sort('email'); ?></th>
							<th><?php echo $this->Paginator->sort('sex'); ?></th>
							<th><?php echo $this->Paginator->sort('civil_status'); ?></th>
							<th><?php echo $this->Paginator->sort('rg'); ?></th>
							<th><?php echo $this->Paginator->sort('cpf'); ?></th>
							<th><?php echo $this->Paginator->sort('dependent'); ?></th>
							<th><?php echo $this->Paginator->sort('number_dependents'); ?></th>
							<th><?php echo $this->Paginator->sort('skin_color'); ?></th>
							<th><?php echo $this->Paginator->sort('occupation'); ?></th>
							<th><?php echo $this->Paginator->sort('bank'); ?></th>
							<th><?php echo $this->Paginator->sort('bank_agency'); ?></th>
							<th><?php echo $this->Paginator->sort('banck_account'); ?></th>
							<th><?php echo $this->Paginator->sort('password'); ?></th>
							<th><?php echo $this->Paginator->sort('photo'); ?></th>
							<th><?php echo $this->Paginator->sort('created'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($students as $student): ?>
	<tr>
		<td><?php echo h($student['Student']['id']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['enrollment']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['name']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['campus']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['course']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['birthday']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['birth_hometown']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['birth_home_state']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['nationality']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['father']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['mather']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['address']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['address_number']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['address_district']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['address_city']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['address_country']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['address_cep']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['address_landmark']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['phone_residential']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['phone_mobile']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['email']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['sex']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['civil_status']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['rg']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['cpf']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['dependent']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['number_dependents']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['skin_color']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['occupation']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['bank']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['bank_agency']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['banck_account']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['password']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['photo']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $student['Student']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $student['Student']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $student['Student']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $student['Student']['id'])); ?>
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