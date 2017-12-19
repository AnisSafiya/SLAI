<?php
	class Iklan_model extends CI_ModeL{
		
		public function __construct(){
			$this->load->database();
		}

		public function get_iklan($slug = FALSE, $limit = FALSE, $offset = FALSE){
			if($limit){
				$this->db->limit($limit, $offset);

			}


			if($slug === FALSE){

				$this->db->order_by('id_ads' , 'DESC');
				$this->db->join('tbl_categoryiklan_slai' , 'tbl_categoryiklan_slai.category_id = tbl_iklan_slai.category_id');
				$query = $this->db->get('tbl_iklan_slai');
				return $query->result_array();
			}

			$query = $this->db->get_where('tbl_iklan_slai', array('slug' => $slug));
			return $query->row_array();
		}

		public function create_post($com_iklan_image){

			$slug = url_title($this->input->post('com_name'));

			$data = array( 
				'com_name' => $this->input->post('com_name'),
				'slug' => $slug,
				'com_email' => $this->input->post('com_email'),
				'com_phone' => $this->input->post('com_phone'),
				'com_iklan_image' => $com_iklan_image,
				'category_id' => $this->input->post('category_id'),
				'com_desc' => $this->input->post('com_desc')
				);

			return $this->db->insert('tbl_iklan_slai', $data);
		}

		public function get_kategori(){

			$this->db->order_by('category_name' , 'DESC');
			$query = $this->db->get('tbl_categoryiklan_slai');
			return $query->result_array();
		}
	}