<!--page to load add announcements-->
<?php

$title="Announcements";

$ann= new DatabaseTable('announcement');//connect to table

if(isset($_POST['submit'])){//checks the submit is set ot not
	unset($_POST['submit']);//unset the submit
	$ann->insert($_POST);//insert the value
	
}
	
$content=loadTemplate('../templates/admin/addAnnouncementsTemplate.php',[]);//load the template

?>