<!DOCTYPE HTML>
<html>
<head>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

	<script>
	    $(document).ready(function() {
	        // attr as a setter
	    	$("a").attr({
	        	title: "all titles are the same too!",
	    		href: "allMyHrefsAreTheSameNow.html"
	    	});
	
	    	// attr as a getter
	    	var a = $("a").attr("href");
	    	console.log("a", a);
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
	<div>Using <i>attr</i> as a setter and getter:</div>
	
	<div class='clear'>
		<a>Hello</a>
	</div>
</body>
</html>
