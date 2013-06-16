<!DOCTYPE HTML>
<html>
<!------------- HEAD ------------->
<head>
	<title>jQuery Test</title>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	
	<script>
		$(document).ready(function() {
			$('#btn_ican').click(function() {
				$('ul.list1 > li').css('border', '1px dotted blue');
			});

			$('#btn_clear').click(function() {
				$('ul.list1 > li').css('border', 'none');
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
		text-align: left;
	}
	.container {
		width: 300px
	}
	ul {
		margin-top: 2px;
	}
	h3 {
		margin-bottom: 2px;
	}
	</style>
</head>

<!------------- BODY ------------->
<body>

	<div class='intro'>How to put a border around the list elements children of class <b>topnavigation</b></div>

	<div class='topnavigation container clear' id='section1'>
		<h3>Top Navigation:</h3>
		<ul class='list1'>
			<li id='first'>One</li>
			<li id='second'>Two</li>
			<li id='third'>Three</li>
		</ul>
	
		<div class='container' id='section2'>
			<p class="para">Bacon ipsum dolor sit amet salami ball tip short loin drumstick...</p>
		</div>
	</div>
	
	<div class='bottomnavigation' id='section2'>
		<h3>Bottom Navigation:</h3>
		<ul class='selection'>
			<li id='one'>One</li>
			<li id='two'>Two</li>
			<li id='three'>Three</li>
		</ul>
		
		<div class='container'>
			<p class="para">Bacon ipsum dolor sit amet salami ball tip short loin drumstick...</p>
		</div>
	</div>
	
	<button id='btn_ican'>I can do it</button>
	<button id='btn_clear'>Clear</button>
	
</body>
</html>
