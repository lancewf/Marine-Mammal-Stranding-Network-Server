<?php



/**
 * Skeleton subclass for performing query and update operations on the 'volunteer' table.
 *
 * a volunteer
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.persistence
 */
class VolunteerPeer extends BaseVolunteerPeer {
	public function getIslands()
	{
		$con = Propel::getConnection(VolunteerPeer::DATABASE_NAME);

		$sql = "SELECT DISTINCT " . VolunteerPeer::ISLAND . 
			" FROM " . VolunteerPeer::TABLE_NAME . " ORDER BY " .
			VolunteerPeer::ISLAND . " ASC";

		$stmt = $con->prepare($sql);
    	$stmt->execute();

		$islands = array();
		
		$row = $stmt->fetch(PDO::FETCH_NUM);

    	while($row) 
    	{
    		$island = $row[0];
    		
    		$islands[] = $island;
    		
    		$row = $stmt->fetch(PDO::FETCH_NUM);
    	}
  	    
  	    return $islands;
	}
} // VolunteerPeer
