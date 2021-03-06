<?php



/**
 * This class defines the structure of the 'attachment' table.
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
class AttachmentTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'persistence.map.AttachmentTableMap';

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
        $this->setName('attachment');
        $this->setPhpName('Attachment');
        $this->setClassname('Attachment');
        $this->setPackage('persistence');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('file_name', 'FileName', 'VARCHAR', false, 100, null);
        $this->addColumn('comments', 'Comments', 'LONGVARCHAR', false, null, null);
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

} // AttachmentTableMap
