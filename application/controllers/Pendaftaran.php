<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftaran_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman pendaftaran";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pendaftaran'] = $this->Pendaftaran_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("pendaftaran/vw_pendaftaran", $data);
        $this->load->view("layout/footer", $data);
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Tambah pendaftaran";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama pendaftaran', 'required', [
            'required' => 'Nama pendaftaran Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[pendaftaran.email]', [
            'is_unique' => 'Email ini sudah terdaftar!',
            'valid_email' => 'Email Harus valid',
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules('password', 'password', 'required|min_length[8]', [
            'required' => 'password pendaftaran Wajib di isi',
            'min_length' => 'password minimal 8 karakter'
        ]);
        $this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required', [
            'required' => 'tanggal_lahir pendaftaran Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
            'required' => 'Jenis Kelamin pendaftaran Wajib di isi'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("layout/header", $data);
            $this->load->view("pendaftaran/vw_tambah_pendaftaran", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->POST('nama'),
                'email' => $this->input->POST('email'),
                'password' => $this->input->POST('password'),
                'tanggal_lahir' => $this->input->POST('tanggal_lahir'),
                'jenis_kelamin' => $this->input->POST('jenis_kelamin'),
            ];
            $this->Pendaftaran_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data pendaftaran Berhasil Ditambah!</div>');
            redirect('pendaftaran');
        }
    }

    public function hapus($id)
    {
        $this->Pendaftaran_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i> Data pendaftaran Berhasil Dihapus!</div>');
        redirect('pendaftaran');
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Ubah pendaftaran";
        $data['pendaftaran'] = $this->Pendaftaran_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
       
        $this->form_validation->set_rules('nama', 'Nama pendaftaran', 'required', [
            'required' => 'Nama pendaftaran Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[pendaftaran.email]', [
            'is_unique' => 'Email ini sudah terdaftar!',
            'valid_email' => 'Email Harus valid',
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules('password', 'password', 'required|min_length[8]', [
            'required' => 'password pendaftaran Wajib di isi',
            'min_length' => 'password minimal 8 karakter'
        ]);
        $this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required', [
            'required' => 'tanggal_lahir pendaftaran Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
            'required' => 'Jenis Kelamin pendaftaran Wajib di isi'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("layout/header", $data);
            $this->load->view("pendaftaran/vw_ubah_pendaftaran", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->POST('nama'),
                'email' => $this->input->POST('email'),
                'password' => $this->input->POST('password'),
                'tanggal_lahir' => $this->input->POST('tanggal_lahir'),
                'jenis_kelamin' => $this->input->POST('jenis_kelamin'),
            ];
            $id = $this->input->POST('id');
            $this->Pendaftaran_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i> Data pendaftaran Berhasil Diubah!</div>');
            redirect('pendaftaran');
        }
    }
}

/* End of file Prodi.php */
/* Location: ./application/controllers/Prodi.php */
