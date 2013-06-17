<!DOCTYPE HTML>
<html>
<head>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

	<script>
	$(document).ready(function() {

		$('input[type="text"]').focus();
		
		$('#btn_human').click(function() {
			var total = $('input[type="text"]').val();
			if (total == 5) {
				alert('All right. You are a human.');
			} else {
				alert('Try again');
				$('input[type="text"]').val('');
				$('input[type="text"]').focus();
			}
		});
	});
	</script>

	<style>
		.intro {
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
		}
		label {
		    display: inline-block;
		    float: left;
		    clear: left;
		    width: 60px;
		    text-align: right;
		}
	</style>

</head>
<body>
	<div class='intro'>jQuery selectors with forms</div>
	
	<div class='clear'>
		<label for='operation'>1 + 4 =&nbsp;&nbsp;</label>
		<input type="text" id='operation'>
		
		&nbsp;<button id='btn_human'>Are you human?</button>
	</div>
	
</body>
</html>
