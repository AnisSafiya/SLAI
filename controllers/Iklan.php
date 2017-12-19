<?php
	class Iklan extends CI_Controller {
		public function index($offset = 0){


			$config['base_url'] = base_url() . 'iklan/index/';
			$config['total_rows'] = $this->db->count_all('tbl_iklan_slai');
			$config['per_page'] = 6;

			$config['uri_segment'] = 3;

			$this->pagination->initialize($config);
			
			$data['title'] = 'Pengiklanan Syarikat';

			$data['iklan'] = $this->iklan_model->get_iklan(FALSE, $config['per_page'], $offset);


			$this->load->view('templates/header');
			$this->load->view('iklan/index', $data);
			$this->load->view('templates/footer');
		}

		public function view($slug = NULL){

			
			$data['iklan'] = $this->iklan_model->get_iklan($slug);

			$data['kategori'] = $this->iklan_model->get_kategori();

			if(empty($data['iklan'])){
				show_404();
			}

			$data['title'] = $data ['iklan']['com_name'];

			$this->load->view('templates/header');
			$this->load->view('iklan/view', $data);
			$this->load->view('templates/footer');
		}

		public function create(){

			$data['title'] = 'Pengiklanan';

			$data['kategori'] = $this->iklan_model->get_kategori();

			$this->form_validation->set_rules('com_name' , 'Nama Syarikat' , 'required');
			$this->form_validation->set_rules('com_email' , 'Email Syarikat' , 'required');
			$this->form_validation->set_rules('com_phone' , 'Contact Number' , 'required');

			$this->form_validation->set_rules('com_iklan_img' , 'Logo Syarikat');

			$this->form_validation->set_rules('com_kategori' , 'Kategori' , 'required');

			$this->form_validation->set_rules('com_desc' , 'Penerangan' , 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('iklan/create', $data);
				$this->load->view('templates/footer');

		} else {
			//Upload image
			$config['upload_path'] = './assets/images/iklan';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '300';
			$config['max_height'] = '300';

			$this->load->library('upload' , $config);

			if(!$this->upload->do_upload()) {

				$errors = array('error' => $this->upload->display_errors());
				$com_iklan_image = 'nooimage.png';

			} else {
				$data = array('upload_data' =>$this->upload->data());
				$com_iklan_image = $_FILES['userfile']['name'];

			}


			$this->iklan_model->create_post($com_iklan_image);

			$this->session->set_flashdata('iklan_created' , 'Iklan anda berjaya dihantar. Sila tunggu maklumbalas dari pihak kami.');

			
			redirect('iklan');
		}

			
		}

		public function mohoniklan($slug = NULL){


			$data['userData'] = $this->user_model->fetchUserData($this->session->userData('user_id'));



			$data['iklan'] = $this->iklan_model->get_iklan($slug);

			

			$data['title'] = 'Memohon latihan industri';
		
			$this->form_validation->set_rules('pitch' , 'Make your pitch!' , 'required');


			//$this->load->view('templates/header');
			$this->load->view('iklan/mohoniklan', $data);
			$this->load->view('templates/footer');
		}
	}