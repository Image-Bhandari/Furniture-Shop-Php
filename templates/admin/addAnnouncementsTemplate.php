<!--template to add announcement-->
<h2>Add Announcements</h2>

			<form action="" method="POST" enctype="multipart/form-data">
				<label>Topic</label>
				<input type="text" name="topic"/>

				<label>Description</label>
				<textarea name="description"></textarea>

				<label>Offer Starts From:</label>
				<input type="date" name="offer_start_date"/>

				<label>Offer Ends On:</label>
				<input type="date" name="valid_upto_date"/>	

				<label>Image</label>

				<input type="file" name="image" />	
				
				<input type="submit" name="submit" value="Add" />

			</form>