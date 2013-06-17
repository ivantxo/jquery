<!DOCTYPE HTML>
<html>
<head>
	<title>jQuery Test</title>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	
	<script>
		$(document).ready(function() {
			$('#btn_yellow').click(function() {
				$('div').css('background-color', 'white');
				$('div[class^="yellow"]').css('background-color', 'yellow');
			});

			$('#btn_yt').click(function() {
				$('div').css('background-color', 'white');
				$('div[class^="yellow"],[class~="triangle"]').css('background-color', 'yellow');
			});

			$('#btn_clear').click(function() {
				$('div').css('background-color', 'white');
			});
		});
	</script>
	
	<style>
		div {
		    width: 60px;
		    height: 60px;
		    float: left;
		    padding: 10px;
		    margin: 10px;
		    text-align: center;
	    	margin-right: 15px;
	    	margin-top: 5px;
	    	margin-bottom: 5px;
	    	border: 1px solid black;
		}
	</style>
</head>
<body>

jQuery advanced selectors using regular expresions:
<br><br>

<div>Red Triangle</div>
<div class="blue triangle">Blue Triangle</div>
<div class="green triangle">Green Triangle</div>
<div class="green square">Green Square</div>
<div class="purple square">Purple Square</div>
<div class="yellow square">Yellow Square</div>
<div class="red circle">Red Circle</div>
<div class="yellow circle">Yellow Circle</div>
<div class="orange circle">Orange Circle</div>

<br><br><br><br><br><br>
<button type="button" id="btn_yellow">Yellow</button>&nbsp;
<button type="button" id="btn_yt">Yellow OR Triangle</button>&nbsp;
<button type="button" id="btn_clear">Clear</button>&nbsp;

</body>
</html>
