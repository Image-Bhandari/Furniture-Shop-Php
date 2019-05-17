<!--test for admin form-->
<?php
USE PHPUnit\Framework\TestCase;
require 'functions/adminTest.php';

class AdminTableTest extends TestCase{
	function testAdminWithoutAll(){
		$criteria = [
			"email"=>"",
			"password"=>""

		];
		$result=testAdm($criteria);
		$this->assertFalse($result);
	}
	function testAdminWithoutEmail(){
		$criteria = [
			"email"=>"",
			"password"=>"password"

		];
		$result=testAdm($criteria);
		$this->assertFalse($result);
	}
	function testAdminWithoutPassword(){
		$criteria = [
			"email"=>"admin@admin.com",
			"password"=>""

		];
		$result=testAdm($criteria);
		$this->assertFalse($result);
	}
	function testAdminWithAll(){
		$criteria = [
			"email"=>"admin@admin.com",
			"password"=>"password"

		];
		$result=testAdm($criteria);
		$this->assertTrue($result);
	}

}