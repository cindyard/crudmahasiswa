<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Prodi extends CI_Controller
{
    
   public function __construct()
  {
    parent::__construct();
	$this->load->model('Prodi_model');
  }

	public function index()
	{
		$data['judul'] = "Halaman Prodi";
		$data['prodi']= $this->Prodi_model->get();
		$this->load->view("layout/header");
		$this->load->view("prodi/vw_prodi", $data);
		$this->load->view("layout/footer");
	}
  
  public function tambah()
	{
		$data['judul'] = "Halaman Tambah Prodi";
		$this->load->view("layout/header");
		$this->load->view("prodi/vw_tambah_prodi", $data);
		$this->load->view("layout/footer");
	}

    public function hapus($id){
        $this->Prodi_model->delete($id);
        redirect('Prodi');
      }
}
