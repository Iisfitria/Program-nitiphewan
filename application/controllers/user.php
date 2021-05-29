<?php

	class User extends CI_Controller
	{

	// function __construct(argument)
	// {
	// # code...
	// }

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'My Profile';

			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('user/index', $data);
			$this->load->view('template/footer');
	}

	public function edit_profile()
	{
		$data['title'] = 'Edit Profile';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('name', 'Full Name', 'required|trim');
		$this->form_validation->set_rules('no_telp', 'No Telephone', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('user/edit', $data);
			$this->load->view('template/footer');
		} else {
			$name = $this->input->post('name');
			$email = $this->input->post('email'); 
			$no_telp = $this->input->post('no_telp');
			$alamat = $this->input->post('alamat');
			
			// Cek jika ada gambar yang akan di upload
			$upload_image = $_FILES['image'];

			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg/png';
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
			
 			$this->db->set('name', $name);
 			$this->db->set('no_telp', $no_telp);
 			$this->db->set('alamat', $alamat);
			$this->db->where('email', $email);
			$this->db->update('user');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your Profile has been update! </div>');
        	redirect('user');
		}

	}
}