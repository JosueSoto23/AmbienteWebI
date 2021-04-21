<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controller extends CI_Controller
{

	public function index()
	{
		$this->load->view('users/index');
	}

	public function users()
	{
		$this->load->view('users/users');
	}

	public function user_dash()
	{
		$this->load->view('users/user_dash');
	}

	public function admin_dash()
	{
		$this->load->view('users/admin_dash');
	}

	public function login()
	{
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');

		$user = $this->User->login($email, $pass);

		if ($user) {
			session_start();
			$_SESSION['users'] = $user;
			redirect('controller/user_dash');
		} else {
			redirect('users/incorrecto');
		}
	}

	public function user_registration()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
		$role = $this->input->post('role');

		$result = $this->User->user_registration($name, $email, md5($pass), $role);

		if ($result) {
			$this->session->set_flashdata('msg', 'User created, please login');
			redirect(site_url(['controller', 'user_dash']));
		} else {
			// send errors
			redirect(site_url(['controller', 'users']));
		}
	}
}
