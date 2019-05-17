<!--function testQue-->
<?php
function testQue($data){//parameter passed
	extract($data);//extract the data
	$bol=true;//value made true
	if($first_name==''){
		$bol=false;
	}
	if($surname==''){
	$bol=false;
	}
	if($email==''){
		$bol=false;
	}
	if($query==''){
		$bol=false;
	}
	return $bol;
}

?>