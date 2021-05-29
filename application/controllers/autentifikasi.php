<?php

class Autentifikasi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email',[
            'required' => 'Email harus di isi!'
        ]);

        $this->form_validation->set_rules('password', 'Password', 'required|trim',[
            'required' => 'Di isi dong passwordnya'
        ]);
        // Jika validasi berjalan (gagal) maka akan di kembalikan ke halaman login
        if ($this->form_validation->run() == false) {
            $this->load->view('autentifikasi/template_header');
            $this->load->view('autentifikasi/login');
            $this->load->view('autentifikasi/template_footer');
        } else { // jika berjalan (berhasil) maka langsung beralih ke validasi login selanjutnya
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        // Query ke database
        // mencari email dan pilih dari tabel user
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // jika usernya ada
        if ($user) {
            // jika usernya aktif
            if ($user['is_active'] == 1) {
                // cek passwordnya
                if (password_verify($password, $user['password'])) {
                    // jika passwordnya benar
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    // simpan data kedalam session
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                    redirect('autentifikasi');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum di aktivasi!</div>');
                redirect('autentifikasi');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar!</div>');
            redirect('autentifikasi');
        }
    }

    public function registrasi()
    {
    $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
        'required' => 'Nama harus di isi!'
    ]);
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
        'required' => 'Email tidak boleh kosong',
        'is_unique' => 'Email sudah terdaftar!'
    ]);
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
        'required' => 'Password tidak boleh kosong',
        'matches' => 'Password tidak sama',
        'min_length' => 'Password harus lebih dari 6 karakter'
    ]);
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

    if ($this->form_validation->run() == false) {
        $this->load->view('autentifikasi/template_header');
        $this->load->view('autentifikasi/registrasi');
        $this->load->view('autentifikasi/template_footer');
    } else {
        $data = [
            'nama'          => htmlspecialchars($this->input->post('nama')),
            'email'         => htmlspecialchars($this->input->post('email')),
            'image'         => 'default.jpg',
            'password'      => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id'       => 2,
            'is_active'     => 1,
            'date_created'  => time()
        ];

        $this->db->insert('user', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat, Akun anda berhasil di daftarkan. Silahkan Login!
            </div>
            ');
        redirect('autentifikasi');
    }
}

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Anda telah logout!
                </div>
                ');
        redirect('autentifikasi');

    }

}