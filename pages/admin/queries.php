<!--page to load templae contact-->
<?php
$title="Queries";	
$query=new DatabaseTable('queries');//database table

	if(isset($_POST['submit'])){//submit variable
	unset($_POST['submit']);//unset the variable
	$a=(int)$_POST['id'];//pass the id
	$_POST['id']=$a;//post the id
	$_POST['status']="Completed";//status post as complete
	var_dump($_POST);//dump the posted value
	$query->update($_POST, 'id');//update the id
	//header('location:index.php?page=queries');
	}
$que=$query->findAll();
$content=loadTemplate('../templates/admin/queryTemplate.php',['contactQuery'=>$que]);

?>