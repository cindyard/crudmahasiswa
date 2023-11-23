<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mahasiswa extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mahasiswa_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Mahasiswa";
    $data['mahasiswa']= $this->Mahasiswa_model->get();
		$this->load->view("layout/header");
		$this->load->view("mahasiswa/vw_mahasiswa",$data);
		$this->load->view("layout/footer");
  }
  public function tambah()
  {
    $data['judul'] = "Halaman Tambah Mahasiswa";
    $this->load->view("layout/header");
		$this->load->view("mahasiswa/vw_tambah_mahasiswa",$data);
		$this->load->view("layout/footer");
  }
  public function detail($id)
  {
    $data['judul'] = "Halaman Detail Mahasiswa";
    $data['mahasiswa']= $this->Mahasiswa_model->getById($id);
		$this->load->view("layout/header");
		$this->load->view("mahasiswa/vw_detail_mahasiswa",$data);
		$this->load->view("layout/footer");
  }

  public function hapus($id){
    $this->Mahasiswa_model->delete($id);
    redirect('Mahasiswa');
  }

}
