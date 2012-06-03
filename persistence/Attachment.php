<?php



/**
 * Skeleton subclass for representing a row from the 'attachment' table.
 *
 * attachments to a report
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.persistence
 */
class Attachment extends BaseAttachment {

	public function toArray()
	{
		$array_store = array ();

		$array_store["id"] = (int)$this->getId();
		$array_store["file_name"] = $this->getFileName();
		$array_store["comments"] = $this->getComments();
		
		return $array_store;
	}
} // Attachment
