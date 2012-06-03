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
		$this->load->helper('dompdf');
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
		$id = $reportData['id'];
		
		$report = ReportQuery::create()->findPk($id);
		
		$this->fillReport($report, $reportData);
		
		$report->save();

		$this->sendUpdatedReportAlert($report, $reportData);
	}
	
	public function addReport($reportData)
	{	
		$report = new Report();
		
		$this->fillReport($report, $reportData);
		
		$report->save();

		echo $report->getId();
		
		$this->sendNewReportAlert($report, $reportData);
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

		$this->email->from('mmsn@sanjuancountymmsn.com', 'San Juan County MMSN');
		  
		//$this->email->to('amy@whalemuseum.org'); 
		$this->email->to('lancewf@gmail.com'); 
		$this->email->bcc('lancewf@gmail.com');
		
		$this->email->subject('Notice of Update to MMSN Report');
		$this->email->message($message);	

		$filePath = $this->createAttachment($report);

		$this->email->send();
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

		$this->email->from('mmsn@sanjuancountymmsn.com', 'San Juan County MMSN');
		
		//$this->email->to('amy@whalemuseum.org'); 
		$this->email->to('lancewf@gmail.com'); 
		$this->email->bcc('lancewf@gmail.com');
		
		$this->email->subject('New MMSN Report created');
		$this->email->message($message);	

		$filePath = $this->createAttachment($report);
		
		$this->email->attach($filePath);

		$this->email->send();
	}

	private function createAttachment($report)
	{
                $data = pdf_create("Hello World", '', false);
                $name = uniqid();
                write_file("pdf/" . $name . ".pdf", $data);
		 
                return "pdf/" . $name . ".pdf";
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
		$report->setContourLength($reportData['contour_length']);
		$report->setGirth($reportData['girth']);
		$report->setInvestigationComments($reportData['investigation_comments']);
		$report->setIsPhotoTaken($reportData['is_photo_taken']);
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
