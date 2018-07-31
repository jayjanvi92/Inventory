<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Controller {

	function __construct(){

		parent::__construct();
        $this->load->model('manufac');
	}
	public function index()
	{	
		$data['manufac'] = $this->manufac->get_menufac();

		$this->load->view('includes/header');	
		$this->load->view('add_model', $data);
		$this->load->view('includes/footer');
	}

	public function add_model(){
		
		$this->load->model('manufac');
		
		$this->form_validation->set_rules('manufac', 'Manufacturer Name', 'trim|required');
		$this->form_validation->set_rules('modal_name', 'Model Name', 'trim|required');
		$this->form_validation->set_rules('quantity', '', 'trim|required|numeric');
		$this->form_validation->set_rules('color', 'Model color', 'trim|required');
		$this->form_validation->set_rules('year', 'Manufacturer year', 'trim|required|min_length[4]|max_length[4]|numeric');
		$this->form_validation->set_rules('reg_num', 'Registration number', 'trim|required');
		
	
		if ($this->form_validation->run() == FALSE)
		{
			$data['manufac'] = $this->manufac->get_menufac();
			$this->load->view('includes/header');	
			$this->load->view('add_model', $data);
			$this->load->view('includes/footer');
		}
		else
		{

			date_default_timezone_set('Asia/Kolkata');
			$date = date('Y:m:s h:i:s', time());
			$data = array(
				'manufacture_id' => $this->input->post('manufac'),
				'model_name' => $this->input->post('modal_name'),
				'quantity' => $this->input->post('quantity'),
				'color' => $this->input->post('color'),
				'year' => $this->input->post('year'),
				'reg_number' => $this->input->post('reg_num'),
				'note' => $this->input->post('note'),
				'created_at' => $date,
				'updated_at' => $date
			);

			if($this->manufac->insert_model($data)){

				$this->session->set_flashdata('msg', 'Model Add Successfully!');
    			redirect('../Model/add_model');

				
			}


		}
	
	}


	public function get_view_list(){

		$data['all_data'] = $this->manufac->get_details();
		$this->load->view('includes/header');	
		$this->load->view('master_view', $data);
		$this->load->view('includes/footer');
	}

	public function sold_model(){
		$data = array(
				'quantity' => $this->input->post('quantity')-1,
		);
		if($this->manufac->update_quantity($data) == "1"){
			echo 1;
		}

	}
}
