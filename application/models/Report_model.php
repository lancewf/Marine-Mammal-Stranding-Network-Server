<?php
class Report_model extends CI_Model
{
    // -------------------------------------------------------------------------
    // Constructor
    // -------------------------------------------------------------------------
    
    public function __construct()
    {
        parent::__construct();

        require_once('persistence/Report.php');
        require_once('persistence/ReportQuery.php');
        $this->load->helper(array('dompdf', 'file'));
        $this->load->model('report_human_interaction_model');
    }

  // -------------------------------------------------------------------------
  // Public Members
  // -------------------------------------------------------------------------

    public function getAllReports()
    {
        $reports = ReportQuery::create()->find();

        return $reports;
    }

    public function deleteReport($id)
    {
        $report = $this->getReport($id);

        if ($report) {
            $report->delete();
        }
    }

    public function getReport($id){
        return ReportQuery::create()->findPk($id);
    }

    public function getReports($startMonth, $startDayOfMonth, $startYear,
	$endMonth, $endDayOfMonth, $endYear, $volunteerId = NULL) {

	$startTime = mktime(0, 0, 0, $startMonth, $startDayOfMonth, $startYear);
	$endOfTime = mktime(0, 0, 0, $endMonth, $endDayOfMonth, $endYear);

	$c = new Criteria();
	$c->add(ReportPeer::CALL_DATE, $startTime,
		Criteria::GREATER_EQUAL);
	$c->addAnd(ReportPeer::CALL_DATE, $endOfTime,
		Criteria::LESS_THAN);

        if(!is_null($volunteerId))
        {
            $c->addAnd(ReportPeer::VOLUNTEER_ID, $volunteerId, 
                Criteria::EQUAL);
        }

	$c->addAscendingOrderByColumn(ReportPeer::CALL_DATE);

	return ReportPeer::doSelect($c);
    }

    public function updateReport($reportData)
    {
        if ($this->goodReportData($reportData) && $this->report_human_interaction_model->goodReportData($reportData)) {
            $id = $reportData['id'];

            $report = $this->getReport($id);

            $this->fillReport($report, $reportData);

            $report->save();

            $this->report_human_interaction_model->updateReport($reportData, $report);
            $this->sendUpdatedReportAlert($report, $reportData);

            echo "Success";
        } else {
            $id = $reportData['id'];
            $this->sendErrorAlert("Error in updating a report. id: " . $id);
            echo "Failure";
        }
    }

    public function addReport($reportData)
    {
        if ($this->goodReportData($reportData) && $this->report_human_interaction_model->goodReportData($reportData)) {
             $report = new Report();
             $this->fillReport($report, $reportData);

             $report->save();

             $report_id = $report->getId();

             $this->report_human_interaction_model->addReport($reportData, $report);

             $this->sendNewReportAlert($report, $reportData);

             echo $report_id;
        } else {
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

        $this->setUpEmail();

        $this->email->subject('Notice of Update to MMSN Report');
        $this->email->message($message);

        $filePath = $this->createAttachment($report);
        $this->email->attach($filePath);

        $this->email->send();

        unlink($filePath);
    }

    private function setUpEmail()
    {
        $this->load->library('email');
        $this->config->load('email');

        $config = Array(
             'protocol' => 'smtp',
             'smtp_host'    => 'ssl://smtp.gmail.com',
             'smtp_port'    => '465',
             'smtp_timeout' => '7',
             'smtp_user'    => $this->config->item('email_from_address'),
             'smtp_pass'    => $this->config->item('email_from_password'),
             'charset'    => 'utf-8',
             'newline'    => "\r\n",
             'mailtype' => 'text', // or html
             'validation' => TRUE // bool whether to validate email or not      
        );

        $this->email->initialize($config);

        $this->email->from($this->config->item('email_from_address'), 'sjcmmsn');
        $this->email->to($this->config->item('email_to_address'));
        $this->email->bcc($this->config->item('email_bcc_address'));
    }

    private function sendErrorAlert($message)
    {
        $this->setUpEmail();

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

        $this->setUpEmail(); 

        $this->email->subject('New MMSN Report created');
        $this->email->message($message);

        $filePath = $this->createAttachment($report);
        $this->email->attach($filePath);

        $this->email->send();

        unlink($filePath);
    }
    
    private function getWrittenBy($report)
    {
        $writtenBy = "";
        $volunteer = $report->getVolunteer();
        
        if ($volunteer != null) {
            $writtenBy = $volunteer->getFullName();
        } else {
            $writtenBy = "admin";
        }
        
        return $writtenBy;
    }
    
    private function goodReportData($reportData)
    {
        if (array_key_exists('volunteer_id', $reportData) and
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
           array_key_exists('investigation_lat_location', $reportData) and
           array_key_exists('investigation_lon_location', $reportData) and
           array_key_exists('investigation_location_accuracy', $reportData) and
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
           array_key_exists('is_action_other', $reportData) and
           array_key_exists('relocated_location', $reportData)) {
            return true;
        } else {
            return false;
        }
    }

    private function fillReport($report, $reportData)
    {
        $reportData['call_date'] = mktime(
            $reportData['call_date_hour'],
            $reportData['call_date_minute'], 0,
            $reportData['call_date_month'],
            $reportData['call_date_dayofmonth'],
            $reportData['call_date_year']);

        $reportData['investigation_date'] = mktime(
            $reportData['investigation_date_hour'],
            $reportData['investigation_date_minute'], 0,
            $reportData['investigation_date_month'],
            $reportData['investigation_date_dayofmonth'],
            $reportData['investigation_date_year']);

        $report->fromArray($reportData, BasePeer::TYPE_FIELDNAME);
    }
}
