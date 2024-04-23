<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		if ($this->session->userdata('role_id') != 1) {
			redirect('auth');
		}
	}

	public function index()
	{
		$data = [
			'title' => 'Dashboard',
		];

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('admin/templates/footer', $data);
	}

	// public function profile()
	// {
	// 	$data = [
	// 		'title' => 'Profile',

	// 	];
	// 	$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

	// 	$this->load->view('admin/templates/header', $data);
	// 	$this->load->view('admin/templates/sidebar', $data);
	// 	$this->load->view('admin/profile', $data);
	// 	$this->load->view('admin/templates/footer', $data);
	// }

	// public function program()
	// {
	// 	$data = [
	// 		'title' => 'Program',
	// 		'program' => $this->m_admin->program(),
	// 	];
	// 	$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

	// 	$this->load->view('admin/templates/header', $data);
	// 	$this->load->view('admin/templates/sidebar', $data);
	// 	$this->load->view('admin/program', $data);
	// 	$this->load->view('admin/templates/footer', $data);
	// }
}
