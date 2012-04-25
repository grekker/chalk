<?php $this->load->view('header') ?>
<div role="main" id="main">
	<h2>View All Grades</h2>
	<div class="table-wrapper">
		<table class="respond">
			<thead>
				<tr>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Assignment 1</th>
					<th>Assignment 2</th>
					<th>Assignment 3</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Phillips</td>
					<td>Nathan</td>
					<td>100</td>
					<td>82</td>
					<td>21</td>
				</tr>
				<tr>
					<td>Dietz</td>
					<td>Chuck</td>
					<td>100</td>
					<td>82</td>
					<td>21</td>
				</tr>
				<tr>
					<td>Radich</td>
					<td>Ali</td>
					<td>100</td>
					<td>82</td>
					<td>21</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<?php $this->load->view('sidebar') ?>
<?php $this->load->view('footer') ?>