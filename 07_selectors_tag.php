<!DOCTYPE HTML>
<html>
<!------------- HEAD ------------->
<head>
	<title>jQuery Test</title>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	
	<script>
		$(document).ready(function() {
			$('#btn_div').click(function() {
				$('div').css('border', '3px solid #2B3856');
				$('span').css('border', 'none');
			});

			$('#btn_span').click(function() {
				$('span').css('border', '3px solid #2B3856');
				$('div').css('border', 'none');
			});
		});
	</script>
	
	<style>
	div {
		background-color: #EEEEEE;
	}
	span {
		background-color: #98AFC7;
	}
	div,span {
	    width: 60px;
	    height: 60px;
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

	jQuery selectors by <i>tag</i>:<br><br><br>
	
	<div>DIV #1</div>
	<span>SPAN #1</span>
	<div>DIV #2</div>
	<span>SPAN #2</span>
	<div>DIV #3</div>
	<span>SPAN #3</span>
	<br><br><br><br><br><br>
	<button type="button" id="btn_div">I like DIVS</button>&nbsp;
	<button type="button" id="btn_span">I like SPANS</button>

</body>
</html>
