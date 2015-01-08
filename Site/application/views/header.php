<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">
		
	</style>
	<?php //* ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
	<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.3.min.js"></script>
	<?php //*/ ?>
</head>
<body>
	<div id="container">
		<a href="<?php echo base_url(); ?>index.php/add_customer">
			<div class="menu">
				Add Customer
			</div>
		</a>
		<a href="<?php echo base_url(); ?>index.php/borrow_book">
			<div class="menu">
				Borrow Book
			</div>
		</a>
		<a target="_blank" href="<?php echo base_url(); ?>index.php/json_book">
			<div class="menu">
				json book
			</div>
		</a>
		<a target="_blank" href="<?php echo base_url(); ?>index.php/json_address">
			<div class="menu">
				json address
			</div>
		</a>
		<a target="_blank" href="<?php echo base_url(); ?>index.php/json_user">
			<div class="menu">
				json user
			</div>
		</a>
		<div class="clear"></div>
