
<?php
class User_model extends CI_Model  
{ 

      function __construct()
        {
          parent::__construct();
        }
           function form_insert($data)
            {
              $this->db->insert('register', $data);
            }

   
            function login($email, $pass) {

                $this->db->select('id,email,pass');
                $this->db->from('register');
                $this->db->where('email', $email);
                $this->db->where('pass', $pass);
                $this->db->limit(1);

                $query = $this->db->get();

                if ($query->num_rows() == 1) {
                   
                   $sql = "select * from register where email='" . $email . "' and pass='" . $pass. "'";
                    
                    $result1 = $this->db->query($sql);
                    $row = $result1->row();
                    $session_user = array(
                        'id' => $row->id,
                        'f_name' => $row->f_name,
                        'l_name' => $row->l_name,
                        'dob' => $row->dob,
                        'm_no' => $row->m_no,
                        'email' => $row->email,
                        'pass' => $row->pass,
                        'gender' => $row->gender,
                    );
                    $this->session->set_userdata($session_user);
                    $sess_data = $this->session->set_userdata($session_user);
                    $this->session->userdata('user_email');
                    return $query->result();
                    //print_r($session_user); exit;
                    return true;
                }  else {
                    return false;
                }
            }

           



            function edit($id)
             {
                //$query=$this->db->query("select * from register where id='".$id."'");
                //return $query->result();
                $query = $this->db->query('select * from register where id="'.$id.'"');
                if ($query->num_rows() > 0)
              {
                return $query->result();
              }
                /* $this->db->select('*');
                $this->db->from('register');
                $this->db->where('id', $data);
                $query = $this->db->get();
                $result = $query->result();
                return $result;
                }*/
            }
          

              public function email_exist($email) 
              {
                      $this->db->select('*');
                      $this->db->from('register');
                      $this->db->where('email', $email);
                      $this->db->limit(1);
                      $query = $this->db->get();
                      if ($query->num_rows() > 0) 
                      {
                          return $query->result();
                      }
              }

              public function newpassword($id,$pass)
              {
                 $this->db->select('id');
                  $this->db->from('register');
                  $this->db->where('id');
                  $this->db->where('pass');
                  $this->db->limit(1);
                  $qry = $this->db->get();
                   if($qry->num_rows() == 1)
                   {
                    return true;
                   }
                   else{
                    return false;
                   }
                   
              }
         public function all_gallery()
             {
                 //$this->db->select('*');
                 //$this->db->from('register');
                 //$qry = $this->db->get();
                // $result = $qry->result();
                 //return $return;
              $query = $this->db->query('SELECT * FROM gallery where name=name');
      
         if ($query->num_rows() > 0) {
            return $query->result();
        }
              }
  //--------------------------------
   /* public function record_count()
     {
        return $this->db->count_all("gallery");
     }

// Fetch data according to per_page limit.
    public function fetch_data($limit, $id) {
       $this->db->select('*');
        $this->db->from('gallery');
        $this->db->limit($limit);
        $this->db->where('id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
        foreach ($query->result() as $row) {
        $data[] = $row;
        }

        return $data;
        }
        return false;
        }*/
         public function get_current_page_records($limit, $start) 
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get("gallery");
 
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
             
            return $data;
        }
 
        return false;
    }
     
    public function get_total() 
    {
        return $this->db->count_all("gallery");
    }
//----------------------------------------------------------- 
    public function Blog() {
       
        $query = $this->db->query('SELECT * FROM blog ');
      
         if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
 //-----------------------------------------------------------
}
?>


