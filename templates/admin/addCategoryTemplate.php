<!--template add edit catgepry-->
<section class="right">

		<h2>Add / Edit Catgeory</h2>
		<form action="index.php?page=addcategories" method="POST">
			<label>Category name</label>
			<input type="hidden" name="id" value="<?php if(isset($row['id'])) echo $row['id']; ?>" />
			<input type="text" name="name" required="" value="<?php if(isset($row['id'])) echo $row['name']; ?>" /> 
			<input type="submit" name="submit" value="Save"/> 

		</form>
		
</section>

