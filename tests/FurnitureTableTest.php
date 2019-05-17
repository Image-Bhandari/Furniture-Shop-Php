<!--test for furniture table-->
<?php
USE PHPUnit\Framework\TestCase;
require 'functions/furnitureTest.php';

class FurnitureTableTest extends TestCase{
	function testFurnitureWithoutAll(){
		$criteria = [
			"name"=>"",
			"description"=>"",
			"price"=>""

		];
		$result=testFur($criteria);
		$this->assertFalse($result);
	}
	function testFurnitureWithoutName(){
		$criteria = [
			"name"=>"",
			"description"=>"nice",
			"price"=>"2"

		];
		$result=testFur($criteria);
		$this->assertFalse($result);
	}
	function testFurnitureWithoutDescription(){
		$criteria = [
			"name"=>"ram",
			"description"=>"",
			"price"=>"2"

		];
		$result=testFur($criteria);
		$this->assertFalse($result);
	}
	function testFurnitureWithoutPrice(){
		$criteria = [
			"name"=>"ram",
			"description"=>"nice",
			"price"=>""

		];
		$result=testFur($criteria);
		$this->assertFalse($result);
	}
	function testAllValueEntered(){
		$criteria = [
			"name"=>"ram",
			"description"=>"nice",
			"price"=>"2"

		];
		$result=testFur($criteria);
		$this->assertTrue($result);
	}
}

?>