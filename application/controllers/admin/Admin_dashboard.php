<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('admin/dashboard');
	}
    public function my_profile()
    {
      echo"helloo";
    }
    
}

