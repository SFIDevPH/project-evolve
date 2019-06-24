<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends PAGES_Controller {

	public function index()
	{
		// $this->load->view('pages/');
	}
	public function ourapproach()
	{
		$this->load->view('pages/ourapproach');
	}
	public function events()
	{
		$this->load->view('pages/events');
	}
	public function timetable()
	{
		$data['booked'] = $this->References->fetch_list_sched();
		$this->load->view('pages/timetable', $data);
	}
	public function ourteam()
	{
		$this->load->view('pages/ourteam');
	}
	public function ourvenues()
	{
		$this->load->view('pages/ourvenues');
	}
}
