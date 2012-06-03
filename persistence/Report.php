<?php



/**
 * Skeleton subclass for representing a row from the 'report' table.
 *
 * a report
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.persistence
 */
class Report extends BaseReport {
	// -------------------------------------------------------------------------
	// Public Members
	// -------------------------------------------------------------------------
		
	public function toArray()
	{
		$array_store = array ();

		$array_store["id"] = (int)$this->getId();
		$array_store["volunteer_id"] = (int)$this->getVolunteerId();
		$array_store["responder"] = $this->getResponder();
    	$array_store["call_date_minute"] = (int)$this->getMinute(strtotime($this->getCallDate()));
        $array_store["call_date_hour"] = (int)$this->getHour(strtotime($this->getCallDate()));
		$array_store["call_date_dayofmonth"] = (int)$this->getDayOfMonth(strtotime($this->getCallDate()));
        $array_store["call_date_month"] = (int)$this->getMonth(strtotime($this->getCallDate()));
        $array_store["call_date_year"] = (int)$this->getYear(strtotime($this->getCallDate()));
        $array_store["call_from"] = $this->getCallFrom();
        $array_store["caller_name"] = $this->getCallerName();
        $array_store["caller_phone_number"] = $this->getCallerPhoneNumber();
        $array_store["call_location"] = $this->getCallLocation();
        $array_store["call_species"] = $this->getCallSpecies();
        $array_store["when_first_seen"] = $this->getWhenFirstSeen();
        $array_store["call_comments"] = $this->getCallComments();
        $array_store["call_referred_to"] = $this->getCallReferredTo();
        $array_store["call_condition"] = $this->getCallCondition();
        $array_store["investigator_support"] = $this->getInvestigatorSupport();
    	$array_store["investigation_date_minute"] = (int)$this->getMinute(strtotime($this->getInvestigationDate()));
        $array_store["investigation_date_hour"] = (int)$this->getHour(strtotime($this->getInvestigationDate()));
		$array_store["investigation_date_dayofmonth"] = (int)$this->getDayOfMonth(strtotime($this->getInvestigationDate()));
        $array_store["investigation_date_month"] = (int)$this->getMonth(strtotime($this->getInvestigationDate()));
        $array_store["investigation_date_year"] = (int)$this->getYear(strtotime($this->getInvestigationDate()));
        $array_store["investigation_lat_lon_location"] = $this->getInvestigationLatLonLocation();
        $array_store["investigation_physical_location"] = $this->getInvestigationPhysicalLocation();
        $array_store["investigation_species"] = $this->getInvestigationSpecies();
        $array_store["animal_not_found"] = (boolean)$this->getAnimalNotFound();
        $array_store["investigation_condition"] = $this->getInvestigationCondition();
        $array_store["tags"] = $this->getTags();
        $array_store["disposition"] = $this->getDisposition();
        $array_store["seal_pickup"] = $this->getSealPickup();
        $array_store["sex"] = $this->getSex();
        $array_store["weight"] = (double)$this->getWeight();
        $array_store["straight_length"] = (double)$this->getStraightLength();
        $array_store["contour_length"] = (double)$this->getContourLength();
        $array_store["girth"] = (double)$this->getGirth();
        $array_store["is_photo_taken"] = (boolean)$this->getIsPhotoTaken();
        $array_store["investigation_comments"] = $this->getInvestigationComments();
        
        $attachments = $this->getAttachments();
        
        $attachemtnsOutput = array ();
        
		foreach($attachments as $attachment)
		{
			$attachemtnsOutput[] = $attachment->toArray();
		}

		$array_store["attachments"] = $attachemtnsOutput;
		
		return $array_store;
	}
	
	// -------------------------------------------------------------------------
	// Private Members
	// -------------------------------------------------------------------------
		
    private function getHour($dateObject)
    {
		return date("H", $dateObject);
    }
	
    private function getMinute($dateObject)
    {
		return date("i", $dateObject);
    }
    
    private function getYear($dateObject)
    {
		return date("Y", $dateObject);
    }
    
	private function getDayOfMonth($dateObject)
	{		
		return date("j", $dateObject);
	}

	private function getMonth($dateObject)
	{
		return date("n", $dateObject);
	}
	
} // Report
