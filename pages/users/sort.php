<!--page to laod template sort-->
<?php
include '../../db/connection.php';//include database
require '../../classes/databasetable.php';//include databse
$furnitures=new DatabaseTable('furniture');//include furniture table
$fur=$furnitures->test($_POST['id'],$_POST['value']);//find the value id

foreach ($fur as $furniture) {//for each function
		
		echo '<li>';
// if (file_exists('../images/furniture/' . $furniture['id'] . '.jpg')) {
			echo '<a href=".../images/furniture/' . $furniture['id'] . '.jpg"><img src="../images/furniture/' . $furniture['id'] . '.jpg" /></a>';//image
		// }

		echo '<div class="details">';
		echo '<h2>' . $furniture['name'] . '</h2>';
		echo '<h4>' . $furniture['item_condition'] . '</h4>';
		echo '<h4>£' . $furniture['price'] . '</h4>';
		echo '<p>' . $furniture['description'] . '</p>';

		echo '</div>';
		echo '</li>';
	}

?>
