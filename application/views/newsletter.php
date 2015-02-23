<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Newsletter</title>
	<style>
	label{
		display: block;
	}

	.error{
		color: #373737;
		font-style: italic;
	}

	#newsletter_form{
		background: #e3e3e3;
		width: 25%;
		margin: 5em auto 0;
		padding: 32px;
		border: 1px solid #d5d5d5;
	}

	#newsletter_form form input[type=text]{
		width: 100%;
	}

	h2{
		margin-top: -54px;
		color: #aa2828;
		font-family: arial;
	}
	input[type=submit]{
		border: 1px solid #c62828;
		background: #aa2828;
		color:#e3e3e3;
		padding: .5em;
		cursor: pointer;
	}

	input[type=submit]:hover{
		background: #9a2222;
	}
	</style>
</head>
<body>
	<div id="newsletter_form">
		<h2>Signup for the Newsletter</h2>
		<?php echo form_open('email/send'); ?>
		
		<?php 
			$name_data = array(
				'name' => 'name',
				'id' => 'name',
				'value' => set_value('name')
				);
		?>
		<p><label for="name">Name: </label><?php echo form_input($name_data);?></p>
		<p>
			<label for="email">Email Address:</label>
			<input type="email" name="email" id="email" value="<?php echo set_value('email');?>">
		</p>
		<p><?php echo form_submit('submit','Submit');?></p>
		<?php echo form_close(); ?>	
		<?php echo validation_errors();?>
	</div> <!-- end newsletter-form -->
</body>
</html>