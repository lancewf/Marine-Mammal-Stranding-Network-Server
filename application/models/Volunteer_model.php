<?php
class Volunteer_model extends CI_Model
{
// -------------------------------------------------------------------------
// Constructor
// -------------------------------------------------------------------------

  public function __construct()
  {
     parent::__construct();

     require_once('persistence/Volunteer.php');
     require_once('persistence/VolunteerQuery.php');
  }

  // -------------------------------------------------------------------------
  // Public Members
  // -------------------------------------------------------------------------

  public function getVolunteer($id)
  {
      return VolunteerQuery::create()->findPk($id);
  }

  public function getVolunteers()
  {
      $volunteers = VolunteerQuery::create()->find();

      return $volunteers;
  }

	public function deleteVolunteer($id)
	{
		$volunteer = $this->getVolunteer($id);
		
		if($volunteer)
		{
			$volunteer->delete();
		}
	}
	
	public function getIslands()
	{
		$islands = VolunteerPeer::getIslands();

 	    return $islands;
	}
	
	public function updateVolunteer($volunteerData)
	{
		$id = $volunteerData['id'];
		
		$volunteer = $this->getVolunteer($id);
		
		$this->fillVolunteer($volunteer, $volunteerData);
		
		$volunteer->save();
	}
	
	public function createVolunteer($volunteerData)
	{
		$volunteer = new Volunteer();

                unset($volunteerData['id']);

		$this->fillVolunteer($volunteer, $volunteerData);
		
		$volunteer->save();
		
		echo $volunteer->getId();
	}
	
  public function sendMessageToAll($subject, $message)
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

        $this->email->bcc($this->getListOfEmailAddresses());

        $this->email->subject($subject);
        $this->email->message($message);	

        $this->email->send();
  }
	
	// -------------------------------------------------------------------------
	// Private Members
	// -------------------------------------------------------------------------
	
	private function getListOfEmailAddresses()
	{
		$collection = array ();

		foreach($this->getVolunteers() as $volunteer)
		{
			$collection[] = $volunteer->getEmail();
		}
		
		return $collection;
	}
	
	private function fillVolunteer($volunteer, $volunteerData)
	{
		$volunteerData['streetAddress'] = $volunteerData['streetaddress'];
		$volunteerData['phoneNumber'] = $volunteerData['phonenumber'];

                $volunteer->fromArray($volunteerData, BasePeer::TYPE_FIELDNAME);
	}
}
?>
