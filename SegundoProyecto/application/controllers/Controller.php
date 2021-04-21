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


	// Users functions

	public function login()
	{
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');

		$user = $this->User->login($email, $pass);

		if ($user) {
			session_destroy();
			session_start();
			$_SESSION['users'] = $user;
			foreach ($user as $row) {
				$role = $row['role'];
				if ($role === "Administrador") {
					redirect('controller/admin_dash');
				} else {
					redirect('controller/user_dash');
				}
			}
		} else {
			redirect('controller/index');
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
			redirect(site_url(['controller', 'users']));
		}
	}

	// Categories functions

	public function add()
	{
		$this->load->view('categories/add_category');
	}

	public function category_registration()
	{
		$name = $this->input->post('name');

		$result = $this->Category->category_registration($name);

		if ($result) {
			$this->session->set_flashdata('msg', 'User created, please login');
			redirect(site_url(['controller', 'admin_dash']));
		} else {
			redirect(site_url(['controller', 'users']));
		}
	}

	public function get_categories()
	{
		return $this->Category->get_categories();
	}
	
	public function category_delete()
	{
		return $this->Category->category_delete();
	}

	public function category_edit($id, $name)
	{
		return $this->Category->category_edit($id, $name);
	}

}
