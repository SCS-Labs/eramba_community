<?php
class ComplianceException_Expiration_006 extends ComplianceException_Expiration_Base {
	protected $reminderDays = 20;

	public function __construct($options = array()) {
		parent::__construct($options);
	}
}
