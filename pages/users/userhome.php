<!--page to laod template home-->
<?php
	$title = "Fran's Furniture - Home";
	$furniture=new DatabaseTable('announcement');//databse table
	$fur=$furniture->findAll();//findall function
	$content = loadTemplate('../templates/users/indextemplate.php', ['furnitureQuery'=>$fur]);//load template
?>