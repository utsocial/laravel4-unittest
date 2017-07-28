<?php

use Acme\PurchasesController;
use Acme\Billing\StripeBilling;

//require __DIR__.'/../vendor/autoload.php';

class PurchasesControllerTest extends \PHPUnit_Framework_TestCase
{
	
	public function setUp() {
			
	}
	public function test_bills_a_user() {
		$m = Mockery::Mock(new StripeBilling);
		$m->shouldReceive('charge')->once()->andReturn("Yo've been X'd");
		$mocked_controller = new PurchasesController($m);
		$result = $mocked_controller->buy();
		var_dump($result);
	}
	
}
?>