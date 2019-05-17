<!--test for category table-->
<?php
USE PHPUnit\Framework\TestCase;
require 'functions/categoryTest.php';

class CategoryTableTest extends TestCase{
	function testCategoryWithoutAll(){
		$criteria = [
			"name"=>""
		];
		$result=testCat($criteria);
		$this->assertFalse($result);
	}
	function testCategoryWithoutName(){
		$criteria = [
			"name"=>""
		];
		$result=testCat($criteria);
		$this->assertFalse($result);
	}
function testCategoryWithAll(){
		$criteria = [
			"name"=>"Ram"
		];
		$result=testCat($criteria);
		$this->assertTrue($result);
	}


}