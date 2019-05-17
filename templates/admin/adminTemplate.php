<!--admin template-->
<?php
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../css/styles.css"/>
		<title><?php echo $title ?></title>
	</head>
	<body>
	<header>
		<section>
			<aside>
				<h3>Opening Hours:</h3>
				<p>Mon-Fri: 09:00-17:30</p>
				<p>Sat: 09:00-17:00</p>
				<p>Sun: 10:00-16:00</p>
			</aside>
			<h1>Fran's Furniture</h1>

		</section>
	</header>
	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="index.php?page=furniture">Our Furniture</a></li>
			<li><a href="/about.html">About Us</a></li>
			<li><a href="index.php?page=queries">Contact us</a></li>
			<li><a href="index.php?page=adminhome&out=1">LogOut</a></li>
		</ul>

	</nav>
<img src="../images/randombanner.php"/>
	<main class="admin">

	<?php
	

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	?>

	<section class="left">
		<ul>
			<li><a href="index.php?page=categories">Categories</a></li>
			<li><a href="index.php?page=furniture">Furniture</a></li>
			<li><a href="index.php?page=manageAdmins">Manage Admins</a></li>
			<li><a href="index.php?page=queries">Queries</a></li>
			<li><a href="index.php?page=addAnnouncements">Announcements</a></li>
		</ul>
	</section>

	<section class="right">
	<?php
	echo $content;
	?>
	</section>
	<?php
	}

	else {
		?>
		<h2>Log in</h2>
		<?php
		
		  ?>

		<form action="index.php?page=adminhome" method="post" style="padding: 40px">
			<label>Enter Email</label>
			<input type="email" name="email" />
			<label>Enter Password</label>
			<input type="password" name="password" />

			<input type="submit" name="login" value="Log In" />
		</form>
	<?php
	}
	?>
	</main>

	<footer>
		&copy; Fran's Furniture 2019
	</footer>
</body>
</html>

