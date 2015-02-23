<!DOCTYPE html>
<html lang="en">
<head>
	<title>CI Practice Day Two</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<style>
	h1{
		color:green;
	}
	h3{
		color:#fff;
		background: black;
		text-align: right !important;
	}

	h1,h3{
		text-align: center;
	}

	.post{
		font-size: 1.5em;
		padding: 0 50px 0 50px;
		border: 1px dotted gray;
	}

	.element{
		height: 200px;
		font-size: 59px;
		color: blue;
		background: #ff0000;
	}
	</style>
</head>
<body>
	<div id="container">
		<p>My view page has been loaded</p>


			<?php foreach($rows as $r):?>
			<?php echo "<h1>".$r->title."</h1>"; ?>
			<?php echo "<h3>".$r->author."</h3>"; ?>
			<div class="post"><p><?php echo $r->contents; ?></p></div>
		<?php endforeach ?>

		<?php
		echo base_url();
		 echo server_root();

		 ?>


	</div>
</body>
</html>