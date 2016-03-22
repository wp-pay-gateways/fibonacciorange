<?php

/**
 * Title: Fibonacci ORANGE - Integration test
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.1
 * @since 1.0.0
 */
class Pronamic_WP_Pay_Gateways_FibonacciOrange_Integration extends Pronamic_WP_Pay_Gateways_Icepay_Integration {
	public function __construct() {
		$this->id          = 'fibonacciorange';
		$this->name        = 'Fibonacci ORANGE';
		$this->product_url = 'http://www.fibonacciorange.nl/';
		$this->provider    = 'fibonacciorange';
	}
}
