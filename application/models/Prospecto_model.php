<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prospecto_model extends CI_Model {

	var $table = 'prospecto';
	var $column_order = array('nombre','apellidos','email','fecha_registro','descripcion_sede',null); //set column field database for datatable orderable
	var $column_search = array('nombre','apellidos','email','fecha_registro','descripcion_sede'); //set column field database for datatable searchable just firstname , lastname , address are searchable
	var $order = array('id' => 'desc'); // default order

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{

		$this->db->from($this->table);

		$i = 0;

		foreach ($this->column_search as $item) // loop column
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{

				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}

		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}
	function get_all(){
		$query = $this->db->get($this->table);
		return $query->result();
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function alta_prospecto($data)
	{
		$this->db->insert('prospecto', $data);
		return $this->db->insert_id();
	}
	public function alta_prospecto2($data)
	{
		$this->db->insert('busquedas1', $data);
		return $this->db->insert_id();
	}

	public function verificar_email($email)
	{
		$this->db->from('prospecto');
		$this->db->where('email',$email);
		$query = $this->db->get();

		return $query->num_rows();
	}


}
