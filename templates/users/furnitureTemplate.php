<!--template for furniture-->
<?php
?>
<main class="admin">
	<section class="left">
		<ul>
			<?php
			foreach ($categoryQuery as $category) {
				echo '<li>';
				echo '<h4>'.'<a href="index.php?page=furniture&cat_id='.$category['id'].'">' . $category['name'] .'</a>'. '</h4>';
				echo '</li>';
			}
			?>
		</ul>
	</section>

	<section class="right">
		<h1>Furniture</h1>
		<ul class="furniture">
		<li>
			<form>
			<label>Sort:</label>
			<!--gets the id-->
			<select id="categoryId" onchange="clickme(categoryId.value,item_condition.value)">
				<?php
					foreach ($stmt as $row) {
						echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
					}
				?>

				</select>
				<!--calls the function click me-->
				<select id="item_condition" onchange="clickme(categoryId.value,item_condition.value)">
					<option value="First Hand">First Hand</option>
					<option value="Second Hand">Second Hand</option>
				
				</select>
</form>
		</li>

<div id="new">
	<?php

	foreach ($furnitureQuery as $furniture) {//checks the query
		echo '<li>';
		if (file_exists('../images/furniture/' . $furniture['id'] . '.jpg')) {
			echo '<a href=".../images/furniture/' . $furniture['id'] . '.jpg"><img src="../images/furniture/' . $furniture['id'] . '.jpg" /></a>';//furniture adding image
		}

		echo '<div class="details">';
		echo '<h2>' . $furniture['name'] . '</h2>';
		echo '<h4>' . $furniture['item_condition'] . '</h4>';
		echo '<h4>£' . $furniture['price'] . '</h4>';
		echo '<p>' . $furniture['description'] . '</p>';

		echo '</div>';
		echo '</li>';
	}

	?>

</ul>
</div>
</section>
</main>


