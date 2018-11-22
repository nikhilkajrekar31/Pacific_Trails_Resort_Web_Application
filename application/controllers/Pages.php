<?php
	class Pages extends CI_Controller{
		public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
			$data['title'] = ucfirst($page);
			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}

		public function cart($page = 'cart'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
			$data['title'] = ucfirst($page);
			// $this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			// $this->load->view('templates/footer');
		}
		public function placeyourorder($page = 'placeyourorder'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
			$data['title'] = ucfirst($page);
			// $this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			// $this->load->view('templates/footer');
		}
		public function orderdemo($page = 'orderdemo'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
			$data['title'] = ucfirst($page);
			// $this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			// $this->load->view('templates/footer');
		}

		public function viewpkgs(){
			$data['package'] = $this->posts_model->getdata();
			$this->load->view('templates/header');
			$this->load->view('pages/yurts', $data);
			$this->load->view('templates/footer');
		}

		function checkDate($date){
				if(strtotime($date)<mktime(0,0,0)){
					return FALSE;
				}else{
					return TRUE;
				}
			}

		function nameRegex($name){
			if(preg_match('/^[a-zA-Z]+$/', $name)){
				return TRUE;
			}else{
				return FALSE;
			}
		}

		function nameRegex1($name){
			if(preg_match('/^[a-zA-Z]+$/', $name)){
				return TRUE;
			}else{
				return FALSE;
			}
		}

		public function reservation(){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('firstname', 'First Name', 'required|callback_nameRegex');
			$this->form_validation->set_rules('lastname', 'Last Name', 'required|callback_nameRegex1');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('comments', 'Comments', 'required');
			$this->form_validation->set_rules('tel', 'Phone', 'numeric|min_length[10]');
			$this->form_validation->set_rules('arrivaldate', 'Arrival Date', 'callback_checkDate');
			$this->form_validation->set_message('checkDate', 'Date is in the past');
			$this->form_validation->set_message('nameRegex', 'First Name is required and should only contain alphabets');
			$this->form_validation->set_message('nameRegex1', 'Last Name is required and should only contain alphabets');
			$this->form_validation->set_rules('when', 'When Date', 'callback_checkDate');

			$this->form_validation->set_error_delimiters('<span style="color: red;">', '</span>');

			$data['activities'] = $this->posts_model->get_activities();
			$data['package'] = $this->posts_model->get_package();

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('pages/reservations', $data);
				$this->load->view('templates/footer');
			}
			else{
				$this->posts_model->create_reservation();
				$this->load->view('templates/header');
				$this->load->view('pages/reservationsview');
				$this->load->view('templates/footer');
			}
		}
		
		public function myreservation(){
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_error_delimiters('<span style="color: red;">', '</span>');
			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('pages/myreservations');
				$this->load->view('templates/footer');
			}else{
				$data['posts'] = $this->posts_model->show_reservation(); 
				if(empty($data['posts'])){
					$this->load->view('templates/header');
					$this->load->view('pages/myreservationsview');
					$this->load->view('templates/footer');
				}else{
					$this->load->view('templates/header');
					$this->load->view('pages/myreservationsview1', $data);
					$this->load->view('templates/footer');
				}
			}
		}
	}