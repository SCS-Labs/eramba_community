<?php
class SecurityServiceAudit_Begin_002 extends SecurityServiceAudit_Begin_Base {
	protected $reminderDays = -5;

	public function __construct($options = array()) {
		parent::__construct($options);
	}
}
