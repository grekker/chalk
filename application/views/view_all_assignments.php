<?php $this->load->view('header') ?>
<div role="main" id="main">
	<h2>View All Assignments</h2>
	<p><?php
	if ($_SESSION['userLevelID']==2){
		echo anchor('assignments/createAssignment', 'Create Assignment', 'title="Create Assignment"');
	} ?></p>
	<div class="table-wrapper">
		<table class="respond">
			<thead>
				<tr>
					<th>Assignment Name</th>
					<th>Due Date</th>
					<th>Start Grading</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($entry as $row):?>
				<tr>
					<td><?php echo anchor('assignments/viewAssignment/' . $row->assignmentID, $row->title, 'title="' . $row->title . '"'); ?></td>
					<td><?php echo $row->dueDate; ?></td>
					<td>
					<?php 
						if ($_SESSION['userLevelID']==1){
							echo anchor('submissions/submitAssignment/' . $row->assignmentID, 'Submit', 'title="Grade"');
						}else{
							echo anchor('submissions/viewAssignmentGrades/' . $row->assignmentID, 'Grade', 'title="Grade"'); 
						}
						
					?>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
<?php $this->load->view('sidebar') ?>
<?php $this->load->view('footer') ?>