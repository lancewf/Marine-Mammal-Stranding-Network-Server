<?php
class Report_model extends Model
{
	// -------------------------------------------------------------------------
	// Constructor
	// -------------------------------------------------------------------------
	
  public function Report_model()
  {
    parent::Model();

    require_once('persistence/Report.php');
    require_once('persistence/ReportQuery.php');
    $this->load->helper(array('dompdf', 'file'));
    $this->load->model('report_human_interaction_model');
 }

  // -------------------------------------------------------------------------
  // Public Members
  // -------------------------------------------------------------------------

  public function getReports()
	{
		$reports = ReportQuery::create()->find();

		return $reports;
	}
	
	public function deleteReport($id)
	{
		$report = ReportQuery::create()->findPk($id);
		
		if($report)
		{
			$report->delete();
		}
	}
	
	public function updateReport($reportData)
	{

		if($this->goodReportData($reportData))// && $this->report_human_interaction_model->goodReportData($reportData)) 
		{
			$id = $reportData['id'];
		
			$report = ReportQuery::create()->findPk($id);
		
			$this->fillReport($report, $reportData);
		
			$report->save();
                        $this->report_human_interaction_model->updateReport($reportData, $report);
			//$this->sendUpdatedReportAlert($report, $reportData);
			
			echo "Success";
		}
		else
		{ 
                        $id = $reportData['id'];
			$this->sendErrorAlert("Error in updating a report. id: " . $id);
			echo "Failure";
		}
	}

  public function addReport($reportData)
  {
   if($this->goodReportData($reportData) ) {
      $report = new Report();
      $this->fillReport($report, $reportData);

      $report->save();

      $report_id = $report->getId();

      $this->report_human_interaction_model->addReport($reportData, $report);

      //$this->sendNewReportAlert($report, $reportData);

      echo $report_id;
    }
    else{
      $this->sendErrorAlert("Error in adding a report");
      echo -1;
    }
  }

	// -------------------------------------------------------------------------
	// Private Members
	// -------------------------------------------------------------------------

	private function sendUpdatedReportAlert($report, $reportData)
	{
		$writtenBy = $this->getWrittenBy($report);

		$investigationDate = 
			$reportData['investigation_date_month'] . '-' . 
			$reportData['investigation_date_dayofmonth'] . '-' . 
			$reportData['investigation_date_year'];
		
		$message = 'There has been an update made to the report submitted by ' . $writtenBy 
			. ' to the MMSN website with an investigation date of ' . $investigationDate;
		
		$this->load->library('email');

		$this->email->from('admin@sjcmmsn.com', 'San Juan County MMSN');
		  
		//$this->email->to('jennifer@whalemuseum.org'); 
		$this->email->to('lancewf@gmail.com'); 
		//$this->email->bcc('lancewf@gmail.com');
		
		$this->email->subject('Notice of Update to MMSN Report');
		$this->email->message($message);

                $filePath = $this->createAttachment($report);
                $this->email->attach($filePath);

		$this->email->send();
	}

	private function sendErrorAlert($message)
	{
		$this->load->library('email');

		$this->email->from('admin@sjcmmsn.com', 'San Juan County MMSN');
		  
		$this->email->to('lancewf@gmail.com'); 
		
		$this->email->subject('Notice of Error to MMSN Report');
		$this->email->message($message);

		$this->email->send();
	}

        private function createAttachment($report)
        {
  		$data = array('report' =>$report);
		$html = $this->load->view('pdf', $data, true);
		
		$data = pdf_create($html, '', false);
		$name = uniqid();
		write_file("pdf/" . $name . ".pdf", $data);

                return "pdf/" . $name . ".pdf";
        }

	private function sendNewReportAlert($report, $reportData)
	{
		$writtenBy = $this->getWrittenBy($report);

		$investigationDate = 
			$reportData['investigation_date_month'] . '-' . 
			$reportData['investigation_date_dayofmonth'] . '-' . 
			$reportData['investigation_date_year'];
		
		$message = 'There has been a new report submitted by ' . $writtenBy 
			.', with an investigation date of ' . $investigationDate . ' to the MMSN website';
		
		$this->load->library('email');

		$this->email->from('admin@sjcmmsn.com', 'San Juan County MMSN');
		
		//$this->email->to('jennifer@whalemuseum.org'); 
		$this->email->to('lancewf@gmail.com'); 
		//$this->email->bcc('lancewf@gmail.com');
	
		$this->email->subject('New MMSN Report created');
		$this->email->message($message);

                $filePath = $this->createAttachment($report);
                $this->email->attach($filePath);

		$this->email->send();
	}
	
	private function getWrittenBy($report)
	{
		$writtenBy = "";
		$volunteer = $report->getVolunteer();
		
		if($volunteer != NULL)
		{
			$writtenBy = $volunteer->getFullName();
		}
		else
		{
			$writtenBy = "admin";	
		}
		
		return $writtenBy;
	}
	
        private function goodReportData($reportData) {
                if(array_key_exists('volunteer_id', $reportData) and 
                   array_key_exists('responder', $reportData) and
                   array_key_exists('call_date_hour', $reportData) and
                   array_key_exists('call_date_minute', $reportData) and
                   array_key_exists('call_date_month', $reportData) and
                   array_key_exists('call_date_dayofmonth', $reportData) and
                   array_key_exists('call_date_year', $reportData) and
                   array_key_exists('call_from', $reportData) and
                   array_key_exists('caller_name', $reportData) and
                   array_key_exists('caller_phone_number', $reportData) and
                   array_key_exists('call_location', $reportData) and
                   array_key_exists('call_species', $reportData) and
                   array_key_exists('when_first_seen', $reportData) and
                   array_key_exists('call_comments', $reportData) and
                   array_key_exists('call_referred_to', $reportData) and
                   array_key_exists('call_condition', $reportData) and
                   array_key_exists('investigation_date_hour', $reportData) and
                   array_key_exists('investigation_date_minute', $reportData) and
                   array_key_exists('investigation_date_month', $reportData) and
                   array_key_exists('investigation_date_dayofmonth', $reportData) and
                   array_key_exists('investigation_date_year', $reportData) and
                   array_key_exists('investigator_support', $reportData) and
                   array_key_exists('investigation_lat_lon_location', $reportData) and
                   array_key_exists('investigation_physical_location', $reportData) and
                   array_key_exists('investigation_species', $reportData) and
                   array_key_exists('animal_not_found', $reportData) and
                   array_key_exists('investigation_condition', $reportData) and
                   array_key_exists('tags', $reportData) and
                   array_key_exists('disposition', $reportData) and
                   array_key_exists('seal_pickup', $reportData) and
                   array_key_exists('sex', $reportData) and
                   array_key_exists('weight', $reportData) and
                   array_key_exists('straight_length', $reportData) and
                   array_key_exists('girth', $reportData) and
                   array_key_exists('investigation_comments', $reportData) and
                   array_key_exists('is_photo_taken', $reportData) and
                   array_key_exists('is_con_sick', $reportData) and
                   array_key_exists('is_con_injured', $reportData) and
                   array_key_exists('is_con_out_of_habitat', $reportData) and
                   array_key_exists('is_con_deemed_releasable', $reportData) and
                   array_key_exists('is_con_abandoned', $reportData) and
                   array_key_exists('is_con_inaccessible', $reportData) and
                   array_key_exists('is_con_location_hazard_to_animal', $reportData) and
                   array_key_exists('is_con_location_hazard_to_humans', $reportData) and
                   array_key_exists('is_con_unknown', $reportData) and
                   array_key_exists('is_con_other', $reportData) and
                   array_key_exists('is_action_left_at_site', $reportData) and
                   array_key_exists('is_action_immediate_release_at_site', $reportData) and
                   array_key_exists('is_action_relocated', $reportData) and
                   array_key_exists('is_action_died_at_site', $reportData) and
                   array_key_exists('is_action_died_during_transport', $reportData) and
                   array_key_exists('is_action_euthanized_at_site', $reportData) and
                   array_key_exists('is_action_euthanized_during_transport', $reportData) and
                   array_key_exists('is_action_transferred_to_rehab', $reportData) and
                   array_key_exists('is_action_other', $reportData))
   {
      return true;
   }
   else
   {
      return false;
   }

  }

	private function fillReport($report, $reportData)
	{
		$report->setVolunteerId($reportData['volunteer_id']);
		$report->setResponder($reportData['responder']);
		
		$callDate = mktime(
			$reportData['call_date_hour'], 
			$reportData['call_date_minute'], 0,
			$reportData['call_date_month'], 
			$reportData['call_date_dayofmonth'], 
			$reportData['call_date_year']);
		
		$report->setCallDate($callDate);
		$report->setCallFrom($reportData['call_from']);
		$report->setCallerName($reportData['caller_name']);
		$report->setCallerPhoneNumber($reportData['caller_phone_number']);
		$report->setCallLocation($reportData['call_location']);
		$report->setCallSpecies($reportData['call_species']);
		$report->setWhenFirstSeen($reportData['when_first_seen']);
		$report->setCallComments($reportData['call_comments']);
		$report->setCallReferredTo($reportData['call_referred_to']);
		$report->setCallCondition($reportData['call_condition']);
		
		//Investigator
		
		$investigationDate = mktime(
			$reportData['investigation_date_hour'], 
			$reportData['investigation_date_minute'], 0,
			$reportData['investigation_date_month'], 
			$reportData['investigation_date_dayofmonth'], 
			$reportData['investigation_date_year']);
		
		$report->setInvestigatorSupport($reportData['investigator_support']);
		$report->setInvestigationDate($investigationDate);

		$report->setInvestigationLatLonLocation($reportData['investigation_lat_lon_location']);
		$report->setInvestigationPhysicalLocation($reportData['investigation_physical_location']);
		
		$report->setInvestigationSpecies($reportData['investigation_species']);
		
		$animalNotFound = $this->getBoolean($reportData['animal_not_found']);
		
		$report->setAnimalNotFound($animalNotFound);
		$report->setInvestigationCondition($reportData['investigation_condition']);
		$report->setTags($reportData['tags']);
		$report->setDisposition($reportData['disposition']);
		$report->setSealPickup($reportData['seal_pickup']);
		$report->setSex($reportData['sex']);
		$report->setWeight($reportData['weight']);
		$report->setStraightLength($reportData['straight_length']);
		$report->setGirth($reportData['girth']);
		$report->setInvestigationComments($reportData['investigation_comments']);
		$report->setIsPhotoTaken($reportData['is_photo_taken']);

		$report->setIsConSick($reportData['is_con_sick']);
		$report->setIsConInjured($reportData['is_con_injured']);
		$report->setIsConOutOfHabitat($reportData['is_con_out_of_habitat']);
		$report->setIsConDeemedReleasable($reportData['is_con_deemed_releasable']);
		$report->setIsConAbandoned($reportData['is_con_abandoned']);
		$report->setIsConInaccessible($reportData['is_con_inaccessible']);
		$report->setIsConLocationHazardToAnimal($reportData['is_con_location_hazard_to_animal']);
		$report->setIsConLocationHazardToHumans($reportData['is_con_location_hazard_to_humans']);
		$report->setIsConUnknown($reportData['is_con_unknown']);
		$report->setIsConOther($reportData['is_con_other']);
		$report->setIsActionLeftAtSite($reportData['is_action_left_at_site']);
		$report->setIsActionImmediateReleaseAtSite($reportData['is_action_immediate_release_at_site']);
		$report->setIsActionRelocated($reportData['is_action_relocated']);
		$report->setIsActionDiedAtSite($reportData['is_action_died_at_site']);
		$report->setIsActionDiedDuringTransport($reportData['is_action_died_during_transport']);
		$report->setIsActionEuthanizedAtSite($reportData['is_action_euthanized_at_site']);
		$report->setIsActionEuthanizedDuringTransport($reportData['is_action_euthanized_during_transport']);
		$report->setIsActionTransferredToRehab($reportData['is_action_transferred_to_rehab']);
		$report->setIsActionOther($reportData['is_action_other']);
	}
	
	private function getBoolean($textBoolean)
	{
		if($textBoolean == "true")
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
?>
