<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Admin extends CI_Controller
	{

	// function __construct(argument)
	// {
	// # code...
	// }

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Dashboard';

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('templates_admin/topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates_admin/footer');

	}

	public function profile_admin()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Profile';

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('templates_admin/topbar', $data);
		$this->load->view('admin/profile_admin', $data);
		$this->load->view('templates_admin/footer');
	}

	public function edit_profile()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Edit Profile';

		$this->form_validation->set_rules('nama', 'Full Name', 'required|trim');


		if ($this->form_validation->run() == false) {
			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar', $data);
			$this->load->view('templates_admin/topbar', $data);
			$this->load->view('admin/edit_profileadm', $data);
			$this->load->view('templates_admin/footer');
		} else {
			$nama	= $this->input->post('nama');
			$email	= $this->input->post('email');

			// Cek jika ada gambar yg akan di upload
			$upload_image = $_FILES['image'];

			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg\png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/profile/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
					$old_image = $data['user']['image'];
					if ($old_image != 'default.jpg') {
						unlink(FCPATH . 'assets/img/profile/' . $old_image);
					}

					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$this->db->set('nama', $nama);
			$this->db->where('email', $email);
			$this->db->update('user');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil...</div>');
			redirect('admin/profile_admin');
		}
	}


	public function role()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Role';

		$data['role'] = $this->db->get('role_id')->result_array();

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('templates_admin/topbar', $data);
		$this->load->view('admin/role', $data);
		$this->load->view('templates_admin/footer');
	}

	public function changeaccess()
	{
		$menu_id = $this->input->post('menuId');
		$role_id = $this->input->post('roleId');

		$data = [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		];

		$result = $this->db->get_where('user_access_menu', $data);

		if ($result->num_rows() < 1) {
			$this->db->insert('user_access_menu', $data);
		} else {
			$this->db->delete('user_access_menu', $data);
		}

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
	}
	
}
