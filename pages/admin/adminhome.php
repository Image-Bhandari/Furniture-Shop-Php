<!--page to load template admin home-->
<?php
	$title = "Fran's Furniture - Admin";
	$admins=new DatabaseTable('admins');//link to database tables
	$adm = $admins->findAll();//finall function
	if (isset($_POST['login'])) {//checks the function
		if ($_POST['password'] == 'letmein' && $_POST['email'] == 'admin@admin.com') {//sets the passowrds
			$_SESSION['loggedin']=true;
			//var_dump($_SESSION['loggedin']);
		}
		else{
			foreach ($adm as $row) {//for each row
			if ($_POST['password'] == $row['password'] && $_POST['email'] == $row['email']) {
			$_SESSION['loggedin']=true;//session true
		}

		}
	}
}
	if(isset($_GET['out'])){
		unset($_SESSION['logggedin']);//unset logged in
			}

	$content = loadTemplate('../templates/admin/adminhomeTemplate.php', []);//load template
?>












