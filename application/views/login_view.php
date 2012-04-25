<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>

<p>Login View</p>


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

</body>
</html>