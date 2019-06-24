<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends SERVICES_Controller {

	public function mind()
	{
		$data['sublinks'] = $this->References->fetch_sublinks($type='mind');
		$this->load->view('pages/services/mind', $data);
	}
	public function body()
	{
		$data['sublinks'] = $this->References->fetch_sublinks($type='body');
		$this->load->view('pages/services/body', $data);
	}
	public function soul()
	{
		$data['sublinks'] = $this->References->fetch_sublinks($type='soul');
		$this->load->view('pages/services/soul', $data);
	}
	// public function ourpersonalisedtraining()
	// {
	// 	$this->load->view('pages/services/ourpersonalisedtraining');
	// }
	// public function fitnessclasses()
	// {
	// 	$this->load->view('pages/services/fitnessclasses');
	// }
	// public function swimming()
	// {
	// 	$this->load->view('pages/services/swimming');
	// }
	// public function nutrition()
	// {
	// 	$this->load->view('pages/services/nutrition');
	// }
	// public function biomechanics()
	// {
	// 	$this->load->view('pages/services/biomechanics');
	// }
	// public function accessbar()
	// {
	// 	$this->load->view('pages/services/accessbar');
	// }
	// public function thetahealing()
	// {
	// 	$this->load->view('pages/services/thetahealing');
	// }
	// public function soundtherapy()
	// {
	// }
	// 	$this->load->view('pages/services/soundtherapy');
	// public function cosmicmassage()
	// {
	// 	$this->load->view('pages/services/cosmicmassage');
	// }
	// public function thaimassage()
	// {
	// 	$this->load->view('pages/services/thaimassage');
	// }
	// public function ayurveda()
	// {
	// 	$this->load->view('pages/services/ayurveda');
	// }
	// public function pranichealing()
	// {
	// 	$this->load->view('pages/services/pranichealing');
	// }
	// public function corporatewellness()
	// {
	// 	$this->load->view('pages/services/corporatewellness');
	// }
	// public function mindfulness()
	// {
	// 	$this->load->view('pages/services/mindfulness');
	// }
}
