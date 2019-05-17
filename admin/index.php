<!--index page of the admin-->
<?php
	session_start();//start the session
	include '../db/connection.php';//data base connection
	require '../classes/databasetable.php';//database table class
	require '../functions/load_template.php';//load template

	if(isset($_GET['page'])){//checks the varibale is set ot not
		require '../pages/admin/'.$_GET['page']. '.php';//reuire the pages
	}
	else{
		require '../pages/admin/adminhome.php';//go to admin home page
	}
	if(isset($_GET['out'])){
		if ($_GET['out']==1){
			unset($_SESSION['loggedin']);//unset the logged in
		}
	}
	
	$tempVars = [
		'title' => $title,
		'content' => $content
	];
	
	echo loadTemplate('../templates/admin/adminTemplate.php', $tempVars);

	?> 
