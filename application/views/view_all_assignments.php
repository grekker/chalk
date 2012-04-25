<?php $this->load->view('header') ?>
<div role="main" id="main">
	<h2>View All Assignments</h2>
	<div class="table-wrapper">
		<table class="respond">
			<thead>
				<tr>
					<th>Assignment Name</th>
					<th>Due Date</th>
					<th>Completed/Total</th>
					<th>Days Late</th>
					<th>Start Grading</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Test Assignment 1</td>
					<td>04/23/11</td>
					<td>1/1</td>
					<td>0</td>
					<td>Grade</td>
				</tr>
				<tr>
					<td>Test Assignment 2</td>
					<td>04/23/11</td>
					<td>1/1</td>
					<td>0</td>
					<td>Grade</td>
				</tr>
				<tr>
					<td>Test Assignment 3</td>
					<td>04/23/11</td>
					<td>1/1</td>
					<td>0</td>
					<td>Grade</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<?php $this->load->view('sidebar') ?>
<?php $this->load->view('footer') ?>