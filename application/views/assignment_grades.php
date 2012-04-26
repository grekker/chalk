<?php $this->load->view('header') ?>
<div role="main" id="main">
	<h2>Assigment 1 Grades</h2>
	<div class="table-wrapper">
		<table class="respond">
			<thead>
				<tr>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Date Submitted</th>
					<th>Grade</th>
				</tr>
			</thead>
			<tbody>
				<?php 

				foreach($entry as $row):?>
				<tr>
				<td><?= $row->lastName ?></td>
				<td><?= $row->firstName ?></td>
				<td><?= $row->submissionDate ?></td>
				<td><?= anchor('submissions/gradeAssignment/' . $row->userID, $row->grade, 'title="Edit"'); ?></td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>
<?php $this->load->view('sidebar') ?>
<?php $this->load->view('footer') ?>