<!--page to laod template contact-->
<?php

$title="Contact";

$query=new DatabaseTable('queries');//database table

if(isset($_POST['submit'])){//checks the variable
	unset($_POST['submit']);//unset the post
	$query->insert($_POST);//insert the value
	header('location:index.php?page=contact');//header location
	}

$content=loadTemplate('../templates/users/contactTemplate.php',[]);//load the template
?>
