<?php
class AccountReviewFinding_Expiration_003 extends AccountReviewFinding_Expiration_Base {
	public $reminderDays = -5;

	public function __construct($options = array()) {
		parent::__construct($options);
	}
}
