<?php
class ServiceContract_Expiration_005 extends ServiceContract_Expiration_Base {
	protected $reminderDays = 10;

	public function __construct($options = array()) {
		parent::__construct($options);
	}
}
