<?php

class Main extends Controller {

	function Main()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->view('index');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */