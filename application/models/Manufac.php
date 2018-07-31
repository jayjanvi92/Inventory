<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manufac extends CI_Model {

	public function insert_menufac($data){
		
		if($this->db->insert('tbl_manufactur',$data)){
			return ture;
		}

	}

	public function get_menufac(){

		$this->db->select('*');
	    $this->db->from('tbl_manufactur');
	    return $query = $this->db->get()->result();
	}

	public function insert_model($data){

		if($this->db->insert('tbl_model',$data)){
			return ture;
		}	
	}

	public function get_details(){


		$query = $this->db->query('SELECT tm.id as mid,tm.*,mn.* FROM tbl_model as tm LEFT JOIN tbl_manufactur as mn ON(tm.manufacture_id = mn.id)');
	    return $row = $query->result();
		//echo $row->name;
	}

	public function update_quantity($data){

    $this->db->where('id', $this->input->post('id'));
    $this->db->update('tbl_model', $data);
    echo 1;
	}
}

?>