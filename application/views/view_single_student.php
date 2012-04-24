<?php $this->load->view('header'); ?>
<div role="main" id="main">
	<h2>View Single Student</h2>
    
    <table border="0"
    cellpadding="4">
    
<tr>
<th>Student Name</th>
<th>Email Address</th>
<th>Grade in Class</th>
</tr>
<tr>
<td><?php echo $firstName ?></td>
<td><?=$email?></td>
<td>89%</td>
</tr>
</table> 
</div>
<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('footer'); ?>