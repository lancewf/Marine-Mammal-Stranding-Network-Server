<?php



/**
 * This class defines the structure of the 'blog_entry' table.
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
class BlogEntryTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'persistence.map.BlogEntryTableMap';

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
		$this->setName('blog_entry');
		$this->setPhpName('BlogEntry');
		$this->setClassname('BlogEntry');
		$this->setPackage('persistence');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('TITLE', 'Title', 'VARCHAR', false, 100, null);
		$this->addColumn('MESSAGE', 'Message', 'LONGVARCHAR', false, null, null);
		$this->addColumn('DATE', 'Date', 'TIMESTAMP', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('BlogEntryComments', 'BlogEntryComments', RelationMap::ONE_TO_MANY, array('id' => 'blog_entry_id', ), null, null);
	} // buildRelations()

} // BlogEntryTableMap
