<!--function testAnn-->
<?php
function testAnn($data){//parameter passed
	extract($data);//extract the data
	$bol=true;//value made true
	if($topic==''){
		$bol=false;
	}
	if($description==''){
	$bol=false;
	}
	if($offer_start_date==''){
		$bol=false;
	}
	if($valid_upto_date==''){
		$bol=false;
	}
	return $bol;
}

?>