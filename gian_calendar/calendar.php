<html>
<head>
	<title>Calendar</title>
</head>
<body>
	Year:
	<select id ="years" name = "year">
		<?php for($i = 2014;$i >=1985;$i--){
			echo "<option value ='".$i."'>".$i."</option>";
		} ?>
	</select>
	Month:
	<select id ="months" name ="month">
		<option value ="jan">January</option>
		<option value ="feb">February</option>
		<option value ="mar">March</option>
		<option value ="apr">April</option>
		<option value ="may">May</option>
		<option value ="jun">June</option>
		<option value ="jul">July</option>
		<option value ="aug">August</option>
		<option value ="sep">September</option>
		<option value ="oct">October</option>
		<option value ="nov">November</option>
		<option value ="dec">December</option>
	</select>
	Day:
	<select id="days" name ="day">
		<?php 
			for($i =1;$i <=31;$i++){
				echo "<option value ='".$i."'>".$i."</option>";
			}
		 ?>
	</select>
	<div id="print"></div>

<script type="text/javascript" src="jquery.1.10.2.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#years").on("change", function(){
			var year = $(this).val();
			var month = $("#months").val();
			$.ajax({
				url: "conditions.php",
				data: {year: year, month: month},
				dataType: "JSON",
				method: "GET",

				success:function(r){
					var str = '';
					for (i = 1; i <= r.day; i++) {
						str += '<option value="' + i +'">';
						str += i;
						str += '</option>';
					}
					$("#days").html(str);
				}

			});
		});

		$("#months").on("change", function(){
			var year = $("#years").val();
			var month = $(this).val();
			$.ajax({
				url: "conditions.php",
				data: {year: year, month: month},
				dataType: "JSON",
				method: "GET",

				success:function(r){
					var str = '';
					for (i = 1; i <= r.day; i++) {
						str += '<option value="' + i +'">';
						str += i;
						str += '</option>';
					}
					$("#days").html(str);
				}

			});
		});
	});
</script>
</body>
</html>