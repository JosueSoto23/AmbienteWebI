<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("UsersModel");
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->view('Users');
	}

	public function user_register()
	{
		$name = $this->input->post("name");
		$email = $this->input->post("email");
		$pass = $this->input->post("pass");
		$role = $this->input->post("role");

		$result = $this->UsersModel->user_register($name, $email, $pass, $role);
	
		if ($result) {
			redirect("correcto");
		}
		else {
			redirect("incorrecto");
		}

	}

}
