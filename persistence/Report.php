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

    public function toJsonArray()
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
        $array_store["investigation_lat_location"] = $this->getInvestigationLatLocation();
        $array_store["investigation_lon_location"] = $this->getInvestigationLonLocation();
        $array_store["investigation_location_accuracy"] = $this->getInvestigationLocationAccuracy();
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

        $array_store["is_con_sick"] = (boolean)$this->getIsConSick();
        $array_store["is_con_injured"] = (boolean)$this->getIsConInjured();
        $array_store["is_con_out_of_habitat"] = (boolean)$this->getIsConOutOfHabitat();
        $array_store["is_con_deemed_releasable"] = (boolean)$this->getIsConDeemedReleasable();
        $array_store["is_con_abandoned"] = (boolean)$this->getIsConAbandoned();
        $array_store["is_con_inaccessible"] = (boolean)$this->getIsConInaccessible();
        $array_store["is_con_location_hazard_to_animal"] = (boolean)$this->getIsConLocationHazardToAnimal();
        $array_store["is_con_location_hazard_to_humans"] = (boolean)$this->getIsConLocationHazardToHumans();
        $array_store["is_con_unknown"] = (boolean)$this->getIsConUnknown();
        $array_store["is_con_other"] = (boolean)$this->getIsConOther();
        $array_store["is_action_left_at_site"] = (boolean)$this->getIsActionLeftAtSite();
        $array_store["is_action_immediate_release_at_site"] = (boolean)$this->getIsActionImmediateReleaseAtSite();
        $array_store["is_action_relocated"] = (boolean)$this->getIsActionRelocated();
        $array_store["is_action_died_at_site"] = (boolean)$this->getIsActionDiedAtSite();
        $array_store["is_action_died_during_transport"] = (boolean)$this->getIsActionDiedDuringTransport();
        $array_store["is_action_euthanized_at_site"] = (boolean)$this->getIsActionEuthanizedAtSite();
        $array_store["is_action_euthanized_during_transport"] = (boolean)$this->getIsActionEuthanizedDuringTransport();
        $array_store["is_action_transferred_to_rehab"] = (boolean)$this->getIsActionTransferredToRehab();
        $array_store["is_action_other"] = (boolean)$this->getIsActionOther();
        $array_store["relocated_location"] = $this->getRelocatedLocation();


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
