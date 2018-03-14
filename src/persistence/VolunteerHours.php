<?php



/**
 * Skeleton subclass for representing a row from the 'volunteer_hours' table.
 *
 * a volunteer
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.persistence
 */
class VolunteerHours extends BaseVolunteerHours 
{
	
	public function toJsonArray()
	{
        	$array_store = $this->toArray(BasePeer::TYPE_FIELDNAME);

		$array_store["dayofmonth"] = (int)$this->getDayOfMonth();

		return $array_store;
	}
} // VolunteerHours
