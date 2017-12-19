<?php
	class Pages extends CI_Controller {
		public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();

			}

			
			$data['title'] = ucfirst($page);

			$data['iklan'] = $this->iklan_model->get_iklan(FALSE);


			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');


		}




	}