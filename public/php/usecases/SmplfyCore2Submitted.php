<?php
/**
 *  A usecase generally refers to a specific human action or the result of an action that happens on the site and contains
 * various functions that should happen as a result.
 *
 *  One or more of the functions are usually tied to a hook e.g. a Gravity Forms "after_submission" hook. See the Gravity Forms Adapter for how they are linked.
 */

namespace SMPLFY\demodevs;

use SmplfyCore\SMPLFY_Log;
use SmplfyCore\WorkflowStep;

class SmplfyCore2Submitted {
	private SmplfyCore1Repository $smplfyCore1Repository;

	public function __construct( SmplfyCore1Repository $smplfyCore1Repository  ) {
		$this->smplfyCore1Repository = $smplfyCore1Repository;
	}

	function update_smplfycore1_entry( $entry ) {
		$smplfyCore2Entry = new SmplfyCore2Entity( $entry ); // If the form submitted is the same as the entity
		SMPLFY_Log::info( '$smplfyCore2Entry' );
		SMPLFY_Log::info( $smplfyCore2Entry );


		// Update entry in SmplfyCore1 where entryId == EntryIdSmplfyCore2
		$smplfyCore1Entry = $this->smplfyCore1Repository->get_one_by_id($smplfyCore2Entry->entryIdSmplfyCore1);
		SMPLFY_Log::info('$smplfyCore1Entry');
		SMPLFY_Log::info($smplfyCore1Entry);

		$smplfyCore1Entry->singleLine = $smplfyCore2Entry->singleLine;
		$smplfyCore1Entry->radio = $smplfyCore2Entry->radio;

		$this->smplfyCore1Repository->update($smplfyCore1Entry);

		// Move to different workflow step
		WorkflowStep::send( WorkflowStepIds::SMPLFY_CORE_1_HOLD_2, $smplfyCore1Entry->formEntry );

	}

}