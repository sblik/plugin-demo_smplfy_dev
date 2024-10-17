<?php
/**
 *  A repository acts as a way to run methods defined in the SMPLFY Core plugin in relation to a specific form on the site.
 *
 *  When creating a new form on the website, consider creating a Repository and Entity for it if you expect its entries to be accessed and/or manipulated
 *  from this custom plugin.
 */

namespace SMPLFY\demodevs;

use SmplfyCore\SMPLFY_BaseRepository;
use SmplfyCore\SMPLFY_GravityFormsApiWrapper;
use WP_Error;
/**
 *
 * @method static SmplfyCore1Entity|null get_one( $fieldId, $value )
 * @method static SmplfyCore1Entity|null get_one_for_current_user()
 * @method static SmplfyCore1Entity|null get_one_by_id( $value )
 * @method static SmplfyCore1Entity|null get_one_for_user( $userId )
 * @method static SmplfyCore1Entity[] get_all( $fieldId = null, $value = null, string $direction = 'ASC' )
 * @method static int|WP_Error add( SmplfyCore1Entity $entity )
 */
class SmplfyCore1Repository extends SMPLFY_BaseRepository {
	public function __construct( SMPLFY_GravityFormsApiWrapper $gravityFormsApi ) {
		$this->entityType = SmplfyCore1Entity::class;
		$this->formId     = FormIds::SMPLFY_CORE_1;

		parent::__construct( $gravityFormsApi );
	}
}