<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_authentication_model extends CI_Model {
   public function admin_login($value)
   {
    $login = $this -> db-> select('*') -> where('admin_email', $value['admin_email']) -> where('admin_password', $value['admin_password'])-> get('taksaal_admin_login')-> num_rows();
    return $login;
   }
    
}

