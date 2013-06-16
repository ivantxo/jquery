<!DOCTYPE HTML>
<html>
<!------------- HEAD ------------->
<head>
	<title>jQuery Test</title>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	
	<script>
		$(document).ready(function () {
			$('#btn_ican').click(function() {
				$('li:eq(2)').css('background-color', '#EEEEEE');
			});

			$('#btn_clear').click(function() {
				$('li:eq(2)').css('background-color', '#EEEE54');
			});
		});
	</script>
	
	<style>
	.nobground {
		clear: both;
		background-color: #FFFFFF;
	}
	
	.dontfloat {
		clear: both;
	    text-align: left;
		background-color: #EEEE54;
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
	</style>
</head>

<!------------- BODY ------------->
<body>

	<div>The following elements don't have an id. How to select <i>Third item?</i></div>
	
	<div class='dontfloat'>
		<ul id="list">
		    <li>First Item</li>
		    <li>Second Item</li>
		    <li>Third Item</li>
		    <li>Fourth Item</li>
		</ul>
	</div>
	
	<div class='nobground'>
		<button type="button" id="btn_ican">I can do it</button>
		<button type="button" id="btn_clear">Clear</button>
	</div>

</body>
</html>
