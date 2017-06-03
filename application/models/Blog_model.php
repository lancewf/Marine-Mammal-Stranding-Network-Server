<?php
class Blog_model extends CI_Model
{
	// -------------------------------------------------------------------------
	// Constructor
	// -------------------------------------------------------------------------
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('volunteer_model');
		
		require_once('persistence/BlogEntry.php');
		require_once('persistence/BlogEntryQuery.php');
	}
	
	// -------------------------------------------------------------------------
	// Public Members
	// -------------------------------------------------------------------------
	
	public function getBlogs()
	{
		$blogs = BlogEntryQuery::create()->find();

		return $blogs;
	}
	
	public function deleteBlog($id)
	{
		$blog = BlogEntryQuery::create()->findPk($id);
		
		if($blog != NULL)
		{
			$blog->delete();
		}
	}
	
	public function addBlog($blogData)
	{	
		$blog = new BlogEntry();
		
		$date = mktime(
			12, 0, 0,
			$blogData['month'], 
			$blogData['dayofmonth'], 
			$blogData['year']);
			
		$blog->setTitle($blogData['title']);
		$blog->setMessage($blogData['message']);
		$blog->setDate($date);
		$blog->save();
		
		$this->emailAll($blogData['title'], $blogData['message']);
		
		return $blog->getId();
	}
	
	public function modifyBlog($blogData)
	{	
		$id = (int)$blogData['id'];

		$blog = BlogEntryQuery::create()->findPk($id);

		if($blog != NULL)
		{
			$date = mktime(
				12, 0, 0,
				(int)$blogData['month'], 
				(int)$blogData['dayofmonth'], 
				(int)$blogData['year']);
				
			$blog->setTitle($blogData['title']);
			$blog->setMessage($blogData['message']);
			$blog->setDate($date);
			
			$blog->save();
			
			echo "Modified Attachment id " . $id;
		}
		else
		{
			echo "Attachment id not found " . $id;
		}
	}
	
	// -------------------------------------------------------------------------
	// Private Members
	// -------------------------------------------------------------------------
	
	
	private function emailAll($subject, $message)
	{
		$this->volunteer_model->sendMessageToAll($subject, $message);
	}
}
?>
