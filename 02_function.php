<!DOCTYPE HTML>
<html>
<head>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

	<script>
	    $(document).ready(function() {
	        function readyFn (jquery) {
	    	    console.log("Function");
	    	}
	    	// With:
	    	//$(document).ready(readyFn);
	    		
	    	// Or:
	    	$(window).load(readyFn);
	    });
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
		}
	</style>

</head>

<body>
	<div>How to write in console when document is ready by using a jQuery method?</div>
	
	<div class='clear'>
		<a>Hello</a>
	</div>
</body>
</html>
