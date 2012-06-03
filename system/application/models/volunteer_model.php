<?php
class Volunteer_model extends Model
{
	// -------------------------------------------------------------------------
	// Constructor
	// -------------------------------------------------------------------------
	
	public function Volunteer_model()
	{
		parent::Model();

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
		
		$this->fillVolunteer($volunteer, $volunteerData);
		
		$volunteer->save();
		
		echo $volunteer->getId();
	}
	
	public function sendMessageToAll($subject, $message)
	{		
		$this->load->library('email');
		
		$this->email->from('mmsn@sanjuancountymmsn.com', 'San Juan County MMSN');
		
		$this->email->to('amy@whalemuseum.org'); 
		//$this->email->to('coasterq@gmail.com'); 

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

//		$collection[] = "lancewf@yahoo.com";
//		$collection[] = "lancewf@gmail.com";
//		$collection[] = "mauixtrm@yahoo.com";
//		$collection[] = "coasterq@coasterq.com";
		
		foreach($this->getVolunteers() as $volunteer)
		{
			$collection[] = $volunteer->getEmail();
		}
		
		return $collection;
	}
	
	private function fillVolunteer($volunteer, $volunteerData)
	{
		$volunteer->setFirstName($volunteerData['first_name']);
		$volunteer->setLastName($volunteerData['last_name']);
		$volunteer->setCity($volunteerData['city']);
		$volunteer->setState($volunteerData['state']);
		$volunteer->setZip($volunteerData['zip']);
		$volunteer->setStreetaddress($volunteerData['streetaddress']);
		$volunteer->setVehicle($volunteerData['vehicle']);
		$volunteer->setIsland($volunteerData['island']);
		$volunteer->setComments($volunteerData['comments']);
		$volunteer->setPhonenumber($volunteerData['phonenumber']);
		$volunteer->setEmail($volunteerData['email']);
		$volunteer->setTraining($volunteerData['training']);
		
		$volunteer->setSundayFromHour($volunteerData['sunday_from_hour']);
		$volunteer->setMondayFromHour($volunteerData['monday_from_hour']);
		$volunteer->setTuesdayFromHour($volunteerData['tuesday_from_hour']);
		$volunteer->setWednesdayFromHour($volunteerData['wednesday_from_hour']);
		$volunteer->setThursdayFromHour($volunteerData['thursday_from_hour']);
		$volunteer->setFridayFromHour($volunteerData['friday_from_hour']);
		$volunteer->setSaturdayFromHour($volunteerData['saturday_from_hour']);
		
		$volunteer->setSundayToHour($volunteerData['sunday_to_hour']);
		$volunteer->setMondayToHour($volunteerData['monday_to_hour']);
		$volunteer->setTuesdayToHour($volunteerData['tuesday_to_hour']);
		$volunteer->setWednesdayToHour($volunteerData['wednesday_to_hour']);
		$volunteer->setThursdayToHour($volunteerData['thursday_to_hour']);
		$volunteer->setFridayToHour($volunteerData['friday_to_hour']);
		$volunteer->setSaturdayToHour($volunteerData['saturday_to_hour']);
		
		$volunteer->setSundayAnyTime($this->getBoolean($volunteerData['sunday_any_time']));
		$volunteer->setMondayAnyTime($this->getBoolean($volunteerData['monday_any_time']));
		$volunteer->setTuesdayAnyTime($this->getBoolean($volunteerData['tuesday_any_time']));
		$volunteer->setWednesdayAnyTime($this->getBoolean($volunteerData['wednesday_any_time']));
		$volunteer->setThursdayAnyTime($this->getBoolean($volunteerData['thursday_any_time']));
		$volunteer->setFridayAnyTime($this->getBoolean($volunteerData['friday_any_time']));
		$volunteer->setSaturdayAnyTime($this->getBoolean($volunteerData['saturday_any_time']));
		
		$volunteer->setSundayNoTime($this->getBoolean($volunteerData['sunday_no_time']));
		$volunteer->setMondayNoTime($this->getBoolean($volunteerData['monday_no_time']));
		$volunteer->setTuesdayNoTime($this->getBoolean($volunteerData['tuesday_no_time']));
		$volunteer->setWednesdayNoTime($this->getBoolean($volunteerData['wednesday_no_time']));
		$volunteer->setThursdayNoTime($this->getBoolean($volunteerData['thursday_no_time']));
		$volunteer->setFridayNoTime($this->getBoolean($volunteerData['friday_no_time']));
		$volunteer->setSaturdayNoTime($this->getBoolean($volunteerData['saturday_no_time']));
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