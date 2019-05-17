<!---test for query-->
<?php
USE PHPUnit\Framework\TestCase;
require 'functions/queryTest.php';

class QueryTableTest extends TestCase{
	function testFurnitureWithoutAll(){
		$criteria = [
			"first_name"=>"",
			"surname"=>"",
			"email"=>"",
			"query"=>""

		];
		$result=testQue($criteria);
		$this->assertFalse($result);
	}
	function testFurnitureWithoutFirstName(){
		$criteria = [
			"first_name"=>"",
			"surname"=>"Bahadur",
			"email"=>"admin@admin.com",
			"query"=>"nice"

		];
		$result=testQue($criteria);
		$this->assertFalse($result);
	}
	function testFurnitureWithoutSurname(){
		$criteria = [
			"first_name"=>"Ram",
			"surname"=>"",
			"email"=>"admin@admin.com",
			"query"=>"nice"

		];
		$result=testQue($criteria);
		$this->assertFalse($result);
	}
	function testFurnitureWithoutEmail(){
		$criteria = [
			"first_name"=>"Ram",
			"surname"=>"Bahadur",
			"email"=>"",
			"query"=>"nice"

		];
		$result=testQue($criteria);
		$this->assertFalse($result);
	}
	function testFurnitureWithoutQuery(){
		$criteria = [
			"first_name"=>"Ram",
			"surname"=>"Bahadur",
			"email"=>"admin@admin.com",
			"query"=>""

		];
		$result=testQue($criteria);
		$this->assertFalse($result);
	}
	function testFurnitureWithAll(){
		$criteria = [
			"first_name"=>"Ram",
			"surname"=>"Bahadur",
			"email"=>"admin@admin.com",
			"query"=>"nice"

		];
		$result=testQue($criteria);
		$this->assertTrue($result);
	}
}

?>