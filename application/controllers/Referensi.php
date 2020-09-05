<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Referensi extends CI_Controller
{
	public function index()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Referensi - Data Pegawai";
			$this->data['active'] = "8";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['pegawai'] = $this->All_model->getAllPegawai();
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/referensi/index', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function pegawai()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Referensi - Data Pegawai";
			$this->data['active'] = "8";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['pegawai'] = $this->All_model->getAllPegawai();
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/referensi/index', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}


	// Jenis Naskah
	public function tmb_jenis_naskah()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Referensi - Tambah Jenis Naskah";
			$this->data['active'] = "8";
			$id = $_SESSION['user_id'];
			$id_otomatis = $this->All_model->getIdJenisNaskah();
			$kode_jenis_naskah = $id_otomatis[0]['noAkhir'];
			$urutan = (int) substr($kode_jenis_naskah, 4, 4);
			$urutan++;
			$huruf = "NSKH";
			$kode_jenis_naskah = $huruf . sprintf("%03s", $urutan);
			// var_dump($kode_jenis_naskah);
			// die;
			$this->data['id_naskah'] = $kode_jenis_naskah;
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/referensi/tmb_jenis_naskah', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function proses_tmb_jenis_naskah()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->All_model->inputJenisNaskah()) {
				$this->session->set_flashdata('success', 'Data Berhasil Ditambahkan');
				redirect('referensi/jenis_naskah');
			} else {
				$this->session->set_flashdata('gagal', 'Data Gagal Ditambahkan');
				redirect('referensi/tmb_jenis_naskah');
			}
		}
	}
	public function jenis_naskah()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Referensi - Jenis Naskah";
			$this->data['active'] = "8";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['jenis_naskah'] = $this->All_model->getAllJenisNaskah();
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/referensi/jenis_naskah', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function edit_naskah($id_naskah = '')
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$naskah = $this->All_model->getNaskah($id_naskah);
			if (!empty($naskah)) {
				$this->data['title'] = "Referensi - Edit Jenis Naskah";
				$this->data['active'] = "8";
				$id = $_SESSION['user_id'];
				$this->data['users'] = $this->All_model->getUsers($id);
				$this->data['jenis_naskah'] = $naskah;
				$this->data['group'] = $this->ion_auth_model->getGroup($id);
				$this->load->view('master/header', $this->data);
				$this->load->view('page/admin/referensi/edt_naskah', $this->data);
				$this->load->view('master/footer', $this->data);
			} else {
				show_404();
			}
		}
	}
	public function proses_edit_jenis_naskah()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->All_model->editJenisNaskah()) {
				$this->session->set_flashdata('success', 'Data Berhasil Diubah');
				redirect('referensi/jenis_naskah');
			} else {
				$this->session->set_flashdata('gagal', 'Data Gagal Diubah');
				redirect('referensi/edit_naskah/' . $_POST['id']);
			}
		}
	}
	public function hapus_naskah($id = '')
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->All_model->hapusNaskah($id)) {
				$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
				redirect('referensi/jenis_naskah');
			} else {
				$this->session->set_flashdata('gagal', 'Data Gagal Dihapus');
				redirect('referensi/jenis_naskah');
			}
		}
	}

	// Klasifikasi
	public function tmb_klasifikasi()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Referensi - Tambah Klasifikasi Surat";
			$this->data['active'] = "8";
			$id = $_SESSION['user_id'];
			$id_otomatis = $this->All_model->getIdJenisKlasifikasi();
			$kode_klasifikasi = $id_otomatis[0]['noAkhir'];
			$urutan = (int) substr($kode_klasifikasi, 4, 4);
			$urutan++;
			$huruf = "KLSF";
			$kode_klasifikasi = $huruf . sprintf("%03s", $urutan);
			// var_dump($kode_klasifikasi);
			// die;
			$this->data['id_klasifikasi'] = $kode_klasifikasi;
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/referensi/tmb_klasifikasi', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function klasifikasi()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Referensi - Klasifikasi Surat";
			$this->data['active'] = "8";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['klasifikasi'] = $this->All_model->getAllKlasifikasi();
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/referensi/klasifikasi', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function proses_tmb_klasifikasi()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->All_model->inputKlasifikasi()) {
				$this->session->set_flashdata('success', 'Data Berhasil Ditambahkan');
				redirect('referensi/klasifikasi');
			} else {
				$this->session->set_flashdata('gagal', 'Data Gagal Ditambahkan');
				redirect('referensi/tmb_klasifikasi');
			}
		}
	}
	public function edit_klasifikasi($id_klasifikasi = '')
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$klasifikasi =	$this->All_model->getKlasifikasi($id_klasifikasi);
			if (!empty($klasifikasi)) {
				$this->data['title'] = "Referensi - Edit Klasifikasi Surat";
				$this->data['active'] = "8";
				$id = $_SESSION['user_id'];
				$this->data['users'] = $this->All_model->getUsers($id);
				$this->data['klasifikasi'] = $klasifikasi;
				$this->data['group'] = $this->ion_auth_model->getGroup($id);
				$this->load->view('master/header', $this->data);
				$this->load->view('page/admin/referensi/edt_klasifikasi', $this->data);
				$this->load->view('master/footer', $this->data);
			} else {
				show_404();
			}
		}
	}
	public function proses_edit_klasifikasi()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->All_model->editKlasifikasi()) {
				$this->session->set_flashdata('success', 'Data Berhasil Diubah');
				redirect('referensi/klasifikasi');
			} else {
				$this->session->set_flashdata('gagal', 'Data Gagal Diubah');
				redirect('referensi/edit_klasifikasi');
			}
		}
	}
	public function hapus_klasifikasi($id = '')
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->All_model->hapusKlasifikasi($id)) {
				$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
				redirect('referensi/klasifikasi');
			} else {
				$this->session->set_flashdata('gagal', 'Data Gagal Dihapus');
				redirect('referensi/klasifikasi');
			}
		}
	}
	// Arsip
	public function arsip_surat()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Referensi - Arsip Surat";
			$this->data['active'] = "8";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['arsip_surat'] = $this->All_model->getAllArsip();
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/referensi/arsip_surat', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function tmb_arsip()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Referensi - Tambah Arsip";
			$this->data['active'] = "8";
			$id = $_SESSION['user_id'];
			$id_otomatis = $this->All_model->getIdKodeArsip();
			$kode_arsip = $id_otomatis[0]['noAkhir'];
			$urutan = (int) substr($kode_arsip, 4, 4);
			$urutan++;
			$huruf = "ARSP";
			$kode_arsip = $huruf . sprintf("%03s", $urutan);
			// var_dump($kode_arsip);
			// die;
			$this->data['id_arsip'] = $kode_arsip;
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/referensi/tmb_arsip_surat', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function proses_tmb_arsip_surat()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->All_model->inputArsipSurat()) {
				$this->session->set_flashdata('success', 'Data Berhasil Ditambahkan');
				redirect('referensi/arsip_surat');
			} else {
				$this->session->set_flashdata('gagal', 'Data Gagal Ditambahkan');
				redirect('referensi/tmb_arsip');
			}
		}
	}
	public function edit_arsip($id_arsip = '')
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$arsip = $this->All_model->getArsip($id_arsip);
			if (!empty($arsip)) {
				$this->data['title'] = "Referensi - Edit Arsip";
				$this->data['active'] = "8";
				$id = $_SESSION['user_id'];
				$this->data['users'] = $this->All_model->getUsers($id);
				$this->data['arsip'] = $arsip;
				$this->data['group'] = $this->ion_auth_model->getGroup($id);
				$this->load->view('master/header', $this->data);
				$this->load->view('page/admin/referensi/edt_arsip_surat', $this->data);
				$this->load->view('master/footer', $this->data);
			} else {
				show_404();
			}
		}
	}
	public function proses_edit_arsip_surat()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->All_model->editArsipSurat()) {
				$this->session->set_flashdata('success', 'Data Berhasil Diubah');
				redirect('referensi/arsip_surat');
			} else {
				$this->session->set_flashdata('gagal', 'Data Gagal Diubah');
				redirect('referensi/edit_arsip');
			}
		}
	}
	public function hapus_arsip($id = '')
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->All_model->hapusArsip($id)) {
				$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
				redirect('referensi/arsip_surat');
			} else {
				$this->session->set_flashdata('gagal', 'Data Gagal Dihapus');
				redirect('referensi/arsip_surat');
			}
		}
	}
	// Satker
	public function satker()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Referensi - Data Satuan Kerja";
			$this->data['active'] = "8";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['satker'] = $this->All_model->getAllSatker();
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/referensi/satker', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function tmb_satker()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Referensi - Tambah Jenis Satuan Kerja";
			$this->data['active'] = "8";
			$id = $_SESSION['user_id'];
			$id_otomatis = $this->All_model->getIdJenisSatker();
			$kode_satker = $id_otomatis[0]['noAkhir'];
			$urutan = (int) substr($kode_satker, 4, 4);
			$urutan++;
			$huruf = "STKR";
			$kode_satker = $huruf . sprintf("%03s", $urutan);
			// var_dump($kode_satker);
			// die;
			$this->data['id_satker'] = $kode_satker;
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/referensi/tmb_satker', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function edit_satker($id_satker = '')
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$satker = $this->All_model->getSatker($id_satker);
			if (!empty($satker)) {
				$this->data['title'] = "Referensi - Edit Satuan Kerja";
				$this->data['active'] = "8";
				$id = $_SESSION['user_id'];

				$this->data['users'] = $this->All_model->getUsers($id);
				$this->data['satker'] = $satker;
				$this->data['group'] = $this->ion_auth_model->getGroup($id);
				$this->load->view('master/header', $this->data);
				$this->load->view('page/admin/referensi/edt_satker', $this->data);
				$this->load->view('master/footer', $this->data);
			} else {
				show_404();
			}
		}
	}
	public function proses_tmb_satker()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->All_model->inputSatker()) {
				$this->session->set_flashdata('success', 'Data Berhasil Ditambahkan');
				redirect('referensi/satker');
			} else {
				$this->session->set_flashdata('gagal', 'Data Gagal Ditambahkan');
				redirect('referensi/tmb_satker');
			}
		}
	}
	public function proses_edt_satker()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->All_model->editSatker()) {
				$this->session->set_flashdata('success', 'Data Berhasil Diubah');
				redirect('referensi/satker');
			} else {
				$this->session->set_flashdata('gagal', 'Data Gagal Diubah');
				redirect('referensi/edit_satker');
			}
		}
	}
	public function hapus_satker($id = '')
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->All_model->hapusSatker($id)) {
				$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
				redirect('referensi/satker');
			} else {
				$this->session->set_flashdata('gagal', 'Data Gagal Dihapus');
				redirect('referensi/satker');
			}
		}
	}


	// Jenis Naskah


	// Jenis Surat
	public function tmb_jenis_surat()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Referensi - Tambah Jenis Surat";
			$this->data['active'] = "8";
			$id = $_SESSION['user_id'];
			$id_otomatis = $this->All_model->getIdJenisSurat();
			$kode_surat = $id_otomatis[0]['noAkhir'];
			$urutan = (int) substr($kode_surat, 3, 3);
			$urutan++;
			$huruf = "SRT";
			$kode_surat = $huruf . sprintf("%03s", $urutan);
			// var_dump($kode_surat);
			// die;
			$this->data['id_surat'] = $kode_surat;
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/referensi/tmb_jenis_surat', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function proses_tmb_jenis_surat()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->All_model->inputJenisSurat()) {
				$this->session->set_flashdata('success', 'Data Berhasil Ditambahkan');
				redirect('referensi/jenis_surat');
			} else {
				$this->session->set_flashdata('gagal', 'Data Gagal Ditambahkan');
				redirect('referensi/tmb_jenis_surat');
			}
		}
	}
	public function jenis_surat()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Referensi - Jenis Surat";
			$this->data['active'] = "8";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['jenis_surat'] = $this->All_model->getAllJenisSurat();
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/referensi/jenis_surat', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function edit_surat($id_surat = '')
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$surat = $this->All_model->getSurat($id_surat);
			if (!empty($surat)) {
				$this->data['title'] = "Referensi - Edit Jenis Naskah";
				$this->data['active'] = "8";
				$id = $_SESSION['user_id'];
				$this->data['users'] = $this->All_model->getUsers($id);
				$this->data['jenis_surat'] = $surat;
				$this->data['group'] = $this->ion_auth_model->getGroup($id);
				$this->load->view('master/header', $this->data);
				$this->load->view('page/admin/referensi/edt_surat', $this->data);
				$this->load->view('master/footer', $this->data);
			} else {
				show_404();
			}
		}
	}
	public function proses_edit_jenis_surat()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->All_model->editJenisSurat()) {
				$this->session->set_flashdata('success', 'Data Berhasil Diubah');
				redirect('referensi/jenis_surat');
			} else {
				$this->session->set_flashdata('gagal', 'Data Gagal Diubah');
				redirect('referensi/edit_surat');
			}
		}
	}
	public function hapus_surat($id = '')
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->All_model->hapusJenisSurat($id)) {
				$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
				redirect('referensi/jenis_surat');
			} else {
				$this->session->set_flashdata('gagal', 'Data Gagal Dihapus');
				redirect('referensi/jenis_surat');
			}
		}
	}
}