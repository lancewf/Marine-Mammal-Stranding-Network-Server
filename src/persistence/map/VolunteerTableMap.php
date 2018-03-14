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
class VolunteerTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'persistence.map.VolunteerTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
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
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('first_name', 'FirstName', 'VARCHAR', false, 100, null);
        $this->addColumn('last_name', 'LastName', 'VARCHAR', false, 100, null);
        $this->addColumn('city', 'City', 'VARCHAR', false, 100, null);
        $this->addColumn('state', 'State', 'VARCHAR', false, 100, null);
        $this->addColumn('zip', 'Zip', 'VARCHAR', false, 100, null);
        $this->addColumn('streetAddress', 'Streetaddress', 'VARCHAR', false, 100, null);
        $this->addColumn('vehicle', 'Vehicle', 'VARCHAR', false, 100, null);
        $this->addColumn('island', 'Island', 'VARCHAR', false, 100, null);
        $this->addColumn('email', 'Email', 'VARCHAR', false, 100, null);
        $this->addColumn('training', 'Training', 'VARCHAR', false, 100, null);
        $this->addColumn('comments', 'Comments', 'LONGVARCHAR', false, null, null);
        $this->addColumn('phoneNumber', 'Phonenumber', 'VARCHAR', false, 100, null);
        $this->addColumn('sunday_from_hour', 'SundayFromHour', 'INTEGER', false, null, null);
        $this->addColumn('monday_from_hour', 'MondayFromHour', 'INTEGER', false, null, null);
        $this->addColumn('tuesday_from_hour', 'TuesdayFromHour', 'INTEGER', false, null, null);
        $this->addColumn('wednesday_from_hour', 'WednesdayFromHour', 'INTEGER', false, null, null);
        $this->addColumn('thursday_from_hour', 'ThursdayFromHour', 'INTEGER', false, null, null);
        $this->addColumn('friday_from_hour', 'FridayFromHour', 'INTEGER', false, null, null);
        $this->addColumn('saturday_from_hour', 'SaturdayFromHour', 'INTEGER', false, null, null);
        $this->addColumn('sunday_to_hour', 'SundayToHour', 'INTEGER', false, null, null);
        $this->addColumn('monday_to_hour', 'MondayToHour', 'INTEGER', false, null, null);
        $this->addColumn('tuesday_to_hour', 'TuesdayToHour', 'INTEGER', false, null, null);
        $this->addColumn('wednesday_to_hour', 'WednesdayToHour', 'INTEGER', false, null, null);
        $this->addColumn('thursday_to_hour', 'ThursdayToHour', 'INTEGER', false, null, null);
        $this->addColumn('friday_to_hour', 'FridayToHour', 'INTEGER', false, null, null);
        $this->addColumn('saturday_to_hour', 'SaturdayToHour', 'INTEGER', false, null, null);
        $this->addColumn('sunday_any_time', 'SundayAnyTime', 'BOOLEAN', false, 1, null);
        $this->addColumn('monday_any_time', 'MondayAnyTime', 'BOOLEAN', false, 1, null);
        $this->addColumn('tuesday_any_time', 'TuesdayAnyTime', 'BOOLEAN', false, 1, null);
        $this->addColumn('wednesday_any_time', 'WednesdayAnyTime', 'BOOLEAN', false, 1, null);
        $this->addColumn('thursday_any_time', 'ThursdayAnyTime', 'BOOLEAN', false, 1, null);
        $this->addColumn('friday_any_time', 'FridayAnyTime', 'BOOLEAN', false, 1, null);
        $this->addColumn('saturday_any_time', 'SaturdayAnyTime', 'BOOLEAN', false, 1, null);
        $this->addColumn('sunday_no_time', 'SundayNoTime', 'BOOLEAN', false, 1, null);
        $this->addColumn('monday_no_time', 'MondayNoTime', 'BOOLEAN', false, 1, null);
        $this->addColumn('tuesday_no_time', 'TuesdayNoTime', 'BOOLEAN', false, 1, null);
        $this->addColumn('wednesday_no_time', 'WednesdayNoTime', 'BOOLEAN', false, 1, null);
        $this->addColumn('thursday_no_time', 'ThursdayNoTime', 'BOOLEAN', false, 1, null);
        $this->addColumn('friday_no_time', 'FridayNoTime', 'BOOLEAN', false, 1, null);
        $this->addColumn('saturday_no_time', 'SaturdayNoTime', 'BOOLEAN', false, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Report', 'Report', RelationMap::ONE_TO_MANY, array('id' => 'volunteer_id', ), null, null, 'Reports');
        $this->addRelation('ReportComments', 'ReportComments', RelationMap::ONE_TO_MANY, array('id' => 'volunteer_id', ), null, null, 'ReportCommentss');
        $this->addRelation('BlogEntryComments', 'BlogEntryComments', RelationMap::ONE_TO_MANY, array('id' => 'volunteer_id', ), null, null, 'BlogEntryCommentss');
        $this->addRelation('VolunteerHours', 'VolunteerHours', RelationMap::ONE_TO_MANY, array('id' => 'volunteer_id', ), null, null, 'VolunteerHourss');
    } // buildRelations()

} // VolunteerTableMap
