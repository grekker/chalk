<?php $this->load->view('header'); ?>
<div role="main" id="main">
	<h2>View All Students</h2>
    
    <table border="0"
    cellpadding="4">
    
    
    
    
    
<tr>
<th>Student Name</th>
<th>Email Address</th>
<th>Grade in Class</th>
</tr>

<?php 

foreach($entry as $row):?>
<tr>
<td><?= $row->firstName ?></td>
<td><?= $row->lastName ?></td>
<td><?= $row->email ?></td>
<td><?= $row->firstName ?></td>
</tr>
<?php endforeach;?>

</table> 
</div>
<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('footer'); ?>