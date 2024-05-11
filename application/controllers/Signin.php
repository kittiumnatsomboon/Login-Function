<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construce(){
		parent::__construct();
		$this->load->model('usermodel');
	}
	public function index()
	{	
		
		$this->load->view('homepage');
	}
	public function loginUser(){
		
           $this->form_validation->set_rules('email', 'email', 'required');  
           $this->form_validation->set_rules('password', 'password', 'required');  
           if($this->form_validation->run())  
           {  
                //true  
                $email = $this->input->post('email');  
                $password = md5($this->input->post('password'));  
                //model function  
			
                $this->load->model('usermodel');
                if($this->usermodel->can_login($email, $password))  
                {  
                     redirect(base_url('Dashboard/index'));  
                }  
                else  
                {  
                     $this->session->set_flashdata('error', 'Invalid Username and Password');  
                     redirect(base_url('index.php/Homepage/index'));  
                }  
           }  
           else  
           {  
                //false  
                redirect('index.php/Homepage/index');  
           }  
	}

}
