<body>

<div id="container">
	<h1>Add Customer</h1>
	
	<form id="add_cus" action="#" method="post">
		<div id="body">
			<div>
				cus_name : <input name="cus_name" value="" />
			</div>
			<div>
				cus_surname : <input name="cus_surname" value="" />
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
	$(document).ready(function(){
		$("#submit").live("click", function(){
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
					
				},
				"json"
			);
		});
	});
</script>

</body>
</html>