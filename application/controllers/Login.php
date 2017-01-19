<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {


   $this->load->helper(array('form'));
   $this->load->view('layout_other/header_view');
   $this->load->view('login_view');
   $this->load->view('layout_other/footer_view');
 }

}