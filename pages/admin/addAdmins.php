<!--page to add admin-->
<?php

$title="Add Admins";
$admins=new DatabaseTable('admins');//link to the table
	
	if (isset($_GET['id'])) {//checks the id
	$title="Edit Admin";
	$stmt = $admins->find('id',$_GET['id']);//gets the id
	$row = $stmt->fetch();//fetch the data

	}
else
{
	$row =[];
}
if(isset($_POST['submit'])){//checks the submit
	var_dump($_POST['email']);//post email
	var_dump($_POST['password']);//posst passowrd
	var_dump($_POST['id']);//post id
	if($_POST['id']==''){//pass the blank value
		unset($_POST['id']);//unset id
		unset($_POST['submit']);//unset submit
		$admins->insert($_POST);//insert the data
		header('Location:index.php?page=manageAdmins');
	}
	else{
	$criteria =[
		'email' => $_POST['email'],
		'password' => $_POST['password'],
		'id' => $_POST['id']
	];//passed in criteria
	$admins->update($criteria, 'id');//update the id
	header('Location:index.php?page=manageAdmins');
}
}

$content=loadTemplate('../templates/admin/addAdminTemplate.php',['row'=>$row]);
?>
