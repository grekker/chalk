<?php $this->load->view('header') ?>
<div role="main" id="main">
	<h2>Submissions for Assignment 2</h2>
	<div class="table-wrapper">
		<table class="respond">
			<thead>
				<tr>
					<th>Student Name</th>
					<th>Date Submitted</th>
					<th>Grade</th>
					<th>Edit</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Test Assignment 1</td>
					<td>04/23/11</td>
					<td>1/1</td>
					<td><?php echo anchor('/assignments/gradeAssignment/', 'Edit', 'title="Edit Grade"'); ?></td>
				</tr>
				<tr>
					<td>Test Assignment 2</td>
					<td>04/23/11</td>
					<td>1/1</td>
					<td>0</td>
				</tr>
				<tr>
					<td>Test Assignment 3</td>
					<td>04/23/11</td>
					<td>1/1</td>
					<td>0</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<?php $this->load->view('sidebar') ?>
<?php $this->load->view('footer') ?>