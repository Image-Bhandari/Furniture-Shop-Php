<!--template for index-->
<main class="home">
		<p>Welcome to Fran's Furniture. We're a family run furniture shop based in Northampton. We stock a wide variety of modern and antique furniture including laps, bookcases, beds and sofas.</p>

<!--display the offer-->
	<ul class="furniture">
		<li><h1>OFFERS !  </h1></li>
		<?php
	
	foreach ($furnitureQuery as $furniture) {
		
		echo '<li>';

		if (file_exists('../images/announcement/' . $furniture['id'] . '.jpg')) {
			echo '<a href=".../images/announcement/' . $furniture['id'] . '.jpg"><img src="../images/announcement/' . $furniture['id'] . '.jpg" /></a>';
		}

		echo '<div class="details">';
		echo '<h2>' . $furniture['topic'] . '</h2>';
		echo '<h4> Offer starts from: ' . $furniture['offer_start_date'] . '</h4>';
		echo '<h4> Last date for offer: ' . $furniture['valid_upto_date'] . '</h4>';
		echo '<p>' . $furniture['description'] . '</p>';

		echo '</div>';
		echo '</li>';
	}

	?>
</ul>
	</main>