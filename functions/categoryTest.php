<!--function testCat-->
<?php
function testCat($data){//parameter passed
	extract($data);//extract the data
	$bol=true;//value made true
	if($name==''){
		$bol=false;
	}
	return $bol;
}

?>