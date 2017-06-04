<?php
class Volunteer_hours_model extends CI_Model
{
	// -------------------------------------------------------------------------
	// Constructor
	// -------------------------------------------------------------------------
	
	public function __construct()
	{
		parent::__construct();

		require_once('persistence/VolunteerHoursQuery.php');
		require_once('persistence/VolunteerHours.php');
	}
	 
	// -------------------------------------------------------------------------
	// Public Members
	// -------------------------------------------------------------------------
	
	public function calculateTotalHours($fromMonth, $fromYear, 
		$toMonth, $toYear)
	{
		$totalHours = 0;
		if($fromYear == $toYear)
		{
			$totalHours = $this->sumMonthHours($fromMonth, $toMonth, $toYear);
		}
		else if($fromYear < $toYear)
		{
			$currentYear = $fromYear;
			
			$totalHours += $this->sumMonthHours($fromMonth, 12, $currentYear);
			
			$currentYear++;
			
			while($currentYear != $toYear)
			{
				$totalHours += $this->sumYearHours($currentYear);
				
				$currentYear++;
			}
			
			$totalHours += $this->sumMonthHours(1, $toMonth, $currentYear);
		}
		
		return $totalHours;
	}
	
	public function calculateTotalMiles($fromMonth, $fromYear, 
		$toMonth, $toYear)
	{
		$totalMiles = 0;
		if($fromYear == $toYear)
		{
			$totalMiles = $this->sumMonthMiles($fromMonth, $toMonth, $toYear);
		}
		else if($fromYear < $toYear)
		{
			$currentYear = $fromYear;
			
			$totalMiles += $this->sumMonthMiles($fromMonth, 12, $currentYear);
			
			$currentYear++;
			
			while($currentYear != $toYear)
			{
				$totalMiles += $this->sumYearMiles($currentYear);
				
				$currentYear++;
			}
			
			$totalMiles += $this->sumMonthMiles(1, $toMonth, $currentYear);
		}
		
		return $totalMiles;
	}
	
	public function getVolunteerHoursCollection($volunteer, $month, $year)
	{
		$volunteerHoursCollection = VolunteerHoursQuery::create()
			->filterByVolunteerId($volunteer->getId())
			->filterByMonth($month)
			->filterByYear($year)
			->find();

		return $volunteerHoursCollection;
	}
	
	public function deleteVolunteerHours($id)
	{
		$volunteerHours = VolunteerHoursQuery::create()->findPk($id);
		
		if($volunteerHours)
		{
			$volunteerHours->delete();
		}
	}
	
	public function updateVolunteerHours($volunteerHoursData)
	{
		$id = $volunteerHoursData['id'];
		
		$volunteerHours = VolunteerHoursQuery::create()->findPk($id);
		
		$this->fillVolunteerHours($volunteerHours, $volunteerHoursData);
		
		$volunteerHours->save();
	}
	
	public function addVolunteerHours($volunteerHoursData, $volunteer)
	{
		$volunteerHours = new VolunteerHours();
		
		$this->fillVolunteerHours($volunteerHours, $volunteerHoursData);
		
		$volunteerHours->setVolunteer($volunteer);

		$volunteerHours->save();
		
		echo $volunteerHours->getId();
	}
	
	// -------------------------------------------------------------------------
	// Private Members
	// -------------------------------------------------------------------------
	
	private function sumYearMiles($year)
	{
		$con = Propel::getConnection(VolunteerHoursPeer::DATABASE_NAME);

		$sql = "SELECT SUM(" . VolunteerHoursPeer::MILEAGE . ") AS nb" . 
			" FROM " . VolunteerHoursPeer::TABLE_NAME . " WHERE " . 
			VolunteerHoursPeer::YEAR . " = " . $year;

		$stmt = $con->prepare($sql);
    	$stmt->execute();

		$obj = $stmt->fetchColumn();
		
		if($obj == NULL)
		{
			return 0;
		}
		else
		{
			return $obj;
		}
	}
	
	private function sumMonthMiles($fromMonth, 
		$toMonth, $year)
	{
		$con = Propel::getConnection(VolunteerHoursPeer::DATABASE_NAME);

		$sql = "SELECT SUM(" . VolunteerHoursPeer::MILEAGE . ") AS nb" . 
			" FROM " . VolunteerHoursPeer::TABLE_NAME . " WHERE " . 
			VolunteerHoursPeer::YEAR . " = " . $year . " AND " .
			VolunteerHoursPeer::MONTH . " >= " . $fromMonth . " AND " .
			VolunteerHoursPeer::MONTH . " <= " . $toMonth;

		$stmt = $con->prepare($sql);
    	$stmt->execute();

		$obj = $stmt->fetchColumn();
		
		if($obj == NULL)
		{
			return 0;
		}
		else
		{
			return $obj;
		}
	}
	
	private function sumYearHours($year)
	{
		$con = Propel::getConnection(VolunteerHoursPeer::DATABASE_NAME);

		$sql = "SELECT SUM(" . VolunteerHoursPeer::TOTAL_HOURS . ") AS nb" . 
			" FROM " . VolunteerHoursPeer::TABLE_NAME . " WHERE " . 
			VolunteerHoursPeer::YEAR . " = " . $year;

		$stmt = $con->prepare($sql);
    	$stmt->execute();

		$obj = $stmt->fetchColumn();
		
		if($obj == NULL)
		{
			return 0;
		}
		else
		{
			return $obj;
		}
	}
	
	private function sumMonthHours($fromMonth, 
		$toMonth, $year)
	{
		$con = Propel::getConnection(VolunteerHoursPeer::DATABASE_NAME);

		$sql = "SELECT SUM(" . VolunteerHoursPeer::TOTAL_HOURS . ") AS nb" . 
			" FROM " . VolunteerHoursPeer::TABLE_NAME . " WHERE " . 
			VolunteerHoursPeer::YEAR . " = " . $year . " AND " .
			VolunteerHoursPeer::MONTH . " >= " . $fromMonth . " AND " .
			VolunteerHoursPeer::MONTH . " <= " . $toMonth;

		$stmt = $con->prepare($sql);
    	        $stmt->execute();

		$obj = $stmt->fetchColumn();
		
		if($obj == NULL)
		{
			return 0;
		}
		else
		{
			return $obj;
		}
	}
	
	private function fillVolunteerHours($volunteerHours, $volunteerHoursData)
	{
		$volunteerHoursData['day_of_month'] = $volunteerHoursData['dayofmonth'];

                $volunteerHours->fromArray($volunteerHoursData, BasePeer::TYPE_FIELDNAME);
	}
}
?>
