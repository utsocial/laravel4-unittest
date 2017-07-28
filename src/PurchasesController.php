<?php 
namespace Acme;

use Acme\Billing\StripeBilling;

Class PurchasesController {
	
	private $stripe;		// used to inyect dependences
	
	function __construct(StripeBilling $stripe) {
		$this->stripe = $stripe;
	}
	
	public function buy() {
		$chargeInfo=[];
		// $this->stripe = new StripeBilling;
		$result = $this->stripe->charge($chargeInfo);
		
		var_dump($result);
	}
}

// to run standalone
// require 'vendor/autoload.php';
// (new PurchasesController)->buy();

?> 