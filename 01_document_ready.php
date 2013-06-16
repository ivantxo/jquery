<!DOCTYPE HTML>
<html>
<head>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

	<script>
		$(document).ready(function() {
			console.log("Console");
		});
	
		// shorthand for $(document).ready
		/*$(function() {
			console.log("Console");
		});*/
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

<div>How to write in console when document is ready?</div>

<div class='clear'>
	<a>Hello</a>
</div>

</body>
</html>
