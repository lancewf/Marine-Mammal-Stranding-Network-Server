<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * The web services for the javascript client
 */
class Services extends CI_Controller
{
    // -------------------------------------------------------------------------
    // Contructor
    // -------------------------------------------------------------------------

    /**
     * The contructor for the web services
     *
     * This loads all the models needed for all the services
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->model('report_model');
        $this->load->model('volunteer_model');
        $this->load->model('volunteer_hours_model');
        $this->load->model('attachment_model');
        $this->load->model('blog_model');

        $this->load->helper(array('form', 'url', 'dompdf', 'file'));
        $this->load->model('report_human_interaction_model');
    }
    
    // -------------------------------------------------------------------------
    // Public Members
    // -------------------------------------------------------------------------

    public function getPdfOfReport()
    {
        $reports = $this->report_model->getReports();
        $report = $reports[20];

        $data = array('report' =>$report);
        $html = $this->load->view('pdf', $data, true);
        
        pdf_create($html, 'report');
    }

    public function photoUpload()
    {
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'png|qfx|jpg|xls|txt';
        $config['max_size']     =  '0';
        $config['max_width']  = '0';
        $config['max_height']  = '0';
        $config['remove_spaces']  = TRUE;

        $this->load->library('upload', $config);

        if (! $this->upload->do_upload()) {
            $data = $this->upload->data();
            
            echo "ERROR";
            //echo "file_type: " . $data["file_type"] . "\n";
            //echo "errors: " . $this->upload->display_errors('<p>', '</p>');
        } else {
            $data = $this->upload->data();

            $fileName = $data['file_name'];
            
            echo $fileName;
        }
    }

    public function getIslands()
    {
        $output = "";

        $output .= "Decatur" . ";";
        $output .= "Lopez" . ";";
        $output .= "Orcas" . ";";
        $output .= "San Juan" . ";";
        $output .= "Shaw" . ";";
        $output .= "Stuart" . ";";
        $output .= "Waldron" . ";";

        echo $output;
    }
    
        // -------------------------------------------------------------------------
    // Public Blog Members
    // -------------------------------------------------------------------------

    public function deleteBlog()
    {
        $blogId = $this->input->get_post('blogId');
        
        $this->blog_model->deleteBlog($blogId);
    }
    
    public function addBlog()
    {
        $json = $this->input->get_post('json');

        $blogData = json_decode($json, true);
        
        $newBlogId =
            $this->blog_model->addBlog($blogData);
            
        echo $newBlogId;
    }
    
    public function modifyBlog()
    {
        $json = $this->input->get_post('json');

        $blogData = json_decode($json, true);
        
        $this->blog_model->modifyBlog($blogData);
    }
    
    public function getBlogs()
    {
        $blogs = $this->blog_model->getBlogs();

        $collection = array ();

        foreach ($blogs as $blog) {
            $collection[] = $blog->toJsonArray();
        }

        echo json_encode($collection);
    }
    
    // -------------------------------------------------------------------------
    // Public Attachment Members
    // -------------------------------------------------------------------------
        
    public function deleteAttachment()
    {
        $json = $this->input->get_post('json');

        $attachmentData = json_decode($json, true);
        
        $this->attachment_model->deleteAttachment($attachmentData);
    }
    
    public function addAttachment()
    {
        $json = $this->input->get_post('json');
        $reportId = $this->input->get_post('reportid');

        $attachmentData = json_decode($json, true);
        
        $newAttachmentId =
            $this->attachment_model->addAttachment($attachmentData, $reportId);
            
        echo $newAttachmentId;
    }
    
    public function modifyAttachment()
    {
        $json = $this->input->get_post('json');

        $attachmentData = json_decode($json, true);
        
        $this->attachment_model->modifyAttachment($attachmentData);
    }
    
    // -------------------------------------------------------------------------
    // Public Volunteer Hours Members
    // -------------------------------------------------------------------------

    public function getVolunteerHoursAndMilesCalculatorAddress()
    {
        $json = $this->input->get_post('json');

        $data = json_decode($json, true);
        
        $fromMonth = $data['from_month'];
        $fromYear = $data['from_year'];
        $toMonth = $data['to_month'];
        $toYear = $data['to_year'];
        
        $totalHours = $this->volunteer_hours_model->calculateTotalHours(
            $fromMonth, $fromYear, $toMonth, $toYear);
            
        $totalMiles = $this->volunteer_hours_model->calculateTotalMiles(
            $fromMonth, $fromYear, $toMonth, $toYear);
        
        $array_store = array ();

        $array_store["total_hours"] = (double)$totalHours;
        $array_store["total_miles"] = (double)$totalMiles;
            
        echo json_encode($array_store);
    }
    
    public function updateVolunteerHours()
    {
        $json = $this->input->get_post('json');

        $volunteerHoursData = json_decode($json, true);
        
        $this->volunteer_hours_model->updateVolunteerHours(
            $volunteerHoursData);
    }
    
    public function createVolunteerHours()
    {
        $json = $this->input->get_post('json');
        $volunteerId = (int)$this->input->get_post('volunteerId');
        
        $volunteerHoursData = json_decode($json, true);

        $volunteer = $this->volunteer_model->getVolunteer($volunteerId);

        echo $this->volunteer_hours_model->addVolunteerHours(
            $volunteerHoursData, $volunteer);
    }
    
    public function getVolunteerMonthlyHoursCollection()
    {
        $month = (int)$this->input->get_post('month');
        $year = (int)$this->input->get_post('year');
        $volunteerId = (int)$this->input->get_post('volunteerId');

        $volunteer = $this->volunteer_model->getVolunteer($volunteerId);
        
        $volunteerHoursCollection =
            $this->volunteer_hours_model->getVolunteerHoursCollection(
            $volunteer, $month, $year);

        $collection = array ();
                    
        foreach ($volunteerHoursCollection as $volunteerHours) {
            $collection[] = $volunteerHours->toJsonArray();
        }

        echo json_encode($collection);
    }

    public function deleteVolunteerHours()
    {
        $id = (int)$this->input->get_post('volunteerHoursId');

        $this->volunteer_hours_model->deleteVolunteerHours($id);
    }

    // -------------------------------------------------------------------------
    // Public Report Members
    // -------------------------------------------------------------------------
    
    public function updateReport()
    {
        $json = $this->input->get_post('json');

        $reportData = json_decode($json, true);
        
        $this->report_model->updateReport($reportData);
    }

    public function createReport()
    {
        $json = $this->input->get_post('json');

        $reportData = json_decode($json, true);
        
        echo $this->report_model->addReport($reportData);
    }
    
    public function deleteReport()
    {
        $id = (int)$this->input->get_post('reportId');

        $this->report_model->deleteReport($id);
    }

    public function getReports()
    {

        $reports = $this->report_model->getReports();

        $collection = array ();

        foreach ($reports as $report) {
            $collection[] = $report->toJsonArray();
        }

        echo json_encode($collection);
    }

    // -------------------------------------------------------------------------
    // Public Volunteer Members
    // -------------------------------------------------------------------------

    public function sendEmailToVolunteers()
    {
        $json = $this->input->get_post('json');
        
        $emailData = json_decode($json, true);
        
        $subject = $emailData['subject'];
        $message = $emailData['message'];
        
        $this->volunteer_model->sendMessageToAll($subject, $message);
        
        echo "Success";
    }
    
    public function getVolunteers()
    {
        $volunteers = $this->volunteer_model->getVolunteers();

        $collection = array ();

        foreach ($volunteers as $volunteer) {
            $collection[] = $volunteer->toJsonArray();
        }

        echo json_encode($collection);
    }

    public function deleteVolunteer()
    {
        $id = (int)$this->input->get_post('volunteerId');

        $this->volunteer_model->deleteVolunteer($id);
    }

    public function updateVolunteer()
    {
        $json = $this->input->get_post('json');
        
        $volunteerData = json_decode($json, true);
        
        $this->volunteer_model->updateVolunteer($volunteerData);
    }
    
    public function createVolunteer()
    {
        $json = $this->input->get_post('json');
        
        $volunteerData = json_decode($json, true);
        
        echo $this->volunteer_model->createVolunteer($volunteerData);
    }

    // -------------------------------------------------------------------------
    // Private Members
    // -------------------------------------------------------------------------

    private function getBoolean($textBoolean)
    {
        if ($textBoolean == "true") {
            return true;
        } else {
            return false;
        }
    }
}
