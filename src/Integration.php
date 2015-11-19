<?php

class Pronamic_WP_Pay_Gateways_FibonacciOrange_Integration extends Pronamic_WP_Pay_Gateways_Icepay_Integration {
	public function __construct() {
		$this->id       = 'fibonacciorange';
		$this->name     = 'Fibonacci ORANGE';
		$this->provider = 'fibonacciorange';
	}
}
