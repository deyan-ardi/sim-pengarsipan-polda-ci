<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Surat extends CI_Controller
{
	public function index()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Transaksi Surat - Surat Masuk";
			$this->data['active'] = "2";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['surat'] = $this->All_model->getAllSuratMasuk();
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/surat/index', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function surat_masuk()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Transaksi Surat - Surat Masuk";
			$this->data['active'] = "2";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['surat'] = $this->All_model->getAllSuratMasuk();
			$this->data['group'] = $this->ion_auth_model->getGroup($id);

			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/surat/index', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function surat_keluar()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Transaksi Surat - Surat Keluar";
			$this->data['active'] = "2";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['surat'] = $this->All_model->getAllSuratKeluar();
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/surat/keluar', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function disposisi()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Transaksi Surat - Disposisi";
			$this->data['active'] = "2";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['surat'] = $this->All_model->getAllDisposisi();
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/surat/disposisi', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function tmb_surat_masuk()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Transaksi Surat - Tambah Surat Masuk";
			$this->data['active'] = "2";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['surat'] = $this->All_model->getAllJenisSurat();
			$this->data['naskah'] = $this->All_model->getAllJenisNaskah();
			$this->data['arsip'] = $this->All_model->getAllArsip();
			$this->data['klasifikasi'] = $this->All_model->getAllKlasifikasi();
			$this->data['satker'] = $this->All_model->getAllSatker();
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/surat/tmb_surat_masuk', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function proses_tmb_surat_masuk()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$agenda = date('YmdHis');
			$nama_baru = strtolower($agenda);
			$id_surat = "masuk";
			$upload = $this->All_model->uploadFile($nama_baru, $id_surat);
			if ($upload['result'] == "success") {
				if ($this->All_model->inputSuratMasuk($upload, $agenda)) {
					$this->session->set_flashdata('berhasil', 'Ditambahkan');
					redirect('surat/surat_masuk');
				} else {
					$this->session->set_flashdata('gagal', 'Ditambahkan');
					redirect('surat/tmb_surat_masuk');
				}
			} else {
				redirect('surat/tmb_surat_masuk');
			}
		}
	}
	public function hapus_surat_masuk($id)
	{
		if (!$this->ion_auth->logged_in()) {
			$this->session->set_flashdata('berhasil', 'Dihapus');
			redirect('auth/login', 'refresh');
		} else {
			$this->All_model->hapusSuratMasuk($id);
			redirect('surat/surat_masuk');
		}
	}
	public function tmb_surat_keluar()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Transaksi Surat - Tambah Surat Keluar";
			$this->data['active'] = "2";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['surat'] = $this->All_model->getAllJenisSurat();
			$this->data['naskah'] = $this->All_model->getAllJenisNaskah();
			$this->data['arsip'] = $this->All_model->getAllArsip();
			$this->data['klasifikasi'] = $this->All_model->getAllKlasifikasi();
			$this->data['satker'] = $this->All_model->getAllSatker();
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/surat/tmb_surat_keluar', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function edit_surat_keluar($id_surat)
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Transaksi Surat - Tambah Surat Keluar";
			$this->data['active'] = "2";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['surat_keluar'] = $this->All_model->getSuratKeluar($id_surat);
			$this->data['surat'] = $this->All_model->getAllJenisSurat();
			$this->data['naskah'] = $this->All_model->getAllJenisNaskah();
			$this->data['arsip'] = $this->All_model->getAllArsip();
			$this->data['klasifikasi'] = $this->All_model->getAllKlasifikasi();
			$this->data['satker'] = $this->All_model->getAllSatker();
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/surat/edt_surat_keluar', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function proses_edt_surat_keluar()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$nama_baru = $_POST['agenda'];
			$id_surat = "keluar";
			$id_edit = $_POST['id'];
			$id = $_SESSION['user_id'];
			if ($_FILES["file"]['error'] != 4) {
				$upload = $this->All_model->uploadFile($nama_baru, $id_surat);
				if ($upload['result'] == "success") {
					if ($this->All_model->editSuratKeluar($upload, $id_edit, $id)) {
						redirect('surat/surat_keluar');
					} else {
						redirect('surat/edit_surat_keluar');
					}
					// var_dump($upload);
				} else {
					redirect('surat/edit_surat_keluar');
					// var_dump($upload);
				}
			} else {
				if ($this->All_model->editSuratKeluarFile($id_edit, $id)) {
					redirect('surat/surat_keluar');
				} else {
					redirect('surat/edit_surat_keluar');
				}
			}
		}
	}
	public function proses_tmb_surat_keluar()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$agenda = date('YmdHis');
			$nama_baru = strtolower($agenda);
			$id_surat = "keluar";
			$user = $_SESSION['user_id'];
			$upload = $this->All_model->uploadFile($nama_baru, $id_surat);
			if ($upload['result'] == "success") {
				if ($this->All_model->inputSuratKeluar($upload, $agenda, $user)) {
					redirect('surat/surat_keluar');
				} else {
					redirect('surat/tmb_surat_keluar');
				}
			} else {
				redirect('surat/tmb_surat_keluar');
			}
		}
	}
	public function edit_surat_masuk($id_surat)
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Transaksi Surat - Tambah Disposisi";
			$this->data['active'] = "2";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['surat_masuk'] = $this->All_model->getSuratMasuk($id_surat);
			$this->data['surat'] = $this->All_model->getAllJenisSurat();
			$this->data['naskah'] = $this->All_model->getAllJenisNaskah();
			$this->data['arsip'] = $this->All_model->getAllArsip();
			$this->data['klasifikasi'] = $this->All_model->getAllKlasifikasi();
			$this->data['satker'] = $this->All_model->getAllSatker();
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/surat/edt_surat_masuk', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function proses_edt_surat_masuk()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$nama_baru = $_POST['agenda'];
			$id_surat = "masuk";
			$id_edit = $_POST['id'];
			if ($_FILES["file"]['error'] != 4) {
				$upload = $this->All_model->uploadFile($nama_baru, $id_surat);
				if ($upload['result'] == "success") {
					if ($this->All_model->editSuratMasuk($upload, $id_edit)) {
						redirect('surat/surat_masuk');
					} else {
						redirect('surat/edit_surat_masuk');
					}
					// var_dump($upload);
				} else {
					redirect('surat/edit_surat_masuk');
					// var_dump($upload);
				}
			} else {
				if ($this->All_model->editSuratMasukFile($id_edit)) {
					redirect('surat/surat_masuk');
				} else {
					redirect('surat/tmb_surat_masuk');
				}
			}
		}
	}
	public function tmb_disposisi()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Transaksi Surat - Tambah Disposisi";
			$this->data['active'] = "2";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['surat'] = $this->All_model->getAllSuratMasuk();
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/surat/tmb_disposisi', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function edit_disposisi($id_disposisi)
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Transaksi Surat - Tambah Disposisi";
			$this->data['active'] = "2";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['disposisi'] = $this->All_model->getDisposisi($id_disposisi);
			$this->data['surat'] = $this->All_model->getAllSuratMasuk();
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/surat/edt_disposisi', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function proses_edt_disposisi()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$nama_baru = $_POST['agenda'];
			$id_surat = "disposisi";
			$id_edit = $_POST['id'];
			if ($_FILES["file"]['error'] != 4) {
				$upload = $this->All_model->uploadFile($nama_baru, $id_surat);
				if ($upload['result'] == "success") {
					if ($this->All_model->editDisposisi($upload, $id_edit)) {
						redirect('surat/disposisi');
					} else {
						redirect('surat/edit_disposisi');
					}
					// var_dump($upload);
				} else {
					redirect('surat/edit_disposisi');
					// var_dump($upload);
				}
			} else {
				if ($this->All_model->editDisposisiFile($id_edit)) {
					redirect('surat/disposisi');
				} else {
					redirect('surat/edit_disposisi');
				}
			}
		}
	}
	public function hapus_surat_keluar($id)
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->All_model->hapusSuratKeluar($id);
			redirect('surat/surat_keluar');
		}
	}
	public function proses_tmb_disposisi()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$agenda = date('YmdHis');
			$nama_baru = strtolower($agenda);
			$id_surat = "disposisi";
			$upload = $this->All_model->uploadFile($nama_baru, $id_surat);
			if ($upload['result'] == "success") {
				if ($this->All_model->inputDisposisi($upload, $agenda)) {
					redirect('surat/disposisi');
				} else {
					redirect('surat/tmb_disposisi');
				}
			} else {
				redirect('surat/tmb_disposisi');
			}
		}
	}
	public function hapus_disposisi($id)
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->All_model->hapusDisposisi($id);
			redirect('surat/disposisi');
		}
	}
	public function print_surat_masuk($id)
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Transaksi Surat - Print Surat Masuk";
			$this->data['active'] = "2";
			$this->data['surat'] = $this->All_model->getSuratMasuk($id);
			$this->load->view('page/admin/surat/print_disposisi_surat_masuk', $this->data);
		}
	}
	public function print_surat_keluar($id)
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Transaksi Surat - Print Surat Masuk";
			$this->data['active'] = "2";
			$this->data['surat'] = $this->All_model->getSuratKeluar($id);
			$this->load->view('page/admin/surat/print_disposisi_surat_keluar', $this->data);
		}
	}
}
