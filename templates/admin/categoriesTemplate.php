<!---to view the catgory-->
<h2>Categories</h2>
			<!--add the cateorgu-->
			<a class="new" href="index.php?page=addcategories">Add new category</a>

			<?php
			echo '<table>';
			echo '<thead>';
			echo '<tr>';
			echo '<th>Name</th>';
			echo '<th style="width: 5%">&nbsp;</th>';
			echo '<th style="width: 5%">&nbsp;</th>';
			echo '</tr>';

			foreach ($categoriesQuery as $category) {//foeach value
				echo '<tr>';
				echo '<td>' . $category['name'] . '</td>';
				echo '<td><a style="float: right" href="index.php?page=addcategories&id=' . $category['id'] . '">Edit</a></td>';//get id
				echo '<td><form method="post" action="">
				<input type="hidden" name="id" value="' . $category['id'] . '" />
				<input type="submit" name="submit" value="Delete" />
				</form></td>';
				echo '</tr>';
			}

			echo '</thead>';
			echo '</table>';
