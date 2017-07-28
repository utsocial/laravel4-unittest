<?php

//require __DIR__.'/../vendor/autoload.php';

class FooTestMocked extends \PHPUnit_Framework_TestCase
{
	public function tearDown() {
		Mockery::close();
	}
	public function test_mockery() {
		$mock = Mockery::mock('Acme\Bar');
		$mock->shouldReceive('run')->once()->andReturn('mocked');
		var_dump($mock->run());
	}
	
}
?>