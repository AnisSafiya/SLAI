<?php
	class Users extends CI_Controller {
		
		function __construct(){
			parent::__construct();

			$this->load->library('form_validation');
      		$this->load->library("nusoap_library");
      		$this->load->library('session');
      		
      
  	}
	/*	public function register(){

			$data['title'] = 'Pendaftaran';


			$this->form_validation->set_rules ('std_matric' , 'No Pendaftaran' , 'required');
			$this->form_validation->set_rules ('std_name' , 'Nama' , 'required');

			$this->form_validation->set_rules ('std_tahap_pengajian' , 'Tahap Pengajian' , 'required');
			$this->form_validation->set_rules ('std_tahun_pengajian' , 'Tahun Pengajian' , 'required');
			
			$this->form_validation->set_rules ('std_fakulti' , 'Fakulti' , 'required');
			$this->form_validation->set_rules ('std_pusat_pengajian' , 'Pusat Pengajian' , 'required');
			$this->form_validation->set_rules ('std_program' , 'Program' , 'required');
			$this->form_validation->set_rules ('std_jabatan' , 'Jabatan' , 'required');
			$this->form_validation->set_rules ('std_password' , 'Kata Laluan' , 'required');
			$this->form_validation->set_rules ('std_password2' , 'Sahkan Kata Laluan' , 'matches[std_password]');

			if ($this->form_validation->run() === FALSE) {
				 $this->load->view('templates/header');
				 $this->load->view('users/register', $data);
				 $this->load->view('templates/footer');
				
			} else {
				 $enc_password = md5($this->input->post('std_password'));

				 $this->user_model->register($enc_password);

				 $this->session->set_flashdata('user_registered' , 'Pendaftaran berjaya! Anda kini boleh log masuk');

				 redirect('users/login');
			}

		}
		*/

		public function profile($users = NULL){
				

			$data['title'] = 'Maklumat Diri';

			if($users == 'login'){

		    	$this->loggedIn();

		    } else {
		    	$this->notLoggedIn();

		    	$this->load->library('session');

		    	$this->load->model('user_model');
		    	$data['userData'] = $this->user_model->fetchUserData($this->session->userData('user_id'));
		    }

			
			$this->load->view('users/profile', $data);
			$this->load->view('templates/footer');
		}


		public function login(){
			
			$data['title'] = 'Log Masuk';

			$this->form_validation->set_rules ('MATRIK' , 'Matric Number' , 'required');
			$this->form_validation->set_rules ('PASSWORD' , 'Password' , 'required');


			if($this->form_validation->run() === true){

				$login = $this->user_model->login();

				if($login){

					$this->load->library('session');

					$newdata = array(
						'user_id' => $login,
						'logged_in' => TRUE
					);

					$this->session->set_userdata($newdata);

					$validator['success'] = true;
					//$validator['messages'] = 'users/profile';

					redirect('users/profile');
	
			
				} else {
					$validator['success'] = false;
					$validator['messages'] = 'Incorrect username/password';
				}
				
			} else {
				$validator['success'] = false;
				
				foreach ($_POST as $key => $value) {
				
					$validator['messages'][$key] = form_error($key);
				}
			}

			
			$this->load->view('users/login', $data);

		}


	/*	public function login(){
			
			$data['title'] = 'Log Masuk';

			$this->form_validation->set_rules ('username' , 'No Pendaftaran' , 'required');
			$this->form_validation->set_rules ('password' , 'Kata Laluan' , 'required');

			$this->load->view('templates/header');
			$this->load->view('users/login', $data);
			$this->load->view('templates/footer');

			if ($this->input->post('form-submitted') == "login") {
        
	            $username = $this->input->post("username");
	            $password = $this->input->post("password");
	            
	            $client = new nusoap_client("https://smp.ukm.my/webservices/login/ws_authentic.cfc?wsdl", true);
	            $ipaddr = "10.3.136.148";
	            $lang = "en";
	            $result = $client->call('f_login', 
	            	array(
	            		'id'=>$username, 
	            		'passwd'=>$password, 
	            		'ipaddr'=>$ipaddr, 
	            		'lang'=>$lang));

            	if ($result['STATUS'] =="true") {

            		
            				
            		$this->user_model->doLogin($result);

					$user_data = array(

						'username' => $MATRIK,
						'email' => $EMAIL,

						'logged_in' => true						
					);

					$this->session->set_userdata($user_data);


					$this->session->set_flashdata('user_loggedin' , 'Log masuk berjaya!');

			
					redirect('users/maklumatdiri');  // bila login correct
            	}

            	else {

					$this->session->set_flashdata('login_failed' , 'Log masuk tidak berjaya');

					redirect('users/login');//bila x betul login

			}
		}

		}
		
		*/



			/*if ($this->form_validation->run() === FALSE) {
				 $this->load->view('templates/header');
				 $this->load->view('users/login', $data);
				 $this->load->view('templates/footer');
				
			} else {

				$std_matric = $this->input->post('std_matric');

				$std_password = md5($this->input->post('std_password'));

				$user_id = $this->user_model->login($std_matric, $std_password);

				if($user_id){

					$user_data = array(

						'user_id' => $user_id,
						'std_matric' => $std_matric,
						'logged_in' => true
					
						);

					$this->session->set_userdata($user_data);


					$this->session->set_flashdata('user_loggedin' , 'Log masuk berjaya!');

					redirect('home');

				} else {

					$this->session->set_flashdata('login_failed' , 'Log masuk tidak berjaya');

					redirect('users/login');

				}

				
				
			}

		} */

		public function loggedIn(){
			if($this->session->userData('logged_in') === TRUE){

				//redirect('index.php/profile')
				header('location: profile');
			}
		}

		public function notLoggedIn(){
			if($this->session->userData('logged_in') != true){
				header('location: ../');
			}
		}

		public function logout(){
			//Unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('MATRIK');

			$this->session->set_flashdata('user_loggedout' , 'Anda telah log keluar');

			redirect('users/login');

		}

		public function boranglapordiri($users = NULL){

			$data['title'] = 'Borang Lapor Diri';

			if($users == 'login'){

		    	$this->loggedIn();

		    } else {
		    	$this->notLoggedIn();

		    	$this->load->library('session');

		    	$this->load->model('user_model');
		    	$data['userData'] = $this->user_model->fetchUserData($this->session->userData('user_id'));
		    }
		
		

	
			$this->load->view('users/boranglapordiri', $data);

		}


		public function syarikat($users = NULL){

			if($users == 'login'){

		    	$this->loggedIn();

		    } else {
		    	$this->notLoggedIn();

		    	$this->load->library('session');

		    	$this->load->model('user_model');
		    	$data['userData'] = $this->user_model->fetchUserData($this->session->userData('user_id'));
		    }
		
			
			//if($users = 'mohon'){
				//$unique = uniqid('M', true);
			//}

			$data['title'] = 'Senarai Syarikat';

			$data['syarikat'] = $this->user_model->get_syarikat();

			$data['mohonrow'] = $this->user_model->get_mohonrow();



			$this->load->view('templates/header');
			$this->load->view('users/syarikat', $data);
			$this->load->view('templates/footer');
		}

		public function mohon(){

			//echo $MATRIK ."<br />";

			//echo $fld_company_id ."<br />";

			//echo uniqid('M', true);


			$MATRIK = $this->uri->segment(3);

			$fld_company_id = $this->uri->segment(4);

			$unique = uniqid('M', true);

			//$fld_company_id = $this->uri->segment(3);

			$this->user_model->mohon_syarikat($MATRIK, $fld_company_id, $unique);

			redirect('users/syarikat', 'refresh');
			

	}


		public function delete($fld_mohon_id){

			//echo "hi";

			$fld_mohon_id = $this->uri->segment(3);

			$this->user_model->delete_mohon($fld_mohon_id);

			redirect('users/syarikat', 'refresh');
			

	}

	public function cl2($fld_company_id){
				

		   $data['mohoncl'] = $this->user_model->get_mohon_syarikat($fld_company_id);


		   //$MATRIK = $this->uri->segment(3);

			//$fld_company_id = $this->uri->segment(4);

			//echo 'hai';

			//echo $userData['MATRIK]']."<br />";

			//echo $fld_company_id ."<br />";

			//echo $fld_mohon_date;

		    //$data['mohoncl'] = $this->user_model->get_mohon_syarikat($fld_company_id);

		    //$data['mohonrow'] = $this->user_model->get_tbl_mohon_slai();

		   // $MATRIK = $this->uri->segment(3);

			//$fld_company_id = $this->uri->segment(4);

			//$unique = uniqid('M', true);

			//$data['mohon'] = $this->user_model->mohon_syarikat($MATRIK, $fld_company_id, $unique);

			//$data['syarikat'] = $this->user_model->get_mohonrow();

			
			$this->load->view('users/cl2', $data);
		}
}

