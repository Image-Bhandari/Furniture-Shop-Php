<!--tenplate add edit admin-->
<h2>Add / Edit Admins</h2>

			<form action="index.php?page=addAdmins" method="POST" enctype="multipart/form-data">
				<!--id-->
				<input type="hidden" name="id" value="<?php if(isset($row['id'])) echo $row['id']; ?>" />
				<!--label for email-->
				<label>Email</label>
				<input type="email" name="email" value="<?php if(isset($row['email'])) echo $row['email']; ?>" />
				<!--label for Password-->
				<label>Password</label>
				<input type="Password" name="password" value="<?php if(isset($row['password'])) echo $row['password']; ?>" />

				<input type="submit" name="submit" value="Save" />

			</form>