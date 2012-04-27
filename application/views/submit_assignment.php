<?php
date_default_timezone_set('America/New_York');
$this->load->helper('date');?>
<?php $this->load->view('header') ?>
<?php print_r($title); ?>
<div role="main" id="main">
	<h2>Submit Assignment</h2>
        <h3><?php echo $title; ?></h2>
        <p>Due: <?php echo mdate('%M %j, %Y at %g:%i %A', strtotime($dueDate)); ?></p>
	<div class="table-wrapper">
	<?php echo form_open_multipart('submissions/insertSubmission'); ?>
        <?php echo form_label('Description', 'description');
	echo form_textarea('description', set_value('description'), 'desc="description"');
	//By default codeigniter uses "userfile", if you change it, you have to pass in the new name
	echo form_label('Attach file', 'userfile');
	echo form_upload('userfile', set_value('userfile'));
	echo form_hidden('assid', $assignmentID);
	echo form_submit('submit', 'submit');
     	echo form_close(); ?>
	</div>
</div>
<?php $this->load->view('sidebar') ?>
<?php $this->load->view('footer') ?>
