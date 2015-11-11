<?php

class Pronamic_WP_Pay_Gateways_FibonacciOrange_Integration {
	public function __construct() {
		$this->id       = 'fibonacciorange';
		$this->name     = 'Fibonacci ORANGE';
		$this->provider = 'fibonacciorange';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_Icepay_ConfigFactory';
	}

	public function get_config_class() {
		return 'Pronamic_WP_Pay_Gateways_Icepay_Config';
	}

	public function get_gateway_class() {
		return 'Pronamic_WP_Pay_Gateways_Icepay_Gateway';
	}
}
