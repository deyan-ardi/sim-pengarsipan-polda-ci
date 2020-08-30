<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Agenda extends CI_Controller
{
	public function index()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Buku Agenda - Surat Masuk";
			$this->data['active'] = "3";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/agenda/index', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function surat_masuk()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Buku Agenda - Surat Masuk";
			$this->data['active'] = "3";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/agenda/index', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function surat_keluar()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Buku Agenda - Surat Keluar";
			$this->data['active'] = "3";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/agenda/keluar', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function export_all_ms()
	{

		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			header("Content-type: application/vnd-ms-excel");
			header("Content-Disposition: attachment; filename=All_data_surat_masuk.xls");
			$this->data['data'] = $this->All_model->getAllSuratMasuk();
			$this->load->view('page/admin/agenda/surat_ms', $this->data);
		}
	}
	public function export_all_kl()
	{

		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			header("Content-type: application/vnd-ms-excel");
			header("Content-Disposition: attachment; filename=All_data_surat_keluar.xls");
			$this->data['data'] = $this->All_model->getAllSuratKeluar();
			$this->load->view('page/admin/agenda/surat_kl', $this->data);
		}
	}
	public function lap_surat_masuk()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Transaksi Surat - Print Surat Masuk";
			$this->data['active'] = "2";
			$this->data['surat'] = $this->All_model->getSuratMasukWhere();
			$this->load->view('page/admin/agenda/print_surat_masuk', $this->data);
		}
	}
	public function lap_surat_keluar()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Transaksi Surat - Print Surat Masuk";
			$this->data['active'] = "2";
			$this->data['surat'] = $this->All_model->getSuratKeluarWhere();
			$this->load->view('page/admin/agenda/print_surat_keluar', $this->data);
		}
	}
}
