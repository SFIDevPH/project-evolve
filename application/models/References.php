<?php



Class References extends CI_Model {

	// INSERT

	function register_class($data){

		$this->db->insert('tbl_booked',$data);



		$data['location'] = $this->References->fetch_location();

		$data['type'] = $this->References->fetch_type();

		$data['class'] = $this->References->fetch_class();

		$data['time'] = $this->References->fetch_time();

		$data['instructor'] = $this->References->fetch_instructor();

		

		$data['msg'] = "Successfully Added Class";

		$this->load->view('form', $data);

	}

	// SELECT

	function fetch_candidate(){

	    $query =  $this->db->get('tbl_candidate');

		if($query->num_rows() > 0){

			foreach($query->result() as $row){

				$data[] = $row;

			}

			return $data;

		}

		return false;

	}

	// Time-In Time-Out

	function fetch_time(){

	    $query =  $this->db->get('ref_time');

		if($query->num_rows() > 0){

			foreach($query->result() as $row){

				$data[] = $row;

			}

			return $data;

		}

		return false;

	}

	// class type

	function fetch_type(){

	    $query =  $this->db->get('ref_type');

		if($query->num_rows() > 0){

			foreach($query->result() as $row){

				$data[] = $row;

			}

			return $data;

		}

		return false;

	}

	// Instructor

	function fetch_instructor(){

	    $query =  $this->db->get('ref_instructor');

		if($query->num_rows() > 0){

			foreach($query->result() as $row){

				$data[] = $row;

			}

			return $data;

		}

		return false;

	}

	// ClassSchedule

	function fetch_class(){

	    $query =  $this->db->get('ref_class');

		if($query->num_rows() > 0){

			foreach($query->result() as $row){

				$data[] = $row;

			}

			return $data;

		}

		return false;

	}

	// Locations

	function fetch_location(){

	    $query =  $this->db->get('ref_location');

		if($query->num_rows() > 0){

			foreach($query->result() as $row){

				$data[] = $row;

			}

			return $data;

		}

		return false;

	}

	function fetch_list_sched(){

		$query = $this->db->get('schedule_view');



		if($query->num_rows() > 0){

			foreach($query->result() as $row){

				$data[] = $row;

			}

			return $data;

		}

		return false;

	}

	function fetch_sublinks($type=''){ //type (mind,body,soul)

		$this->db->where('type', $type);

		$query = $this->db->get('sublinks_view');



		if($query->num_rows() > 0){

			foreach($query->result() as $row){

				$data[] = $row;

			}

			return $data;

		}

		return false;

	}

	function update_candidate($data){

		$this->db->update('tbl_candidate',$data);



		$data['msg'] = "Successfully Registered!";

		$this->load->view('list', $data);

	}



	function delete_candidate($id){

		$this->db->where('id', $id);

		$this->db->delete('tbl_candidate');

		redirect($_SERVER['HTTP_REFERER']);  

	}

}



?>