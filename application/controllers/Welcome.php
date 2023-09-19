<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('logon_model'); //Load the Model here   

	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		
		$result['schools'] = $this->logon_model->get_data();
		$data['data'] = $this->logon_model->get_scholl_data_ByID(1);
		$this->session->set_userdata('schoolId', '1');

		$this->load->view('common/header', $result);
		$this->load->view('welcome_message',$data);
		$this->load->view('common/footer');
	}

	public function get_flterdata(){

		// $data = array (
		// 	'username' => $this->input->post('username', TRUE) 
		// 	//TRUE identifies you're passing your data through XSS filter,
		//    //all other elements
		// );
		$result['schools'] = $this->logon_model->get_data();
		$data['data'] = $this->logon_model->get_scholl_data_ByID($_REQUEST['school_id']);

		$this->session->set_userdata('schoolId', $data['data']['school_id']);

		$this->load->view('common/header', $result);
		$this->load->view('welcome_message',$data);
		$this->load->view('common/footer');

	}
}
