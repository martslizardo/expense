<?php
if (!defined('BASEPATH')) exit('No direct access allowed');
/* 
    Library for Login User
    this will get the information of the user who currently login
*/

class User {

	protected $CI;

    public function __construct() {
        $this->CI =& get_instance();
        $this->CI->load->model('Crud_model');
    }

    public function info($col) {
        // $sess = $this->CI->session->userdata('user_logged_in');
        // $where = [ 'id' => $sess['id'] ];
        // $userinfo = $this->CI->Crud_model->fetch_tag_row('*','expense_users',$where);
        $sess = $this->CI->session->userdata('user');
        $where = [ 'id' => $sess->id ];
        $userinfo=$this->CI->Crud_model->fetch('users',$where)[0];
        if(!$userinfo == NULL) {
            return $userinfo->$col; 
        }else{
            echo "Error mo to!";
        }
    }
}