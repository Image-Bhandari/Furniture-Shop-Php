<?php
$title="Furniture";
$furniture=new DatabaseTable('furniture');//database table
if(isset($_GET['cat_id'])){//check the id
		$fur=$furniture->find('categoryId',$_GET['cat_id']);//gets the id
	}
	else{
		$fur=$furniture->find('visibility', 'S');//visibility
	}

	// if(isset($_POST['lol'])){
	// 	$fur=$furniture->test('2' , "First Hand");
	// }

$sortF=$furniture->findAll();//calls the findall function
$category=new DatabaseTable('category');//connect the category
$cat=$category->findAll();//calls the findall function
$sortC=$category->findAll();//calls the findall function
$content=loadTemplate('../templates/users/furnitureTemplate.php',['furnitureQuery'=>$fur, 'categoryQuery'=>$cat, 'stmt'=>$sortC, 'tmts'=>$sortF]);//load the template
?>
