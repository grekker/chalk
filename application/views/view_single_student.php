<?php $this->load->view('header'); ?>
<div role="main" id="main">
	<h2>View Single Student</h2>
    
<table border="0" cellpadding="4">
<tr>
<th>Student Name</th>
<th>Email Address</th>
<th>Grade in Class</th>
</tr>
<tr>
<td><?php echo $student->firstName.' '.$student->lastName ?></td>
<td><?=$student->email?></td>
<td><?php echo $grade . "%"; ?></td>
</tr>
</table> 
<br /> <br />

<p>Assignment Submissions</p>
<table border="0" cellpadding="4">
	<thead>
		<tr>
			<th>Title</th>
			<th>Date Due</th>
			<th>Date Submitted</th>
			<th>Grade</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($ass as $a):?>
		<tr>
			<td><?=$a->title ?></td>
			<td><?=$a->setDate ?></td>
			<td><?=$a->dueDate ?></td>
			<td><?=$a->grade ?></td>
		</tr>
		<?php endforeach;?>
	</tbody>
</table> 
</div>
<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('footer'); ?>