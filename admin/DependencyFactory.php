<?php
/**
 * A factory class responsible for creating and initializing all dependencies used in the plugin
 */

namespace SMPLFY\demodevs;

use SmplfyCore\SMPLFY_GravityFormsApiWrapper;

class DependencyFactory {

	/**
	 * Create and initialize all dependencies
	 *
	 * @return void
	 */
	static function create_plugin_dependencies() {
		$gravityFormsWrapper = new SMPLFY_GravityFormsApiWrapper();

		// Repositories
		$smplfyCore1Repository = new SmplfyCore1Repository( $gravityFormsWrapper );
		$smplfyCore2Repository = new SmplfyCore2Repository( $gravityFormsWrapper );

		//Usecases
		$smplfyCore2Submitted = new SmplfyCore2Submitted( $smplfyCore1Repository );


		new GravityFormsAdapter( $smplfyCore2Submitted );
	}
}