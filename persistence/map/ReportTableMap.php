<?php



/**
 * This class defines the structure of the 'report' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.persistence.map
 */
class ReportTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'persistence.map.ReportTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('report');
		$this->setPhpName('Report');
		$this->setClassname('Report');
		$this->setPackage('persistence');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('RESPONDER', 'Responder', 'VARCHAR', false, 100, null);
		$this->addColumn('CALL_DATE', 'CallDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('CALL_FROM', 'CallFrom', 'VARCHAR', false, 100, null);
		$this->addColumn('CALLER_NAME', 'CallerName', 'VARCHAR', false, 100, null);
		$this->addColumn('CALLER_PHONE_NUMBER', 'CallerPhoneNumber', 'VARCHAR', false, 100, null);
		$this->addColumn('CALL_LOCATION', 'CallLocation', 'VARCHAR', false, 100, null);
		$this->addColumn('CALL_SPECIES', 'CallSpecies', 'VARCHAR', false, 100, null);
		$this->addColumn('WHEN_FIRST_SEEN', 'WhenFirstSeen', 'VARCHAR', false, 100, null);
		$this->addColumn('CALL_COMMENTS', 'CallComments', 'LONGVARCHAR', false, null, null);
		$this->addColumn('CALL_REFERRED_TO', 'CallReferredTo', 'VARCHAR', false, 100, null);
		$this->addColumn('CALL_CONDITION', 'CallCondition', 'VARCHAR', false, 100, null);
		$this->addColumn('INVESTIGATOR_SUPPORT', 'InvestigatorSupport', 'VARCHAR', false, 100, null);
		$this->addColumn('INVESTIGATION_DATE', 'InvestigationDate', 'TIMESTAMP', false, null, null);
		$this->addColumn('INVESTIGATION_LAT_LON_LOCATION', 'InvestigationLatLonLocation', 'VARCHAR', false, 100, null);
		$this->addColumn('INVESTIGATION_PHYSICAL_LOCATION', 'InvestigationPhysicalLocation', 'VARCHAR', false, 100, null);
		$this->addColumn('INVESTIGATION_SPECIES', 'InvestigationSpecies', 'VARCHAR', false, 100, null);
		$this->addColumn('ANIMAL_NOT_FOUND', 'AnimalNotFound', 'BOOLEAN', false, null, null);
		$this->addColumn('INVESTIGATION_CONDITION', 'InvestigationCondition', 'VARCHAR', false, 100, null);
		$this->addColumn('TAGS', 'Tags', 'VARCHAR', false, 100, null);
		$this->addColumn('DISPOSITION', 'Disposition', 'VARCHAR', false, 100, null);
		$this->addColumn('SEAL_PICKUP', 'SealPickup', 'VARCHAR', false, 100, null);
		$this->addColumn('SEX', 'Sex', 'VARCHAR', false, 100, null);
		$this->addColumn('WEIGHT', 'Weight', 'DOUBLE', false, null, null);
		$this->addColumn('STRAIGHT_LENGTH', 'StraightLength', 'DOUBLE', false, null, null);
		$this->addColumn('CONTOUR_LENGTH', 'ContourLength', 'DOUBLE', false, null, null);
		$this->addColumn('GIRTH', 'Girth', 'DOUBLE', false, null, null);
		$this->addColumn('INVESTIGATION_COMMENTS', 'InvestigationComments', 'LONGVARCHAR', false, null, null);
		$this->addColumn('IS_PHOTO_TAKEN', 'IsPhotoTaken', 'BOOLEAN', false, null, null);
		$this->addForeignKey('VOLUNTEER_ID', 'VolunteerId', 'INTEGER', 'volunteer', 'ID', true, null, null);
		$this->addColumn('IS_CON_SICK', 'IsConSick', 'BOOLEAN', false, null, null);


		$this->addColumn('IS_CON_INJURED', 'IsConInjured', 'BOOLEAN', false, null, null);
		$this->addColumn('IS_CON_OUT_OF_HABITAT', 'IsConOutOfHabitat', 'BOOLEAN', false, null, null);
		$this->addColumn('IS_CON_DEEMED_RELEASABLE', 'IsConDeemedReleasable', 'BOOLEAN', false, null, null);
		$this->addColumn('IS_CON_ABANDONED', 'IsConAbandoned', 'BOOLEAN', false, null, null);
		$this->addColumn('IS_CON_INACCESSIBLE', 'IsConInaccessible', 'BOOLEAN', false, null, null);
		$this->addColumn('IS_CON_LOCATION_HAZARD_TO_ANIMAL', 'IsConLocationHazardToAnimal', 'BOOLEAN', false, null, null);
		$this->addColumn('IS_CON_LOCATION_HAZARD_TO_HUMANS', 'IsConLocationHazardToHumans', 'BOOLEAN', false, null, null);
		$this->addColumn('IS_CON_UNKNOWN', 'IsConUnknown', 'BOOLEAN', false, null, null);
		$this->addColumn('IS_CON_OTHER', 'IsConOther', 'BOOLEAN', false, null, null);
		$this->addColumn('IS_ACTION_LEFT_AT_SITE', 'IsActionLeftAtSite', 'BOOLEAN', false, null, null);
		$this->addColumn('IS_ACTION_IMMEDIATE_RELEASE_AT_SITE', 'IsActionImmediateReleaseAtSite', 'BOOLEAN', false, null, null);
		$this->addColumn('IS_ACTION_RELOCATED', 'IsActionRelocated', 'BOOLEAN', false, null, null);
		$this->addColumn('IS_ACTION_DIED_AT_SITE', 'IsActionDiedAtSite', 'BOOLEAN', false, null, null);
		$this->addColumn('IS_ACTION_DIED_DURING_TRANSPORT', 'IsActionDiedDuringTransport', 'BOOLEAN', false, null, null);
		$this->addColumn('IS_ACTION_EUTHANIZED_AT_SITE', 'IsActionEuthanizedAtSite', 'BOOLEAN', false, null, null);
		$this->addColumn('IS_ACTION_EUTHANIZED_DURING_TRANSPORT', 'IsActionEuthanizedDuringTransport', 'BOOLEAN', false, null, null);
		$this->addColumn('IS_ACTION_TRANSFERRED_TO_REHAB', 'IsActionTransferredToRehab', 'BOOLEAN', false, null, null);
		$this->addColumn('IS_ACTION_OTHER', 'IsActionOther', 'BOOLEAN', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Volunteer', 'Volunteer', RelationMap::MANY_TO_ONE, array('volunteer_id' => 'id', ), null, null);
    $this->addRelation('ReportComments', 'ReportComments', RelationMap::ONE_TO_MANY, array('id' => 'report_id', ), null, null);
    $this->addRelation('Attachment', 'Attachment', RelationMap::ONE_TO_MANY, array('id' => 'report_id', ), null, null);
	} // buildRelations()

} // ReportTableMap
