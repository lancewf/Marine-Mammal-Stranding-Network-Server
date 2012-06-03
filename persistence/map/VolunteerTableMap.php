<?php



/**
 * This class defines the structure of the 'volunteer' table.
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
class VolunteerTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'persistence.map.VolunteerTableMap';

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
		$this->setName('volunteer');
		$this->setPhpName('Volunteer');
		$this->setClassname('Volunteer');
		$this->setPackage('persistence');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('FIRST_NAME', 'FirstName', 'VARCHAR', false, 100, null);
		$this->addColumn('LAST_NAME', 'LastName', 'VARCHAR', false, 100, null);
		$this->addColumn('CITY', 'City', 'VARCHAR', false, 100, null);
		$this->addColumn('STATE', 'State', 'VARCHAR', false, 100, null);
		$this->addColumn('ZIP', 'Zip', 'VARCHAR', false, 100, null);
		$this->addColumn('STREETADDRESS', 'Streetaddress', 'VARCHAR', false, 100, null);
		$this->addColumn('VEHICLE', 'Vehicle', 'VARCHAR', false, 100, null);
		$this->addColumn('ISLAND', 'Island', 'VARCHAR', false, 100, null);
		$this->addColumn('EMAIL', 'Email', 'VARCHAR', false, 100, null);
		$this->addColumn('TRAINING', 'Training', 'VARCHAR', false, 100, null);
		$this->addColumn('COMMENTS', 'Comments', 'LONGVARCHAR', false, null, null);
		$this->addColumn('PHONENUMBER', 'Phonenumber', 'VARCHAR', false, 100, null);
		$this->addColumn('SUNDAY_FROM_HOUR', 'SundayFromHour', 'INTEGER', false, null, null);
		$this->addColumn('MONDAY_FROM_HOUR', 'MondayFromHour', 'INTEGER', false, null, null);
		$this->addColumn('TUESDAY_FROM_HOUR', 'TuesdayFromHour', 'INTEGER', false, null, null);
		$this->addColumn('WEDNESDAY_FROM_HOUR', 'WednesdayFromHour', 'INTEGER', false, null, null);
		$this->addColumn('THURSDAY_FROM_HOUR', 'ThursdayFromHour', 'INTEGER', false, null, null);
		$this->addColumn('FRIDAY_FROM_HOUR', 'FridayFromHour', 'INTEGER', false, null, null);
		$this->addColumn('SATURDAY_FROM_HOUR', 'SaturdayFromHour', 'INTEGER', false, null, null);
		$this->addColumn('SUNDAY_TO_HOUR', 'SundayToHour', 'INTEGER', false, null, null);
		$this->addColumn('MONDAY_TO_HOUR', 'MondayToHour', 'INTEGER', false, null, null);
		$this->addColumn('TUESDAY_TO_HOUR', 'TuesdayToHour', 'INTEGER', false, null, null);
		$this->addColumn('WEDNESDAY_TO_HOUR', 'WednesdayToHour', 'INTEGER', false, null, null);
		$this->addColumn('THURSDAY_TO_HOUR', 'ThursdayToHour', 'INTEGER', false, null, null);
		$this->addColumn('FRIDAY_TO_HOUR', 'FridayToHour', 'INTEGER', false, null, null);
		$this->addColumn('SATURDAY_TO_HOUR', 'SaturdayToHour', 'INTEGER', false, null, null);
		$this->addColumn('SUNDAY_ANY_TIME', 'SundayAnyTime', 'BOOLEAN', false, null, null);
		$this->addColumn('MONDAY_ANY_TIME', 'MondayAnyTime', 'BOOLEAN', false, null, null);
		$this->addColumn('TUESDAY_ANY_TIME', 'TuesdayAnyTime', 'BOOLEAN', false, null, null);
		$this->addColumn('WEDNESDAY_ANY_TIME', 'WednesdayAnyTime', 'BOOLEAN', false, null, null);
		$this->addColumn('THURSDAY_ANY_TIME', 'ThursdayAnyTime', 'BOOLEAN', false, null, null);
		$this->addColumn('FRIDAY_ANY_TIME', 'FridayAnyTime', 'BOOLEAN', false, null, null);
		$this->addColumn('SATURDAY_ANY_TIME', 'SaturdayAnyTime', 'BOOLEAN', false, null, null);
		$this->addColumn('SUNDAY_NO_TIME', 'SundayNoTime', 'BOOLEAN', false, null, null);
		$this->addColumn('MONDAY_NO_TIME', 'MondayNoTime', 'BOOLEAN', false, null, null);
		$this->addColumn('TUESDAY_NO_TIME', 'TuesdayNoTime', 'BOOLEAN', false, null, null);
		$this->addColumn('WEDNESDAY_NO_TIME', 'WednesdayNoTime', 'BOOLEAN', false, null, null);
		$this->addColumn('THURSDAY_NO_TIME', 'ThursdayNoTime', 'BOOLEAN', false, null, null);
		$this->addColumn('FRIDAY_NO_TIME', 'FridayNoTime', 'BOOLEAN', false, null, null);
		$this->addColumn('SATURDAY_NO_TIME', 'SaturdayNoTime', 'BOOLEAN', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Report', 'Report', RelationMap::ONE_TO_MANY, array('id' => 'volunteer_id', ), null, null);
    $this->addRelation('ReportComments', 'ReportComments', RelationMap::ONE_TO_MANY, array('id' => 'volunteer_id', ), null, null);
    $this->addRelation('BlogEntryComments', 'BlogEntryComments', RelationMap::ONE_TO_MANY, array('id' => 'volunteer_id', ), null, null);
    $this->addRelation('VolunteerHours', 'VolunteerHours', RelationMap::ONE_TO_MANY, array('id' => 'volunteer_id', ), null, null);
	} // buildRelations()

} // VolunteerTableMap
