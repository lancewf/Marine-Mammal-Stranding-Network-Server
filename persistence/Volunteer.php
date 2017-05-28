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
		$array_store = array ();

		$array_store["id"] = (int)$this->getId();
		$array_store["first_name"] = $this->getFirstName();
		$array_store["last_name"] = $this->getLastName();
        $array_store["city"] = $this->getCity();
        $array_store["state"] = $this->getState();
        $array_store["zip"] = $this->getZip();
        $array_store["streetaddress"] = $this->getStreetaddress();
        $array_store["vehicle"] = $this->getVehicle();
        $array_store["island"] = $this->getIsland();
        $array_store["comments"] = $this->getComments();
        $array_store["phonenumber"] = $this->getPhonenumber();
        $array_store["email"] = $this->getEmail();
        $array_store["training"] = $this->getTraining();
        
        $array_store["sunday_from_hour"] = (int)$this->getSundayFromHour();
        $array_store["monday_from_hour"] = (int)$this->getMondayFromHour();
        $array_store["tuesday_from_hour"] = (int)$this->getTuesdayFromHour();
        $array_store["wednesday_from_hour"] = (int)$this->getWednesdayFromHour();
        $array_store["thursday_from_hour"] = (int)$this->getThursdayFromHour();
        $array_store["friday_from_hour"] = (int)$this->getFridayFromHour();
        $array_store["saturday_from_hour"] = (int)$this->getSaturdayFromHour();
        $array_store["sunday_to_hour"] = (int)$this->getSundayToHour();
        $array_store["monday_to_hour"] = (int)$this->getMondayToHour();
        $array_store["tuesday_to_hour"] = (int)$this->getTuesdayToHour();
        $array_store["wednesday_to_hour"] = (int)$this->getWednesdayToHour();
        $array_store["thursday_to_hour"] = (int)$this->getThursdayToHour();
        $array_store["friday_to_hour"] = (int)$this->getFridayToHour();
        $array_store["saturday_to_hour"] = (int)$this->getSaturdayToHour();
        $array_store["sunday_any_time"] = (boolean)$this->getSundayAnyTime();
        $array_store["monday_any_time"] = (boolean)$this->getMondayAnyTime();
        $array_store["tuesday_any_time"] = (boolean)$this->getTuesdayAnyTime();
        $array_store["wednesday_any_time"] = (boolean)$this->getWednesdayAnyTime();
        $array_store["thursday_any_time"] = (boolean)$this->getThursdayAnyTime();
        $array_store["friday_any_time"] = (boolean)$this->getFridayAnyTime();
        $array_store["saturday_any_time"] = (boolean)$this->getSaturdayAnyTime();
        $array_store["sunday_no_time"] = (boolean)$this->getSundayNoTime();
        $array_store["monday_no_time"] = (boolean)$this->getMondayNoTime();
        $array_store["tuesday_no_time"] = (boolean)$this->getTuesdayNoTime();
        $array_store["wednesday_no_time"] = (boolean)$this->getWednesdayNoTime();
        $array_store["thursday_no_time"] = (boolean)$this->getThursdayNoTime();
        $array_store["friday_no_time"] = (boolean)$this->getFridayNoTime();
        $array_store["saturday_no_time"] = (boolean)$this->getSaturdayNoTime();
        
		return $array_store;
	}
	
	public function getFullName()
	{
		return $this->getFirstName() . " " . $this->getLastName();
	}
	
} // Volunteer
