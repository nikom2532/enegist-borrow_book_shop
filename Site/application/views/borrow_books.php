<body>

<div id="container">
	<h1>Borrow Books</h1>
	
	<form id="add_cus" action="#" method="post">
		<div id="body">
			<?php // var_dump($customer); ?>
			<div>
				Choose a Customer : 
				<select>
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
				<select>
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
			
			<div>
				<br />
				home_address
				<br />
				
				address_1: <input name="home_address_1" value="" />
				address_2: <input name="home_address_2" value="" />
				city: <input name="home_city" value="" />
				country: <input name="home_country" value="" />
				code: <input name="home_code" value="" />
			</div>
			<div>
				<br />
				work_address
				<br />
				
				address_1: <input name="work_address_1" value="" />
				address_2: <input name="work_address_2" value="" />
				city: <input name="work_city" value="" />
				country: <input name="work_country" value="" />
				code: <input name="work_code" value="" />
			</div>
				
		</div>

		<p class="footer">
			<div align="center">
				<input type="button" id="submit" value="save" />
			</div>
			<!-- Page rendered in <strong>{elapsed_time}</strong> seconds -->
		</p>
	</form>
</div>

<script>
		$("#submit").click(function(){
			$.post(
				"<?php echo base_url(); ?>index.php/add_customer/insert",
				{
					cus_name: $("[name=cus_name]").val(),
					cus_surname: $("[name=cus_surname]").val(),
					home_address_1: $("[name=home_address_1]").val(),
					home_address_2: $("[name=home_address_2]").val(),
					home_city: $("[name=home_city]").val(),
					home_country: $("[name=home_country]").val(),
					home_code: $("[name=home_code]").val(),
					work_address_1: $("[name=work_address_1]").val(),
					work_address_2: $("[name=work_address_2]").val(),
					work_city: $("[name=work_city]").val(),
					work_country: $("[name=work_country]").val(),
					work_code: $("[name=work_code]").val()
				},
				function(data){
					console.log("data.success = " + data.success);
					if(data.success == true){
						alert("Success a Customer Recording.");
					}
					else{
						alert("Fail to Record a Customer.");
					}
				},
				"json"
			);
		});
</script>

</body>
</html>