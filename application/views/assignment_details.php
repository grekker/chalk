<?php $this->load->view('header') ?>
<div role="main" id="main">
	<h2><?php echo $title; ?></h2>
        <p>Due: <?php echo $dueDate; ?></p>
        <p>Points: <?php echo $maxPoints; ?></p>
        <h3>Description</h3>
        <p><?php echo $information; ?></p>
        <p><?php echo anchor('assignments/editAssignment/' . $assignmentID, 'Edit Assignment', 'title="Edit Assignment"'); ?>
</div>
<?php $this->load->view('sidebar') ?>
<?php $this->load->view('footer') ?>