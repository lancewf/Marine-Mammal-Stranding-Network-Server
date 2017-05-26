<?php



/**
 * This class defines the structure of the 'report_human_interaction_section' table.
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
class ReportHumanInteractionSectionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'persistence.map.ReportHumanInteractionSectionTableMap';

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
        $this->setName('report_human_interaction_section');
        $this->setPhpName('ReportHumanInteractionSection');
        $this->setClassname('ReportHumanInteractionSection');
        $this->setPackage('persistence');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', false, 100, null);
        $this->addColumn('is_examined', 'IsExamined', 'BOOLEAN', false, 1, null);
        $this->addColumn('possible_hi_lesion', 'PossibleHiLesion', 'VARCHAR', false, 100, null);
        $this->addColumn('possible_source', 'PossibleSource', 'VARCHAR', false, 100, null);
        $this->addColumn('scavenger_damage', 'ScavengerDamage', 'VARCHAR', false, 100, null);
        $this->addForeignKey('report_id', 'ReportId', 'INTEGER', 'report', 'id', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Report', 'Report', RelationMap::MANY_TO_ONE, array('report_id' => 'id', ), null, null);
    } // buildRelations()

} // ReportHumanInteractionSectionTableMap
