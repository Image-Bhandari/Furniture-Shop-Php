<!--template to view the furniture-->
	<h2>Furniture</h2>

	<a class="new" href="index.php?page=addfurniture">Add new furniture</a>

	<?php
	echo '<table>';
	echo '<thead>';
	echo '<tr>';
	echo '<th>Name</th>';
	echo '<th style="width: 10%">Price</th>';
	echo '<th style="width: 5%">Show/Hide</th>';
	echo '<th style="width: 5%">Condition</th>';
	echo '<th style="width: 5%">&nbsp;</th>';
	echo '<th style="width: 5%">&nbsp;</th>';
	echo '</tr>';

	foreach ($furnitureQuery as $furniture) {
		echo '<tr>';
		echo '<td>' . $furniture['name'] . '</td>';
		echo '<td>£' . $furniture['price'] . '</td>';
		echo '<td>' . $furniture['visibility'] . '</td>';
		echo '<td>' . $furniture['item_condition'] . '</td>';
		echo '<td><a style="float: right" href="index.php?page=addfurniture&id=' . $furniture['id'] . '">Edit</a></td>';//get th eid
		echo '<td><form method="post" action="">
		<input type="hidden" name="id" value="' . $furniture['id'] . '" />
		<input type="submit" name="submit" value="Delete" />
		</form></td>';
		echo '</tr>';
	}

	echo '</thead>';
	echo '</table>';

		?>

