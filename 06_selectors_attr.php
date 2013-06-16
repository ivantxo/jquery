<!DOCTYPE HTML>
<html>
<head>
	<title>jQuery Test</title>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	
	<script>
	$(document).ready(function () {
		$('#btn_good').click(function() {
			$("#boxes input").css("background-color", "");
	        $("#boxes input[value='good']").css("background-color", "orange");
		});

		$('#btn_bad').click(function() {
			$('#boxes input').css('background-color', '');
			$("#boxes input[value!='good']").css('background-color', 'orange');
		})
	});	
	</script>
	
	<style>
		label{
		    display: inline-block;
		    float: left;
		    clear: left;
		    width: 100px;
		    text-align: right;
		}
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

<div>jQuery selectors by <i>attr</i>:</div>

<div id='boxes' class='clear'>
	<div class='clear'>
		<label>Good:&nbsp;&nbsp;</label><input type='text' value='good'>
	</div>
	<div class='clear'>
		<label>GoodBad:&nbsp;&nbsp;</label><input type='text' value='goodbad'>
	</div>
	<div class='clear'>
		<label>Bad:&nbsp;&nbsp;</label><input type='text' value='bad'>
	</div>
	<br>
	<div class='clear'>
		<label>&nbsp;</label>
		<button type="button" id="btn_good">Good</button>&nbsp;
		<button type="button" id="btn_bad">Not Good</button>&nbsp;
	</div>
</div>
<br>

</body>
</html>
