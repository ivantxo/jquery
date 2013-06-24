<!DOCTYPE HTML>
<html>
<head>
	<title>MyPhoneBook</title> 
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

	<script>
		$(document).ready(function() {
			$('#search_results').slideUp();
			$('#search_button').click(function(e) {
				e.preventDefault();
				ajax_search();
			});

			$('#search_term').keyup(function(e) {
				e.preventDefault();
				ajax_search();
			});
		});

		function ajax_search() {
			$('#search_results').show();
			var search_val = $('#search_term').val();
			if (search_val.length > 0) {
				search_val = search_val.toLowerCase();
				$.post(
					'./find.php', 
					{ 
						search_term : search_val
					}, 
					function(data) {
						if (data.length > 0) {
							$('#search_results').html(data);
						}
					}
				);
			} else {
				$('#search_results').hide();
			}
		}
	</script>
		
	<style>
	</style>
</head>
<body>

	<h1>Search on MyPhoneBook</h1> 
	<form id="searchform" method="post"> 
		<div> 
			<label for="search_term">Name/Phone</label>
			<input type="text" name="search_term" id="search_term" />
			<input type="submit" value="search" id="search_button" /> 
		</div> 
	</form>
	
	<div id="search_results"></div> 

</body>
</html>
