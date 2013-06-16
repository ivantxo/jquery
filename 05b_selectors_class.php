<!DOCTYPE HTML>
<html>
<head>
	<title>jQuery Test</title>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	
	<script>
	$(document).ready(function () {
		$("#btn81").click(function() {
			/*var boxes = $("#boxes");
			boxes.find(".general,.special,.other").css("background-color", "orange");*/

			$(".general,.special,.other").css("background-color", "orange");
	    });

	    $("#btn82").click(function() {
	    	$("#boxes div").css("background-color", "");
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

<div id='boxes' class='clear'>
	<table>
        <tr>
            <td>
                <div class="general">Clase General</div>
            </td>
            <td>
                <div class="noClass">Clase NoClass</div>
            </td>
            <td>
                <div class="special">Clase Special</div>
            </td>
            <td>
                <div class="general">Clase General</div>
            </td>
            <td>
                <div class="noClass">Clase NoClass</div>
            </td>
            <td>
                <div class="special">Clase Special</div>
            </td>
            <td>
                <div class="other">Clase Other</div>
            </td>
        </tr>
    </table>
</div>

<div class='clear'>
	<button type="button" id="btn81">General - Special - Other</button>&nbsp;
	<button type="button" id="btn82">Reset</button>&nbsp;
</div>

</body>
</html>
