<?php
class AssetClassificationType extends AppModel {
	public $actsAs = array(
		'HtmlPurifier.HtmlPurifier' => array(
			'config' => 'Strict',
			'fields' => array(
				'name'
			)
		)
	);

	public $validate = array(
		'name' => array(
			'rule' => 'notBlank',
			'required' => true
		)
	);

	public $hasMany = array(
		'AssetClassification'
	);

	public function __construct($id = false, $table = null, $ds = null) {
		$this->label = __('Risk Classification Types');

		$this->fieldGroupData = [
			'default' => [
				'label' => __('General')
			],
		];

		$this->fieldData = [
			'name' => [
				'label' => __('New Classification Type'),
				'editable' => true,
				'description' => __('Set the name of your classifications, for example "Confidentiality", "Integrity", "Availability", "Value", Etc.')
			]
		];

		parent::__construct($id, $table, $ds);
	}
}
