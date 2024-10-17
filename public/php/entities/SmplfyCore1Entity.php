<?php
/**
 * An entity represents a Gravity Form and combined with a corresponding Repository can allow for form entry manipulation to be simple and easy to
 * understand when looking at the code
 */

namespace SMPLFY\demodevs;

use SmplfyCore\SMPLFY_BaseEntity;

/**
 * @property $singleLine
 * @property $radio
 */
class SmplfyCore1Entity extends SMPLFY_BaseEntity {
	public function __construct( $formEntry = array() ) {
		parent::__construct( $formEntry );
		$this->formId = FormIds::SMPLFY_CORE_1;
	}

	protected function get_property_map(): array {
		return array(
			'singleLine' => '1',
			'radio' => '3',
		);
	}
}