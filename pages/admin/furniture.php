<!--page to load template furniture-->
<?php
$title="Furniture";
$furniture=new DatabaseTable('furniture');//database table 
	if(isset($_POST['submit'])){//submit varibale
	unset($_POST['submit']);//unset submit
	$furniture->delete('id',$_POST['id']);//gets the id and delete it
	header('location:index.php?page=furniture');
	}
$fur=$furniture->findAll();	//find all
$content=loadTemplate('../templates/admin/furnitureTemplate.php',['furnitureQuery'=>$fur]);//load template
?>
