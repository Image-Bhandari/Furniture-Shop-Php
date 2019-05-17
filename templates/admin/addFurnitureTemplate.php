<!---template to add furniture-->
<h2>Add Furniture</h2>

			<form action="" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php if(isset($row['id'])) echo $row['id']; ?>" />
				<label>Name</label>
				<input type="text" name="name" value="<?php if(isset($row['name'])) echo $row['name']; ?>" />

				<label>Description</label>
				<textarea name="description"><?php if(isset($row['description'])) echo $row['description']; ?></textarea>

				<label>Price</label>
				<input type="text" name="price" value="<?php if(isset($row['price'])) echo $row['price']; ?>" />
		
				<label>Category</label>
				<select name="categoryId">
				<?php

					foreach ($stmt as $row) {
						echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
					}

				?>

				</select>

				<label>Image</label>

				<input type="file" name="image"/>
				<label>In Stock:</label>
				<input type="hidden" name="visibility" value="H" />
				<input type="checkbox" name="visibility" value="S" checked />
				<label>First Hand:</label>
				<input type="hidden" name="item_condition" value="Second Hand" />
				<input type="checkbox" name="item_condition" value="First Hand" checked />
				<input type="submit" name="submit" value="Add" />

			</form>