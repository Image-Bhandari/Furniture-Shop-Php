<!--layout template-->
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../css/styles.css"/>
		<script src="../pages/users/sort.js"></script>
		<title> <?php echo $title; ?></title>

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
			<li><a href="index.php?page=userhome">Home</a></li>
			<li><a href="index.php?page=furniture">Our Furniture</a></li>
			<li><a href="index.php?page=about">About Us</a></li>
			<li><a href="index.php?page=contact">Contact us</a></li>
			<li><a href="index.php?page=frequentQue">FAQs</a></li>
			<li><a href="../admin/index.php">Admin Login</a></li>
		</ul>

	</nav>
<img src="../images/randombanner.php"/>
   <?php echo $content;?>
	

	<footer>
		&copy; Fran's Furniture <?php echo date ('Y');?>
	</footer>
</body>
</html>

