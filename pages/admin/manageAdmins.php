<!--page to laod manage admin-->
<?php
$title="Manage Admins";	
$admins=new DatabaseTable('admins');//database table

	if(isset($_POST['submit'])){//checks the varibale
	unset($_POST['submit']);//unset submit
	$admins->delete('id',$_POST['id']);//delete the id
	header('location:index.php?page=manageAdmins');
	}
$adm=$admins->findAll();
$content=loadTemplate('../templates/admin/manageAdminsTemplate.php',['adminQuery'=>$adm]);//load template

?>