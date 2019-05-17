<!--template to query-->
<h2>Queries</h2>
	<?php
	echo '<table>';
	echo '<thead>';
	echo '<tr>';
	echo '<th style="width: 5%">Email</th>';
	echo '<th style="width: 5%">Name</th>';
	echo '<th style="width: 5%">Surname</th>';
	echo '<th>Query</th>';
	echo '<th style="width: 5%">Status</th>';
	echo '<th style="width: 5%">&nbsp;</th>';
	echo '</tr>';

	foreach ($contactQuery as $query) {//for each alye
		echo '<tr>';
		echo '<td>' . $query['email'] . '</td>';
		echo '<td>' . $query['first_name'] . '</td>';
		echo '<td>' . $query['surname'] . '</td>';
		echo '<td>' . $query['query'] . '</td>';
		echo '<td>' . $query['status'] . '</td>';
		echo '<td><form method="post" action="">
		<input type="hidden" name="id" value="' . $query['email'] . '" />
		<input type="hidden" name="first_name" value="' . $query['first_name'] . '" />
		<input type="hidden" name="surname" value="' . $query['surname'] . '" />
		<input type="hidden" name="query" value="' . $query['query'] . '" />
		<input type="hidden" name="status" value="' . $query['status'] . '" />
		<input type="hidden" name="id" value="' . $query['id'] . '" />
		<input type="submit" name="submit" value="Completed" />
		</form></td>';
		echo '</tr>';
	}

	echo '</thead>';
	echo '</table>';

?>

