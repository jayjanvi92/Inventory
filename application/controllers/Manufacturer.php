<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manufacturer extends CI_Controller {

	function __construct(){

		parent::__construct();
        $this->load->model('manufac');
	}
	public function index()
	{
		$this->load->view('includes/header');	
		$this->load->view('add_manufacturer');
		$this->load->view('includes/footer');
	}

	public function add_manufac(){
		date_default_timezone_set('Asia/Kolkata');
		$date = date('Y:m:s h:i:s');
		$this->load->model('manufac');
		
		$this->form_validation->set_rules('manufac', 'Manufacturer Name', 'trim|required|min_length[5]');
	
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('includes/header');	
			$this->load->view('add_manufacturer');
			$this->load->view('includes/footer');
		}
		else
		{
			$data = array(
				'manufacture_name' => $this->input->post('manufac'),
				'created_at' => $date,
				'updated_at' => $date
			);

			if($this->manufac->insert_menufac($data)){

				$this->session->set_flashdata('msg', 'Add Successfully!');
    			redirect('/');

				
			}


		}


		
	}
}
