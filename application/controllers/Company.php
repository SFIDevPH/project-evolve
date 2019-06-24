<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends PAGES_Controller {

	public function index()
	{
		$this->load->view('pages/company');
	}
}
