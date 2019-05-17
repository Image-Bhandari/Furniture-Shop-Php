<!--test for announcement-->
<?php
USE PHPUnit\Framework\TestCase;
require 'functions/announcementTest.php';

class AnnouncementTableTest extends TestCase{
	function testAnnouncementWithoutAll(){
		$criteria = [
			"topic"=>"",
			"description"=>"",
			"offer_start_date"=>"",
			"valid_upto_date"=>""

		];
		$result=testAnn($criteria);
		$this->assertFalse($result);
	}
	function testAnnouncementWithoutTopic(){
		$criteria = [
			"topic"=>"",
			"description"=>"nice",
			"offer_start_date"=>"2019-01-23",
			"valid_upto_date"=>"2019-06-12"

		];
		$result=testAnn($criteria);
		$this->assertFalse($result);
	}
	function testAnnouncementWithoutDescription(){
		$criteria = [
			"topic"=>"Sofa Sale",
			"description"=>"",
			"offer_start_date"=>"2019-01-23",
			"valid_upto_date"=>"2019-06-12"

		];
		$result=testAnn($criteria);
		$this->assertFalse($result);
	}
	function testAnnouncementWithoutOfferStartDate(){
		$criteria = [
			"topic"=>"Sofa Sale",
			"description"=>"nice",
			"offer_start_date"=>"",
			"valid_upto_date"=>"2019-06-12"

		];
		$result=testAnn($criteria);
		$this->assertFalse($result);
	}
	function testAnnouncementWithoutValidUptoDate(){
		$criteria = [
			"topic"=>"Sofa Sale",
			"description"=>"nice",
			"offer_start_date"=>"2019-01-23",
			"valid_upto_date"=>""

		];
		$result=testAnn($criteria);
		$this->assertFalse($result);
	}
	function testAnnouncementWithAll(){
		$criteria = [
			"topic"=>"Sofa Sale",
			"description"=>"nice",
			"offer_start_date"=>"2019-01-23",
			"valid_upto_date"=>"2019-06-12"

		];
		$result=testAnn($criteria);
		$this->assertTrue($result);
	}
}

?>