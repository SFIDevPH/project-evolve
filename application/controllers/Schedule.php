<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends MYFORM_Controller {

	public function __construct() {
		parent::__construct();

	}
	public function index()
	{
		$data['location'] = $this->References->fetch_location();
		$data['type'] = $this->References->fetch_type();
		$data['class'] = $this->References->fetch_class();
		$data['time'] = $this->References->fetch_time();
		$data['instructor'] = $this->References->fetch_instructor();
		$this->load->view('form', $data);
	}
	public function add()
	{	
		$this->form_validation->set_rules('today', 'Today', 'trim|required');
		$this->form_validation->set_rules('location', 'Location', 'trim|required');
		$this->form_validation->set_rules('type', 'Type', 'trim|required');
		$this->form_validation->set_rules('timein', 'Timein', 'trim|required');
		$this->form_validation->set_rules('timeout', 'Timeout', 'trim|required');
		$this->form_validation->set_rules('class', 'Class', 'trim|required');
		$this->form_validation->set_rules('instructor', 'Instructor', 'trim|required');

		if ($this->form_validation->run() == FALSE){
			$data['location'] = $this->References->fetch_location();
			$data['type'] = $this->References->fetch_type();
			$data['class'] = $this->References->fetch_class();
			$data['time'] = $this->References->fetch_time();
			$data['instructor'] = $this->References->fetch_instructor();
			$this->load->view('form', $data);
		}else{
			$data = array(
				'ref_type' => $this->input->post('type'),
				'ref_class' => $this->input->post('class'),
				'ref_instructor' => $this->input->post('instructor'),
				'ref_location' => $this->input->post('location'),
				'booked_day' => date('l', strtotime($this->input->post('today'))),
				'booked_date' => $this->input->post('today'),
				'booked_time' => $this->input->post('timein').'-'.$this->input->post('timeout')
			);
			// print_r($data);
			$this->References->register_class($data);
		}		
	}

	public function update($id='')
	{
		$this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('mi', 'M.I.', 'trim|required');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
		$this->form_validation->set_rules('birthday', 'Birthday', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('contact', 'Contact', 'trim|required');
		$this->form_validation->set_rules('education', 'Education', 'trim|required');
		$this->form_validation->set_rules('course', 'Course', 'trim|required');
		$this->form_validation->set_rules('employment_status', 'Employment Status', 'trim');
		$this->form_validation->set_rules('position', 'Position', 'trim');


		if ($this->form_validation->run() == FALSE){
			$this->load->view('list');
		}
		else{

			$data = array(
				'datetime' => date('Y-m-d'),
				'firstname' => ucfirst($this->input->post('firstname')),
				'lastname' => ucfirst($this->input->post('lastname')),
				'mi' => strtoupper($this->input->post('mi')),
				'address' => ucwords($this->input->post('address')),
				'gender' => $this->input->post('gender'),
				'birthday' => $this->input->post('birthday'),
				'email' => $this->input->post('email'),
				'contact' => $this->input->post('contact'),
				'education' => ucwords($this->input->post('education')),
				'course' => ucwords($this->input->post('course')),
				'employment_status' => ucfirst($this->input->post('employment_status')),
				'position' => ucwords($this->input->post('position'))
			);

			$this->References->update_candidate($data);
			
		}
	}

	

	
}
