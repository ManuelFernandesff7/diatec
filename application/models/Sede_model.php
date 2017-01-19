<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sede_model extends CI_Model {

	var $table = 'sede';
	var $column_order = array('firstname','lastname','gender','address','dob',null); //set column field database for datatable orderable
	var $column_search = array('firstname','lastname','address'); //set column field database for datatable searchable just firstname , lastname , address are searchable
	var $order = array('id' => 'desc'); // default order

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

function get_all(){
		$query = $this->db->get($this->table);
		return $query->result();
	}

}