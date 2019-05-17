<!--template to manage admin-->
<h2>Manage Admins</h2>

<a class="new" href="index.php?page=addAdmins">Add Admins</a>

<?php
	echo '<table>';
	echo '<thead>';
	echo '<tr>';
	echo '<th>Name</th>';
	echo '<th style="width: 10%">Password</th>';
	echo '<th style="width: 5%">&nbsp;</th>';
	echo '<th style="width: 5%">&nbsp;</th>';
	echo '</tr>';

	foreach ($adminQuery as $admin) {
		echo '<tr>';
		echo '<td>' . $admin['email'] . '</td>';
		echo '<td>' . $admin['password'] . '</td>';
		echo '<td><a style="float:right" href="index.php?page=addAdmins&id=' . $admin['id'] . '">Edit</a></td>';//get th id
		echo '<td><form method="post" action="index.php?page=manageAdmins">
		<input type="hidden" name="id" value="' . $admin['id'] . '" />
		<input type="submit" name="submit" value="Delete" />
		</form></td>';
		echo '</tr>';
	}

	echo '</thead>';
	echo '</table>';

?>

