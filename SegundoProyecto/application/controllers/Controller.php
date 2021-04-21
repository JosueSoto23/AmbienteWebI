<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Controller extends CI_Controller
{

	public function index()
	{
		$this->load->view('users/Index');
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

	public function edit($id)
    {
        $categories = $this->Category->get_category($id);
        $data['categories'] = $categories;

        $this->load->view('categories/edit_category', $data);
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
	
	public function category_delete($id)
	{
		$this->Category->category_delete($id);
		redirect(site_url(['controller', 'admin_dash']));
	}

	public function category_edit()
	{
		$id = $this->input->post('id');
        $name = $this->input->post('name');

        $result = $this->Category->category_edit($id, $name);
        if ($result) {
            redirect(site_url(['controller', 'admin_dash']));
        } else {
            redirect(site_url(['controller', 'edit']));
        }

	}
	
	// News Sources functions

	public function news_source()
	{
		$this->load->view('newssources/news_source');
	}

	public function add_news_source()
	{
		$this->load->view('newssources/add_news_source');
	}

	public function edit_news_source()
	{
		$this->load->view('newssources/edit_news_source');
	}

	public function edit_news_sources($id)
    {
        $sources = $this->Sources->get_sources($id);
        $data['sources'] = $sources;

        $this->load->view('newssources/edit_news_source', $data);
    }


	public function news_source_registration()
	{
		$name = $this->input->post('name');
		$rss = $this->input->post('rss');
		$category = $this->input->post('category');
		$user_id = 1; //$this->input->post('user_id');

		$result = $this->Sources->sources_registration($name, $rss, $category, $user_id);

		if ($result) {
			redirect(site_url(['controller', 'news_source']));
		} else {
			redirect(site_url(['controller', 'news_source']));
		}
	}

	public function get_news_sources()
	{
		return $this->Sources->get_sources();
	}
	
	public function news_source_delete($id)
	{
		$this->Sources->source_delete($id);
		redirect(site_url(['controller', 'news_source']));
	}

	public function news_source_edit()
	{
		$id = $this->input->post('id');
        $name = $this->input->post('name');
		$rss = $this->input->post('rss');
		$category = $this->input->post('category');

        $result = $this->Sources->source_edit($id, $name, $rss, $category);
        if ($result) {
            redirect(site_url(['controller', 'news_source']));
        } else {
            redirect(site_url(['controller', 'news_source']));
        }

	}

}
