<?php



/**
 * Skeleton subclass for representing a row from the 'volunteer' table.
 *
 * a volunteer
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.persistence
 */
class Volunteer extends BaseVolunteer {
	// -------------------------------------------------------------------------
	// Public Members
	// -------------------------------------------------------------------------
	
	public function toJsonArray()
	{
        	$array_store = $this->toArray(BasePeer::TYPE_FIELDNAME);

		$array_store["streetaddress"] = $this->getStreetaddress();
		$array_store["phonenumber"] = $this->getPhonenumber();
        
		return $array_store;
	}
	
	public function getFullName()
	{
		return $this->getFirstName() . " " . $this->getLastName();
	}
	
} // Volunteer
