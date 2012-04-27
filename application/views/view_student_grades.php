<?php $this->load->view('header') ?>
<div role="main" id="main">
	<h2>View Student Grades</h2>
	<div class="table-wrapper">
		<table class="respond">
			<thead>
				<tr>
					<th>Assignment</th>
					<th>Date Due</th>
					<th>Date Submitted</th>
					<th>Grade</th>
				</tr>
			</thead>
			<?php foreach($entry as $row):?>
		<tr>
			<td><?=$row->title ?></td>
			<td><?=$row->setDate ?></td>
			<td><?=$row->dueDate ?></td>
			<td><?=$row->grade . " / " . $row->maxPoints ?></td>
		</tr>
		<?php endforeach;?>
		<tr>
			<td colspan="3">Cumulative Grade</td>
			<td><?php echo $grade . "%"; ?></td>
		</tr>
		</table>
	</div>
</div>
<?php $this->load->view('sidebar') ?>
<?php $this->load->view('footer') ?>