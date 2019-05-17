<!--function testFur-->
<?php
function testFur($data){//parameter passed
	extract($data);//extract the data
	$bol=true;//value made true
	if($name==''){
		$bol=false;
	}
	if($description==''){
	$bol=false;
	}
	if($price==''){
		$bol=false;
	}
	return $bol;
}

?>