<?php
class Attachment_model extends Model
{
	// -------------------------------------------------------------------------
	// Constructor
	// -------------------------------------------------------------------------
	
	public function Attachment_model()
	{
		parent::Model();

		require_once('persistence/Attachment.php');
		require_once('persistence/AttachmentQuery.php');
	}
	
	// -------------------------------------------------------------------------
	// Public Members
	// -------------------------------------------------------------------------
		
	public function deleteAttachment($attachmentData)
	{	
		$id = (int)$attachmentData['id'];
		
		$attachment = AttachmentQuery::create()->findPk($id);
		
		if($attachment != NULL)
		{
			$attachment->delete();
		}
		
		$filePath = "uploads/" . $attachmentData['file_name'];
		
		if(file_exists($filePath))
		{
			unlink($filePath);
		}
	}
	
	public function addAttachment($attachmentData, $reportId)
	{	
		$attachment = new Attachment();
		
		$attachment->setComments($attachmentData['comments']);
		$attachment->setFileName($attachmentData['file_name']);
		$attachment->setReportId($reportId);
		$attachment->save();
		
		return $attachment->getId();
	}
	
	public function modifyAttachment($attachmentData)
	{	
		$id = (int)$attachmentData['id'];

		$attachment = AttachmentQuery::create()->findPk($id);

		if($attachment != NULL)
		{
			$attachment->setComments($attachmentData['comments']);
			$attachment->setFileName($attachmentData['file_name']);
			$attachment->save();
			
			echo "Modified Attachment id " . $id;
		}
		else
		{
			echo "Attachment id not found " . $id;
		}
	}
}
?>