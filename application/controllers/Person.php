<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Person extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('person_model','person');
	}

	public function index()
	{
		 if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $this->load->view('person_view', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
	}

	public function ajax_list()
	{
		$list = $this->person->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $person) {
			$no++;
			$row = array();
			$row[] = $person->sede;
			$row[] = $person->direccion;
			$row[] = $person->nota;
			$row[] = $person->fecha;
			$text='';
			if($person->status==1){
				$text='Publicado';
			}else{
				$text='No publicado';
			}
			$row[] = $text;

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Hapus" onclick="active_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-ok-sign"></i> Publicar</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-remove-sign"></i> Despublicar</a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->person->count_all(),
						"recordsFiltered" => $this->person->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->person->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$data = array(
				'sede' => $this->input->post('sede'),
				'direccion' => $this->input->post('direccion'),
				'nota' => $this->input->post('nota'),
				'fecha' => $this->input->post('fecha'),
			);
		$insert = $this->person->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$data = array(
				'sede' => $this->input->post('sede'),
				'direccion' => $this->input->post('direccion'),
				'nota' => $this->input->post('nota'),
				'fecha' => $this->input->post('fecha'),
				'status' => $this->input->post('status'),
			);
		$this->person->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->person->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_active($id)
	{
		$this->person->active_by_id($id);
		echo json_encode(array("status" => TRUE));
	}


}
