<?php
$conn = pg_connect("dbname=phone_book user=postgres password=postgrespa55wd") 
or die('Could not connect to Postgres server.' );

$term = strip_tags(substr($_POST['search_term'], 0, 100));

$sql = "
	SELECT 
		name, phone
	FROM directory
	WHERE LOWER(name) LIKE '%$term%'
	OR phone LIKE '%$term%'
	ORDER BY name ASC
";

$result = pg_query($conn, $sql);

$results = '';
if (pg_num_rows($result) > 0) {
	while ($row = pg_fetch_assoc($result)) {
		$results .= '<b>'.$row['name'].'</b> - ';
		$results .= $row['phone'];
		$results .= '<br/>';
	}
} else {
	$results = 'No matches';
}

echo $results;

?>
