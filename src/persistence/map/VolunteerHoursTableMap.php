<?php



/**
 * This class defines the structure of the 'volunteer_hours' table.
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
class VolunteerHoursTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'persistence.map.VolunteerHoursTableMap';

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
        $this->setName('volunteer_hours');
        $this->setPhpName('VolunteerHours');
        $this->setClassname('VolunteerHours');
        $this->setPackage('persistence');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('total_hours', 'TotalHours', 'DOUBLE', false, null, null);
        $this->addColumn('mileage', 'Mileage', 'INTEGER', false, null, null);
        $this->addColumn('comments', 'Comments', 'LONGVARCHAR', false, null, null);
        $this->addColumn('day_of_month', 'DayOfMonth', 'INTEGER', false, null, null);
        $this->addColumn('month', 'Month', 'INTEGER', false, null, null);
        $this->addColumn('year', 'Year', 'INTEGER', false, null, null);
        $this->addForeignKey('volunteer_id', 'VolunteerId', 'INTEGER', 'volunteer', 'id', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Volunteer', 'Volunteer', RelationMap::MANY_TO_ONE, array('volunteer_id' => 'id', ), null, null);
    } // buildRelations()

} // VolunteerHoursTableMap
