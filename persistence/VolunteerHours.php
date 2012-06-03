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
	
	public function toArray()
	{
		$array_store = array ();

		$array_store["id"] = (int)$this->getId();
		$array_store["total_hours"] = (double)$this->getTotalHours();
		$array_store["mileage"] = (int)$this->getMileage();
		$array_store["comments"] = $this->getComments();
		$array_store["dayofmonth"] = (int)$this->getDayOfMonth();
		$array_store["month"] = (int)$this->getMonth();
		$array_store["year"] = (int)$this->getYear();

		return $array_store;
	}
} // VolunteerHours
