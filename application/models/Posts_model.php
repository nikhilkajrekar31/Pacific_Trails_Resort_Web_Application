<?php
	class Posts_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		
		public function getdata(){
			$query = $this->db->get('package');
			return $query->result_array();
		}
		public function get_package(){
			$query = $this->db->get('package');
			return $query->result_array();
		}
		public function get_activities(){
			$query = $this->db->get('activities');
			return $query->result_array();

		}

		public function create_reservation(){

			$data = array(
					'arrvdate' => $this->input->post('arrivaldate'),
					'nights' => $this->input->post('nights'),
					'packageid' => $this->input->post('packages')
					);
			$this->db->insert('reservationyurt',$data);
			
			$id = $this->db->insert_id();
			$data1 = array(
					'fname' => $this->input->post('firstname'),
					'lname' => $this->input->post('lastname'),
					'address' => $this->input->post('comments'),
					'phone' => $this->input->post('tel'),
					'email' => $this->input->post('email'),
					'resid' => $id,
					'activityid' => $this->input->post('activity'),
					'packageid' => $this->input->post('packages')
					);
			$this->db->insert('client',$data1);
		}

		public function show_reservation(){
			$email = $this->input->post('email');
			//query1
			$sql="SELECT * FROM client WHERE email='$email' order by clientid desc LIMIT 1";
			$query = $this->db->query($sql);
			if(empty($query->result())){
				    $finaldata = "";
				} else {
				    // records have been returned
				    $data = $query->row_array();
					$resid = $data['resid'];
					//query2
					$sql1="select * from reservationyurt where resid=$resid";
					$query1 = $this->db->query($sql1);
					$data1 = $query1->row_array();
					$actid = $data['activityid'];
					//query3
					$sql2="select * from activities where activityid=$actid";
					$query2 = $this->db->query($sql2);
					$data2 = $query2->row_array();
					$pkgid=$data['packageid'];
					//query4
		    		$sql3="select * from package where packageid=$pkgid";
		    		$query3 = $this->db->query($sql3);
					$data3 = $query3->row_array();
					//set variables
					$fname = $data['fname'];
					$lname = $data['lname'];
					$phone = $data['phone'];
					$arrvdate = $data1['arrvdate'];
					$nights = $data1['nights'];
					//set departure date
					$depdate = date('Y-m-d', strtotime($arrvdate . '+ '.$nights.'days'));
					$activitydescription = $data2['activitydescription'];
					$pkgname = $data3['pkgname'];
					//set final string array to send to controller
					$finaldata = array($email,$fname,$lname,$phone,$arrvdate,$depdate, $activitydescription, $pkgname);
					}
			return $finaldata;
		}
	}
