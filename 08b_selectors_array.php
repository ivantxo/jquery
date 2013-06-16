<!DOCTYPE HTML>
<html>
<!------------- HEAD ------------->
<head>
	<title>jQuery Test</title>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	
	<script>
		$(document).ready(function () {
			$('#btn_boxes').click(function() {
				$('.box').each(function() {
					$(this).animate({
						height:'toggle',
					});
				});
			});
		});
	</script>
	
	<style>
	.nobground {
		clear: both;
		background-color: #FFFFFF;
	}
	
	.box{
		background-color: #EEEEEE;
		width: 40px;
		height: 40px;
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

	<div>Selecting a group of elements with the same class and traversing them as a Javascript array</div>
	<br>
	
	<div class='box' id='box1'>Box#1</div>
	<div class='box' id='box2'>Box#2</div>
	<div class='box' id='box3'>Box#3</div>
	<div class='box' id='box4'>Box#4</div>
	<div class='box' id='box5'>Box#5</div>
	<div class='box' id='box6'>Box#6</div>
	
	<br><br><br>
	<div class='nobground'>
		<button type="button" id="btn_boxes">Animate boxes</button>
	</div>

</body>
</html>
