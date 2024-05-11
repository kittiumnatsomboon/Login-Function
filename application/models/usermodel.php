<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usermodel extends CI_Model {


        public function index(){

        }
        function can_login($username, $password)  
        {  
           $this->db->select('id,fullname,email,password,created_at,updated_at');
           $this->db->where('email', $username);  
           $this->db->where('password', $password);  
           $query = $this->db->get('user');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           foreach($query->result() as $row){
                if($query->num_rows() > 0)  
                {       $session_data = array(  
                        'email'     =>     $email,
                        'fullname'     =>  $row->fullname,
                        'is_login'=>true 
                        );
                        $this->session->set_userdata($session_data);   
                        if($this->db->where('user_type',1)){
                                redirect('Admin/index');   
                        }
                        return true;   
                }  
                else  
                {  
                        return false;       
                }    
           }
           
        }  
}