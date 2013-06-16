<!DOCTYPE HTML>
<html>
<head>
	<title>jQuery Test</title>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	
	<script>
	$(document).ready(function () {
		$("#btn81").click(function() {
			$(".general").css("background-color", "orange");
	        $(".special").css("background-color", "");
	    });

	    $("#btn82").click(function() {
	        $(".general").css("background-color", "");
	        $(".special").css("background-color", "orange");
	    });
	});	
	</script>
	
	<style>
		#boxes div {
    		width:50px;
    		height:50px;
    		border:1px solid black;
    		padding:5px;
    		text-align:center;
    		margin-right:15px;
    		margin-top:5px;
    		margin-bottom:5px;
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
		.clear {
			clear: both;
			background-color: #FFFFFF;
			text-align: left;
		}
	</style>
</head>
<body>

<div>jQuery selectors by <i>class</i>:</div>

<div id="boxes" class='clear'>
	<table>
        <tr>
            <td>
                <div class="general">Clase general</div>
            </td>
            <td>
                <div class="special">Clase special</div>
            </td>
            <td>
                <div class="general">Clase general</div>
            </td>
            <td>
                <div class="special">Clase special</div>
            </td>
        </tr>
    </table>
</div>

<div class='clear'>
	<button type="button" id="btn81">select class 'General' item</button>&nbsp;
	<button type="button" id="btn82">select class 'Special' item</button>&nbsp;
</div>

</body>
</html>
