<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('admin_model');
	}

	public function index()
	{
		$data['title'] = 'login';
		$this->load->view('login', $data, FALSE);
	}


	public function action_login()
	{
		$user = $this->input->post('user');
		$pass = $this->input->post('password');

		if(!empty($user) && ! empty($pass))
		{
			$this->admin_model->login($user, $pass);
		}
		else
		{
			redirect('login');
		}

	}


	public function action_logout()
	{

	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */