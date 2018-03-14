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
class Report extends BaseReport
{
// -------------------------------------------------------------------------
// Public Members
// -------------------------------------------------------------------------

    public function toJsonHeaderArray()
    {
        $array_store = array ();
  
        $array_store["id"] = $this->getId();
	$array_store["volunteer_id"] = (int)$this->getVolunteerId();
        $array_store["investigation_species"] = $this->getInvestigationSpecies();
        $array_store["call_species"] = $this->getCallSpecies();
        $array_store["call_location"] = $this->getCallLocation();

        $array_store["investigation_physical_location"] = $this->getInvestigationPhysicalLocation();

        $array_store["investigation_date_minute"] = (int)$this->getMinute(strtotime($this->getInvestigationDate()));
        $array_store["investigation_date_hour"] = (int)$this->getHour(strtotime($this->getInvestigationDate()));
        $array_store["investigation_date_dayofmonth"] = (int)$this->getDayOfMonth(strtotime($this->getInvestigationDate()));
        $array_store["investigation_date_month"] = (int)$this->getMonth(strtotime($this->getInvestigationDate()));
        $array_store["investigation_date_year"] = (int)$this->getYear(strtotime($this->getInvestigationDate()));

        $array_store["call_date_minute"] = (int)$this->getMinute(strtotime($this->getCallDate()));
        $array_store["call_date_hour"] = (int)$this->getHour(strtotime($this->getCallDate()));
        $array_store["call_date_dayofmonth"] = (int)$this->getDayOfMonth(strtotime($this->getCallDate()));
        $array_store["call_date_month"] = (int)$this->getMonth(strtotime($this->getCallDate()));
        $array_store["call_date_year"] = (int)$this->getYear(strtotime($this->getCallDate()));
        return $array_store;
    }

    public function toJsonArray()
    {
        $array_store = $this->toArray(BasePeer::TYPE_FIELDNAME);

        $array_store["call_date_minute"] = (int)$this->getMinute(strtotime($this->getCallDate()));
        $array_store["call_date_hour"] = (int)$this->getHour(strtotime($this->getCallDate()));
        $array_store["call_date_dayofmonth"] = (int)$this->getDayOfMonth(strtotime($this->getCallDate()));
        $array_store["call_date_month"] = (int)$this->getMonth(strtotime($this->getCallDate()));
        $array_store["call_date_year"] = (int)$this->getYear(strtotime($this->getCallDate()));

        $array_store["investigation_date_minute"] = (int)$this->getMinute(strtotime($this->getInvestigationDate()));
        $array_store["investigation_date_hour"] = (int)$this->getHour(strtotime($this->getInvestigationDate()));
        $array_store["investigation_date_dayofmonth"] = (int)$this->getDayOfMonth(strtotime($this->getInvestigationDate()));
        $array_store["investigation_date_month"] = (int)$this->getMonth(strtotime($this->getInvestigationDate()));
        $array_store["investigation_date_year"] = (int)$this->getYear(strtotime($this->getInvestigationDate()));

        $attachments = $this->getAttachments();

        $attachemtnsOutput = array ();

        foreach ($attachments as $attachment) {
            $attachemtnsOutput[] = $attachment->toJsonArray();
        }

        $array_store["attachments"] = $attachemtnsOutput;

        $sectionsOutput = array ();
        foreach ($this->getReportHumanInteractionSections() as $section) {
            $sectionsOutput[] = $section->toArray(BasePeer::TYPE_FIELDNAME);
        }

        $array_store['report_human_interaction_sections'] = $sectionsOutput;

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
}
