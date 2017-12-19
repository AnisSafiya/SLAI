<?php
	class User_model extends CI_ModeL{

		public function __construct(){
			$this->load->database();
		}

		

		public function fetchDataByUsername($MATRIK = null){
			if($MATRIK){
				$sql = "SELECT PASSWORD FROM tbl_std_slai WHERE MATRIK = ?";
				$query = $this->db->query($sql, array($MATRIK));
				$result = $query->row_array();

				return ($query->num_rows() == 1) ? $result : false;

				return $result;
			}

		}

		/*public function register ($enc_password){

			$data = array(

				'std_matric' => $this->input->post('std_matric'),
				'std_name' => $this->input->post('std_name'),
				'std_password' => $enc_password,
				'std_tahap_pengajian' => $this->input->post('std_tahap_pengajian'),
				'std_tahun_pengajian' => $this->input->post('std_tahun_pengajian'),
				'std_fakulti' => $this->input->post('std_fakulti'),
				'std_pusat_pengajian' => $this->input->post('std_pusat_pengajian'),
				'std_program' => $this->input->post('std_program'),
				'std_jabatan' => $this->input->post('std_jabatan')

				);

			return $this->db->insert('tbl_std_slai', $data);
		}
		*/

		/*public function doLogin ($result){

			//$data = array(

			//	'NAMA' => $this->input->post('NAMA'),
			//	'MATRIK' => $this->input->post('MATRIK'),
				
			//	'THNPGN' => $this->input->post('THNPGN'),
			//	'NFAKULTI' => $this->input->post('NFAKULTI'),
			//	'EMAIL' => $this->input->post('EMAIL'),
			//	'THPPGN' => $this->input->post('THPPGN'),
			//	'PROG' => $this->input->post('PROG'),		
			//	'PASSWORD' => $password,

			//	);


			return $this->db->insert('tbl_std_slai', $result);

			//return $this->db->query("INSERT INTO 'tbl_std_slai' ('NAMA', 'MATRIK', 'THNPGN', 'NFAKULTI', 'EMAIL' , 'THPPGN' , 'PROG') VALUES [""]);
		}
		*/

		public function login(){
			$MATRIK = $this->input->post('MATRIK');
			$PASSWORD = $this->input->post('PASSWORD');
			
			$userData = $this->fetchDataByUsername($MATRIK);

			if($userData){
				$sql = "SELECT * FROM tbl_std_slai WHERE MATRIK = ? AND PASSWORD = ?";
				$query = $this->db->query($sql, array($MATRIK, $PASSWORD));
				$result = $query->row_array();

				return ($query->num_rows() == 1) ? $result['MATRIK'] : false;
			} else {
				return false;
			}

		}

		public function fetchUserData($userId = null){
			if($userId){
				$sql = "SELECT * FROM tbl_std_slai WHERE MATRIK = ?";
				$query = $this->db->query($sql,array($userId));
				$result = $query->row_array();
				
				return $result;
			}

		}

		public function get_iklan($slug = FALSE){
			
			if($slug === FALSE){

				$this->db->order_by('id_ads' , 'DESC');
				$this->db->join('tbl_categoryiklan_slai' , 'tbl_categoryiklan_slai.category_id = tbl_iklan_slai.category_id');
				$query = $this->db->get('tbl_iklan_slai');
				return $query->result_array();
			}

			$query = $this->db->get_where('tbl_iklan_slai', array('slug' => $slug));
			return $query->row_array();
		}


		public function get_syarikat($fld_company_slug = FALSE){
			if($fld_company_slug === FALSE){

				$query = $this->db->get('tbl_company_slai');
				return $query->result_array();
			}

			$query = $this->db->get_where('tbl_company_slai', array('fld_company_slug' => $fld_company_slug));
			return $query->row_array();

	   }


	   public function get_mohonrow($fld_company_slug = FALSE){
	   		

	   		if($fld_company_slug === FALSE){

	  
	   			$this->db->join('tbl_company_slai' , 'tbl_company_slai.fld_company_id = tbl_mohon_slai.fld_company_id')->where ('tbl_mohon_slai.MATRIK=', $this->session->userData('user_id'));

				$query = $this->db->get('tbl_mohon_slai');

				return $query->result_array();
			}
	   	
	   		$query = $this->db->get_where('tbl_mohon_slai');
			return $query->row_array();

	   }

	    public function mohon_syarikat($MATRIK, $fld_company_id, $unique){

	    	//$this->db->select('*');

	    	//$query = $this->db->query("SELECT * FROM tbl_mohon_slai WHERE MATRIK ='".$_GET["MATRIK"]."'");



	    	//$query = $this->db->get('tbl_mohon_slai');
	    	
	    	//$query = $this->db->where ('tbl_mohon_slai.MATRIK=', $this->session->userData('user_id'));

	    	$query = $this->db->where(['MATRIK'=>$MATRIK])->from("tbl_mohon_slai");


	    	$count = $query->count_all_results();


	    	if($count == 3){

	    		return $this->db->get('tbl_mohon_slai');

	    		//echo "LIMIT 2";

	    	} else{

	    		$data = array( 
				
				'MATRIK' => $MATRIK,
				'fld_mohon_id' => $unique,
				'fld_company_id' => $fld_company_id
							
				);

			//$this->db->limit(4)

	   		
			return $this->db->insert('tbl_mohon_slai', $data);


	    	}
	    		



	    	//$this->db->select('*');
		    //$this->db->from('tbl_mohon_slai a'); 
		    //$this->db->join('tbl_company_slai b', 'b.fld_company_id=a.fld_company_id', 'left');
		    //$this->db->join('tbl_std_slai c', 'c.MATRIK=a.MATRIK', 'left');
		    //$this->db->where('c.MATRIK',$MATRIK);       
		    //$query = $this->db->get('tbl_mohon_slai');	    
		

	   }

	   public function delete_mohon($fld_mohon_id){

	   		$this->db->where('fld_mohon_id', $fld_mohon_id);
	   		return $this->db->delete('tbl_mohon_slai');  		

	   }

	   public function get_mohon_syarikat($fld_company_id){

			$this->db->select('*');
			$this->db->from('tbl_mohon_slai');
			$this->db->where('fld_company_id', $fld_company_id);

			$query = $this->db->get();

			if($query->num_rows() > 0){

				return $data->result();
			}


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

	

}