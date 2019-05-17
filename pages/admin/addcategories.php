<!--page to load template category-->
<?php	
	$title="Add categories";
	$categories=new DatabaseTable('category');//database table

	if (isset($_GET['id'])) {//checks the id
	$title="Edit Category";
	$stmt = $categories->find('id',$_GET['id']);//find the id
	$row = $stmt->fetch();//fetch the data

	}
else
{
	$row =[];
}
if(isset($_POST['submit'])){//checks if submit is set ot not
	if($_POST['id']==''){//pass the empty value
		unset($_POST['id']);//unset the id
		unset($_POST['submit']);//unset submit
		$categories->insert($_POST);//insert tge value
		header('Location:index.php?page=categories');
	}
	else{
	$criteria =[
		'name' => $_POST['name'],
		'id' => $_POST['id']
	];//passed value
	$categories->update($criteria, 'id');//update the id
	header('Location:index.php?page=categories');
}
}
$content=loadTemplate('../templates/admin/addCategoryTemplate.php',['row'=>$row]);

?>
