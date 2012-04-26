<?php $this->load->view('header'); ?>
<div role="main" id="main">
	
    <h2>Login</h2>
    
    <?php echo form_open('admin');  ?>

<p>
<?php 
echo form_label('Email Address', 'email_address');
echo form_input('email_address', set_value('email_address'), 'id="email_address"');
?>
</p>

<p>
<?php 
echo form_label('Password', 'password');
echo form_password('password', '', 'id="password"');
?>
</p>

<?php echo form_submit('submit', 'login'); ?>

<div class="errors"><?php echo validation_errors(); ?></div>

<?php echo form_close(); ?>

</div>
<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('footer'); ?>
