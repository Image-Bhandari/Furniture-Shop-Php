<!--function testadmin-->
<?php
function testAdm($data){//parameter passed
	extract($data);//extract the data
	$bol=true;//value made true
	if($email==''){
		$bol=false;
	}
	if($password==''){
	$bol=false;
	}
	return $bol;
}

?>