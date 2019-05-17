<?php

	$title="Add Furniture";	
	$categories=new DatabaseTable('category');//database table
	$furniture=new DatabaseTable('furniture');

	if (isset($_GET['id'])) {//id
	$title="Edit Furniture";
	$stmt = $furniture->find('id',$_GET['id']);//find the id
	$row = $stmt->fetch();//fetch the data

	}
else
{
	$row =[];
}

if(isset($_POST['submit'])){
	if($_POST['id']==''){//checks the null fiel
		unset($_POST['id']);//unset the id
		unset($_POST['submit']);//unset the submit
		$furniture->insert($_POST);//insert the file
		if ($_FILES['image']['error'] == 0) {//image uploading
			$fileName = $pdo->lastInsertId() . '.jpg';
			move_uploaded_file($_FILES['image']['tmp_name'], '/var/www/html/furniture/images/furniture/' . $fileName);//file
		}
		header('Location:index.php?page=furniture');
	}
	else{
	unset($_POST['submit']);//unset submit
	$furniture->update($_POST, 'id');//update the id
	header('Location:index.php?page=furniture');
}
}
	
    $cat=$categories->findAll();//findall function
	$content=loadTemplate('../templates/admin/addFurnitureTemplate.php',['stmt'=>$cat, 'row'=>$row]);//load template
?>
