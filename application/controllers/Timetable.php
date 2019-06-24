<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timetable extends PAGES_Controller {

	public function index()
	{
		$this->load->view('pages/timetable');
	}
}
