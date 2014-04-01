
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Student'), array('action' => 'edit', $student['Student']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Student'), array('action' => 'delete', $student['Student']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $student['Student']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Students'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Student'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Households'), array('controller' => 'households', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Household'), array('controller' => 'households', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="students view">

			<h2><?php  echo __('Student'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Enrollment'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['enrollment']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Campus'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['campus']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Course'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['course']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Birthday'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['birthday']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Birth Hometown'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['birth_hometown']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Birth Home State'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['birth_home_state']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Nationality'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['nationality']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Father'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['father']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Mather'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['mather']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Address'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['address']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Address Number'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['address_number']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Address District'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['address_district']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Address City'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['address_city']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Address Country'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['address_country']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Address Cep'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['address_cep']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Address Landmark'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['address_landmark']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Phone Residential'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['phone_residential']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Phone Mobile'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['phone_mobile']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Email'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['email']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Sex'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['sex']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Civil Status'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['civil_status']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Rg'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['rg']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Cpf'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['cpf']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Dependent'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['dependent']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Number Dependents'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['number_dependents']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Skin Color'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['skin_color']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Occupation'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['occupation']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Bank'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['bank']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Bank Agency'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['bank_agency']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Banck Account'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['banck_account']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Password'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['password']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Photo'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['photo']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($student['Student']['created']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related Households'); ?></h3>
				
				<?php if (!empty($student['Household'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Birtday'); ?></th>
		<th><?php echo __('Kinship'); ?></th>
		<th><?php echo __('Works'); ?></th>
		<th><?php echo __('Work Activity'); ?></th>
		<th><?php echo __('Work Salary'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th><?php echo __('Answer Id'); ?></th>
		<th><?php echo __('Question Id'); ?></th>
		<th><?php echo __('Search Id'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($student['Household'] as $household): ?>
		<tr>
			<td><?php echo $household['id']; ?></td>
			<td><?php echo $household['name']; ?></td>
			<td><?php echo $household['birtday']; ?></td>
			<td><?php echo $household['kinship']; ?></td>
			<td><?php echo $household['works']; ?></td>
			<td><?php echo $household['work_activity']; ?></td>
			<td><?php echo $household['work_salary']; ?></td>
			<td><?php echo $household['created']; ?></td>
			<td><?php echo $household['student_id']; ?></td>
			<td><?php echo $household['answer_id']; ?></td>
			<td><?php echo $household['question_id']; ?></td>
			<td><?php echo $household['search_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'households', 'action' => 'view', $household['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'households', 'action' => 'edit', $household['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'households', 'action' => 'delete', $household['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $household['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Household'), array('controller' => 'households', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
