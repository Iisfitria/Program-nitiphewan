<?php

	class Home extends CI_Controller
	{

	// function __construct(argument)
	// {
	// # code...
	// }

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Home';

			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('home', $data);
			$this->load->view('template/footer');
	}
}