<!---page to load template categories-->
<?php

$title="Categories";
$categories=new DatabaseTable('category');//database table
	
	if(isset($_POST['submit'])){//checks the varibale
	unset($_POST['submit']);//unset the submit
	$categories->delete('id',$_POST['id']);//delete the category
	header('location:index.php?page=categories');
	}

$cat=$categories->findAll();//find all	
$content=loadTemplate('../templates/admin/categoriesTemplate.php',['categoriesQuery'=>$cat]);//load template
?>
