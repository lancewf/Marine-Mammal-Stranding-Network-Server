<?php



/**
 * Skeleton subclass for representing a row from the 'blog_entry' table.
 *
 * attachments to a report
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.persistence
 */
class BlogEntry extends BaseBlogEntry {
	
	public function toJsonArray()
	{
        	$array_store = $this->toArray(BasePeer::TYPE_FIELDNAME);

		$array_store["dayofmonth"] = (int)$this->getDayOfMonth();
		$array_store["month"] = (int)$this->getMonth();
		$array_store["year"] = (int)$this->getYear();

		return $array_store;
	}
	
    private function getYear()
    {
    	$dateObject = strtotime($this->getDate());
		return date("Y", $dateObject);
    }
    
	private function getDayOfMonth()
    {
    	$dateObject = strtotime($this->getDate());
		return date("j", $dateObject);
	}

	private function getMonth()
    {
    	$dateObject = strtotime($this->getDate());
		return date("n", $dateObject);
	}
} // BlogEntry
