<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_authentication extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
    }
    public function index()
    {
        $this->load->view('admin/signin');
    }
    public function admin_login(){
        if($this->input->post('login'))
        {
            $value=array(
                'admin_email'=>$this->input->post('email'),
                'admin_password'=>$this->input->post('password'), 
            );
            $data=$this->Admin_authentication_model->admin_login($value);
            if($data==1){
                // add hear flash data
                //$this->session->set_flashdata('item','set-item-value');
                //redirect(base_url('index.php/admin/Admin_dashboard'));
                echo $this->session->flashdata('item');
                
            }
            else{
                print_r($this->session->flashdata('msg1'));
            }
            
            
        }
    }
    
}