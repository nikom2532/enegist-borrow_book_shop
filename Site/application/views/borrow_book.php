<body>

<div id="container">
	<h1>Borrow a Book</h1>
	
	<form id="add_book" action="#" method="post">
		<div id="body">
			<?php // var_dump($customer); ?>
			<div>
				Choose a Customer : 
				<select name="customer_id">
					<option value="">Select a Customer</option>
<?php
					foreach ($customer as $key => $value) {
?>
						<option value="<?php echo $value->id; ?>"><?php echo $value->first_name." ".$value->last_name; ?></option>
<?php
					}
?>
				</select>
			</div>
			<div>
				Choose a Book : 
				<select name="book_id">
					<option value="">Select a Book</option>
<?php
					foreach ($book as $key => $value) {
?>
						<option value="<?php echo $value->id; ?>"><?php echo "Name: ".$value->title." ; Author: ".$value->author; ?></option>
<?php
					}
?>
				</select>
			</div>
		</div>
		<p class="footer">
			<div align="center">
				<input type="button" id="submit" value="Borrow" />
			</div>
			<!-- Page rendered in <strong>{elapsed_time}</strong> seconds -->
		</p>
	</form>
</div>

<script>
		$("#submit").click(function(){
			
			if(!confirm('Do you want to confirm to borrow a book?')){
				return false;
			}
			else{
				$.post(
					"<?php echo base_url(); ?>index.php/borrow_book/insert",
					{
						customer_id: $("[name=customer_id]").val(),
						book_id: $("[name=book_id]").val(),
					},
					function(data){
						console.log("data.success = " + data);
						/*
						if(data.borrow_success == true){
							alert("Success to Borrow a Book.");
							location.reload();
						}
						else{
							alert("Fail to Borrow a Book.");
							location.reload();
						}
						*/
					},
					"json"
				);
			}
		});
</script>

</body>
</html>