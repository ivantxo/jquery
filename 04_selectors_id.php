<!DOCTYPE HTML>
<html>
<head>
	<title>jQuery Test</title>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	
	<script>
		$(document).ready(function() {
			$("#name").focus();
		});

		// Selector By Id
		$.fn.MessageBox = function() {
			var name = $("#name").val();
			alert("Hello " + name);
		};
	</script>

	<style>
		div {
			background-color: #EEEEEE;
		    float: left;
		    padding: 10px;
		    margin: 10px;
		    text-align: center;
	    	margin-right: 15px;
	    	margin-top: 5px;
	    	margin-bottom: 5px;
		}
		.clear {
			clear: both;
			background-color: #FFFFFF;
			text-align: left;
		}
	</style>
</head>
<body>
	<div>jQuery selectors by <i>id</i>:</div>

	<div class='clear'>
		<label>Name:</label>
		<input type="text" id="name"><br>
		<input type="button" id="btn_submit" value="Click Me" onClick="$(this).MessageBox()">
	</div>

</body>
</html>
