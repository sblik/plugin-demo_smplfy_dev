<?php
/**
 * Adapter for handling Gravity Forms events
 */

namespace SMPLFY\demodevs;
class GravityFormsAdapter {

	private SmplfyCore2Submitted $smplfyCore2Submitted;

	public function __construct( SmplfyCore2Submitted $smplfyCore2Submitted ) {
		$this->smplfyCore2Submitted = $smplfyCore2Submitted;

		$this->register_hooks();
		$this->register_filters();
	}

	/**
	 * Register gravity forms hooks to handle custom logic
	 *
	 * @return void
	 */

	public function register_hooks() {
		$submission_smnplfycore1 = 'gform_after_submission_' . FormIds::SMPLFY_CORE_2;
		add_action( $submission_smnplfycore1, [ $this->smplfyCore2Submitted, 'update_smplfycore1_entry' ], 10, 4 );
	}

	/**
	 * Register gravity forms filters to handle custom logic
	 *
	 * @return void
	 */
	public function register_filters() {

	}
}