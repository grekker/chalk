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
<td>89%</td>
</tr>
</table> 
<br /> <br />

<p>Assignment Submissions</p>
<table border="0" cellpadding="4">
<tr>
<th>Title</th>
<th>Date Due</th>
<th>Date Submitted</th>
<th>Grade</th>
</tr>
<?php foreach($assignmentArray as $assignment):?>
<tr>
<td><?=$assignment->title ?></td>
<td><?=$assignment->setDate ?></td>
<td><?=$assignment->dueDate ?></td>
</tr>
<?php endforeach;?>
</table> 
</div>
<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('footer'); ?>