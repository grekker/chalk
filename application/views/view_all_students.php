<?php $this->load->view('header'); ?>
<div role="main" id="main">
	<h2>View All Students</h2>
    
    <table border="0"
    cellpadding="4">
    
    
    
    
<thead>    
<tr>
	<th>Last Name</th>
	<th>First Name</th>
	<th>Email Address</th>
	<th>Edit</th>
</tr>
</thead>

<?php 

foreach($entry as $row):?>
<tr>
<td><?= $row->lastName ?></td>
<td><?= $row->firstName ?></td>
<td><?= $row->email ?></td>
<td><?= anchor('users/edit/' . $row->userID, 'Edit', 'title="Edit"'); ?></td>
</tr>
<?php endforeach;?>

</table> 
</div>
<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('footer'); ?>