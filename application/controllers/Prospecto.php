<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prospecto extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('prospecto_model','prospecto');
	}

	public function index()
	{
		 if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $this->load->view('prospecto_view', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
	}

	public function ajax_list()
	{
		$list = $this->prospecto->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $prospecto) {
			$no++;
			$row = array();
			$row[] = $prospecto->nombre;
			$row[] = $prospecto->apellidos;
			$row[] = $prospecto->email;
			$row[] = $prospecto->fecha_registro;
			$row[] = $prospecto->descripcion_sede;


			//add html for action

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->prospecto->count_all(),
						"recordsFiltered" => $this->prospecto->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}



}
