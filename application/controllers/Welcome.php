<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
		function __construct()
		{
				parent::__construct();
				$this->load->helper('url');
				$this->load->model('user_model');

				
	    }
 
	
    
		public function index()
		{
			$this->load->view('header');
			$this->load->view('main');
			//$this->load->view('welcome_message');
			$this->load->view('footer');
			//$this->load->view('welcome_message');
		}
		
		public function appointment()
		{
			//$this->load->view('header');
			$this->load->view('appointment_page');
			//$this->load->view('footer');
			//$this->load->view('welcome_message');
		}
		
		public function aboutus()
		{
			$this->load->view('header2');
			$this->load->view('aboutus');
			$this->load->view('footer2');
		}
		public function cancel_app()
		{
			$this->load->view('cancel_app');
			//$this->load->view('aboutus');
			//$this->load->view('footer2');
		}
		
		public function pricing()
		{
			$this->load->view('header2');
			$this->load->view('pricing');
			$this->load->view('footer2');
		}
		
		public function services()
		{
			$this->load->view('header2');
			$this->load->view('services');
			$this->load->view('footer2');
		}
		
		public function gallery()
		{
            $this->load->model('user_model');
            $data['gallery']= $this->user_model->all_gallery();
           
			 $params = array();
	        $limit_per_page = 2;
	        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	        $total_records = $this->user_model->get_total();
	 
	        if ($total_records > 0) 
	        {
	        


	            // get current page records
	            $params["results"] = $this->user_model->get_current_page_records($limit_per_page, $start_index);
	             
	            $config['base_url'] = base_url() . 'welcome/gallery';
	            $config['total_rows'] = $total_records;
	            $config['per_page'] = $limit_per_page;
	            $config["uri_segment"] = 3;
	           // $config['display_pages'] = FALSE;
	            $config['use_page_numbers'] = TRUE;
				$config['num_links'] = $total_records;
				$config['cur_tag_open'] = '&nbsp;<a class="current">';
				$config['cur_tag_close'] = '</a>';
				$config['next_link'] = 'Next';
				//$config['prev_link'] = 'Previous';
			
	             
	            $this->pagination->initialize($config);
	             
	            // build paging links
	            $data["links"] = $this->pagination->create_links();
	        }
	         $this->load->view('header2');
			$this->load->view('gallery',$data,);
			$this->load->view('footer2');
	       // $this->load->view('gallery', $params);
	        
	        
		}
//--------------		
		public function careers()
		{
			$this->load->view('header2');
			$this->load->view('careers');
			$this->load->view('footer2');
		}
		
	public function blog()
		{
		//	$this->load->view('header2');
			//$this->load->view('blog');
			//$this->load->view('footer2');
			$data['blog']= $this->user_model->Blog();
            // $data['expertise_list']= $this->User_model->expertise_list();
             //$data['details']= $this->User_model->meta_details("Blog");
            $this->load->view('header2',$data);
		    $this->load->view('blog',$data);
            $this->load->view('footer2');
		}
		
		/*	public function blog()
		{
		   $this->load->view('header2');
		   $this->load->view('blog');
		   $this->load->view('footer2');
		}*/
		public function team()
		{
			$this->load->view('header2');
			$this->load->view('team');
			$this->load->view('footer2');
			$this->load->model('User_model');
             
		}
		
		public function contact()
		{
			$this->load->view('header2');
			$this->load->view('contact');
			$this->load->view('footer2');
		}

		public function offer()
		{
			$this->load->view('header2');
			$this->load->view('offer');
			$this->load->view('footer2');
		}
		
	
		public function feedback()
		{
			$this->load->view('header2');
			$this->load->view('feedback');
			$this->load->view('footer2');
		}
		public function register()
		{
			$this->load->view('header2');
			$this->load->view('register');
			$this->load->view('footer2');
		
				//$this->load->library('form_validation');
				 //$this->load->helper(array('form', 'url'));
/*
	            $this->load->library('form_validation');

				$this->form_validation->set_rules('f_name', 'Firstname', 'trim|required');
				$this->form_validation->set_rules('l_name', 'Lastname', 'trim|required');
				$this->form_validation->set_rules('dob', 'Birthday', 'trim|required');
				$this->form_validation->set_rules('m_no', 'Mobileno', 'trim|required');
			    $this->form_validation->set_rules('email', 'Email', 'trim|required');
			                      
			              
			    $this->form_validation->set_rules('pass', 'Password', 'required|min_length[4]|md5');
			    $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
			    $this->form_validation->set_rules('c_pass', 'ConfirmPassword', 'trim|required|matches[pass]|md5');

			 if ($this->form_validation->run() == FALSE) {
				$this->load->view('register');
				} else
				 {
				//Setting values for tabel columns
				$data = array(
				'f_name' => $this->input->post('f_name'),
				'l_name' => $this->input->post('l_name'),
				'dob' => $this->input->post('dob'),
				'm_no' => $this->input->post('m_no'),
				'email' => $this->input->post('email'),
				'pass' => $this->input->post('pass'),
				'gender' => $this->input->post('gender'),
				
	  			);
				//Transfering data to Model
				 $this->db->insert('register', $data);
				 $data['message'] = 'Data Inserted Successfully';
				//Loading View
				//$this->load->view('login', $data);
				}
			}	
*/
	}	

			public function login()
			{
				 if (!($this->session->userdata('email'))) {
		            if (isset($_POST['submit'])) {
		                $this->load->library('form_validation');
		                $this->form_validation->set_rules('email', 'Email', 'trim|valid_email');
		                $this->form_validation->set_rules('pass', 'Password', 'trim|callback_check_database');
		                if ($this->form_validation->run() == FALSE) {

		                    redirect('welcome/login');
		                } else {

		                    redirect('welcome/index');
		                }
		            } else {
		                $this->load->view('login');
		            }
		        
			}
	/*$this->load->view('login');
			$this->load->library('form_validation');

                $this->form_validation->set_rules('email', 'Email', 'required');
                $this->form_validation->set_rules('password', 'Password','required|min_length[4]|md5');
                 if ($this->form_validation->run() == FALSE)
                {
                		$data = array(
							'email' => $this->input->post('email'),
							'pass'  => $this->input->post('pass'),
						);	

						
                        $this->db->select('*');
                        $this->db->from('register');
                        
                      
				        $this->db->limit(1);
				        $query = $this->db->get();

				        if ($query->num_rows() == 1) 
				        {
				        return true;
				        $this->load->view('welcome/display');
				        }
				         else 
				        {
				    			echo"no";
				        }

				}
                

	}*/
				
				function check_database($email, $pass) {
			        //Field validation succeeded.  Validate against database
			        //$this->load->library('encrypt');
			        $email = $this->input->post('email');
			        $pass = $this->input->post('pass');
			        //$encrypted_pass = md5($password);
			        $this->load->model('user_model');
			        $result = $this->user_model->login($email, $pass);


			        if ($result) {
			            $sess_array = array();
			            foreach ($result as $row) {
			                $sess_array = array(
			                    'email' => $row->email,
			                    'pass' => $row->pass,
			                );
			            }
			            return TRUE;
			        } else {
			            $this->form_validation->set_message('check_database', '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Invalid Username or Password</div>');
			            return false;
			        }
					
				}
			}

	/*	public function logout() {
        if (!($this->session->userdata('email'))) {
            redirect('welcome/login');
        } else {
            $this->session->unset_userdata('id');
            $this->session->unset_userdata('f_name');
            $this->session->unset_userdata('l_name');
            $this->session->unset_userdata('dob');
            $this->session->unset_userdata('m_no');
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('pass');
            $this->session->unset_userdata('gender');
            redirect('admin/login');
        }
    }
*/

	        public function forgotpassword()
	        {
                if (isset($_POST['forgotpassword'])) 
                    {
                $this->form_validation->set_rules('email', 'Email', 'callback_forgetemail_check');
                if ($this->form_validation->run() == FALSE)
                    {
                         redirect('welcome/forgotpassword?msg=1');
                     }
         
           
                 
                }
            $this->load->view('user/forgotpassword');
            }
	     
	        public function forgetemail_check($email) {
		        $this->load->Model('user_model');
		        $data['user'] = $this->user_model->email_exist($email);
		        $result = $this->user_model->email_exist($email);

		        if (!($result)) {
		            return false;
		        } else {
		            foreach ($data['user'] as $user)
		                $id = $user->id;

		           
		            redirect('welcome/newpassword?id=' . $id . '');
		        }
		    }

		   public function newpassword()
		   {
		   	 if(isset($_POST['newpassword']))
		   	 {
		   	 	$pass = $_POST['pass'];
		   	 	$email=$_POST['email'];
		   	 	$pass=md5($this->input->post('pass'));
		   	 	$data  = array('pass' => $pass);
		   	 	$this->load->model('user_model');
		   	 	$this->user_model->newpassword($email,$data);
		   	 	redirect('welcome/login');
		   	 }
		   	 else{
		   	 	$this->load->view('user/newpassword');
		   	 }
		   	}
//------------------------------------------------------
	 /*    public function contact_info()
          {
          	 $this->load->library('pagination');
				$config = array();
				$config["base_url"] = base_url() . "index.php/welcome/gallery";
				$total_row = $this->user_model->record_count();
				$config["total_rows"] = $total_row;
				$config["per_page"] = 1;
				$config['use_page_numbers'] = TRUE;
				$config['num_links'] = $total_row;
				$config['cur_tag_open'] = '&nbsp;<a class="current">';
				$config['cur_tag_close'] = '</a>';
				$config['next_link'] = 'Next';
				$config['prev_link'] = 'Previous';

				$this->pagination->initialize($config);
				if($this->uri->segment(3)){
				$page = ($this->uri->segment(3)) ;
				}
				else{
				$page = 1;
				}
				$data["results"] = $this->user_model->fetch_data($config["per_page"], $page);
				$str_links = $this->pagination->create_links();
				$data["links"] = explode('&nbsp;',$str_links );
				$this->load->view("gallery", $data);
		  }*/


//--------------------------------------------------------- 
//------------------------------------------------------------  
}      
             
 ?>              

      
