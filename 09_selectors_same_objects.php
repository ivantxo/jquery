<!DOCTYPE HTML>
<html>
<!------------- HEAD ------------->
<head>
	<title>jQuery Test</title>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	
	<script>
		$(document).ready(function() {
			$('#btn_ican').click(function() {
				$('.container .selection li:nth-child(2)')
					.css({
						'border': '2px #FF0000 solid',
						'background': '#FFFFCC',
						'padding': '.2em'
					});
			});

			$('#btn_clear').click(function() {
				$('.container .selection li:nth-child(2)')
					.css({
						'border': 'none',
						'background': 'none',
						'padding': '0em'
					});
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

	<div class='intro'>How can you select the second element in the second list? Remember there are no ids!</div>

	<div class='container clear' id='section1'>
		<h3>Section1:</h3>
		<ul class='list1'>
			<li id='first'>One</li>
			<li id='second'>Two</li>
			<li id='third'>Three</li>
		</ul>
	
		<div class='container' id='section2'>
			<p class="para">Bacon ipsum dolor sit amet salami ball tip short loin drumstick...</p>
		</div>
	</div>
	
	<div class='container' id='section2'>
		<h3>Section2:</h3>
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
