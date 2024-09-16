<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Buka_peta');
		date_default_timezone_set('Asia/Jakarta');
	}
	public function index()
	{
		$datacontent['title'] = "Sipetarung || PATI";
		$data['content'] = $this->load->view('main', $datacontent, TRUE);
		$this->load->view('index', $data);
	}
	public function peta()
	{
		$datacontent['title'] = "Peta || SIPETARUNG PATI";
		$datacontent['pju'] = $this->Buka_peta->titik_pju(NULL, NULL, 'tb_pju');
		$datacontent['meteran'] = $this->Buka_peta->titik_meteran(NULL, NULL, 'tb_meteran');
		$data['content'] = $this->load->view('peta/peta', $datacontent, TRUE);
		$this->load->view('petalayout', $data);
	}
	public function masuk()
	{
		$datacontent['title'] = "Masuk Admin";
		$data['content'] = $this->load->view('login/login', $datacontent, TRUE);
		$this->load->view('index', $data);
	}

	public function data_pju()
	{
		$datacontent['title'] = "Data PJU";
		$data['content'] = $this->load->view('pju', $datacontent, TRUE);
		$data['pju'] = $this->Buka_peta->frd('tb_pju', NULL, NULL);
		$this->load->view('pju', $data);
	}
	public function visi()
	{
		$datacontent['title'] = "VIVI & MISI";
		$data['content'] = $this->load->view('profil/visi', $datacontent, TRUE);
		$this->load->view('index', $data);
	}
	public function tugas()
	{
		$datacontent['title'] = "VISI & MISI";
		$data['content'] = $this->load->view('profil/tugas', $datacontent, TRUE);
		$this->load->view('index', $data);
	}
	public function struktur()
	{
		$datacontent['title'] = "Struktur Organisasi";
		$data['content'] = $this->load->view('profil/struktur', $datacontent, TRUE);
		$this->load->view('index', $data);
	}
	public function sdm()
	{
		$datacontent['title'] = "Sumber Daya Manusia";
		$data['content'] = $this->load->view('profil/sdm', $datacontent, TRUE);
		$this->load->view('index', $data);
	}
	public function detail($id)
	{
		$datacontent['title'] = "Detail";
		$data['pju'] = $this->Buka_peta->frd('tb_pju', $id, 'Kode');
		$data['peta'] = $this->Buka_peta->titik_pju($id, 'Kode', 'tb_pju');
		$data['content'] = $this->load->view('detail', $datacontent, TRUE);

		$this->load->view('detail', $data);
	}

	public function statistik()
	{
		$datacontent['title'] = "Statistik";
		$data['content'] = $this->load->view('statistik/stat', $datacontent, TRUE);
		$this->load->view('index', $data);
	}
}
