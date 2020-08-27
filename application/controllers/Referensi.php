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
	public function tmb_pegawai()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Referensi - Tambah Pegawai";
			$this->data['active'] = "8";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['satker'] = $this->All_model->getAllSatker();
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/referensi/tmb_pegawai', $this->data);
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
	public function proses_tmb_pegawai()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$agenda = date('YmdHis');
			$nama_baru = strtolower($agenda);
			$id_surat = "pegawai";
			$upload = $this->All_model->uploadFile($nama_baru, $id_surat);
			if ($upload['result'] == "success") {
				if ($this->All_model->inputPegawai($upload)) {
					redirect('referensi');
				} else {
					redirect('referensi/tmb_pegawai');
				}
			} else {
				// var_dump($upload);
				redirect('referensi/tmb_pegawai');
			}
		}
	}
	public function edit_pegawai($id_pegawai)
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Referensi - Edit Data Pegawai";
			$this->data['active'] = "8";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['pegawai'] = $this->All_model->getPegawai($id_pegawai);
			$this->data['satker'] = $this->All_model->getAllSatker();
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/referensi/edt_pegawai', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function proses_edit_pegawai()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$nama_baru = $_POST['file_old'];
			$id_surat = "pegawai";
			$id_edit = $_POST['id'];
			if ($_FILES["file"]['error'] != 4) {
				$upload = $this->All_model->uploadFile($nama_baru, $id_surat);
				if ($upload['result'] == "success") {
					$data = $upload['file']['file_name'];
					if ($this->All_model->editPegawai($data, $id_edit)) {
						$this->session->set_flashdata('berhasil', 'Diubah');
						redirect('referensi');
					} else {
						redirect('referensi/edit_pegawai/' . $id_edit);
					}
				} else {
					// var_dump($upload);
					redirect('referensi/edit_pegawai/' . $id_edit);
				}
			} else {
				$data = $_POST['file_old'];
				if ($this->All_model->editPegawai($data, $id_edit)) {
					redirect('referensi');
				} else {
					redirect('referensi/edit_pegawai/' . $id_edit);
				}
			}
		}
	}
	public function hapus_pegawai($id)
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->All_model->hapusPegawai($id)) {
				redirect('referensi');
			} else {
				redirect('referensi');
			}
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
				redirect('referensi/jenis_naskah');
			} else {
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
	public function edit_naskah($id_naskah)
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Referensi - Edit Jenis Naskah";
			$this->data['active'] = "8";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['jenis_naskah'] = $this->All_model->getNaskah($id_naskah);
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/referensi/edt_naskah', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function proses_edit_jenis_naskah()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->All_model->editJenisNaskah()) {
				redirect('referensi/jenis_naskah');
			} else {
				redirect('referensi/edit_naskah');
			}
		}
	}
	public function hapus_naskah($id)
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->All_model->hapusNaskah($id)) {
				redirect('referensi/jenis_naskah');
			} else {
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
				redirect('referensi/klasifikasi');
			} else {
				redirect('referensi/tmb_klasifikasi');
			}
		}
	}
	public function edit_klasifikasi($id_klasifikasi)
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Referensi - Edit Klasifikasi Surat";
			$this->data['active'] = "8";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['klasifikasi'] = $this->All_model->getKlasifikasi($id_klasifikasi);
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/referensi/edt_klasifikasi', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function proses_edit_klasifikasi()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->All_model->editKlasifikasi()) {
				redirect('referensi/klasifikasi');
			} else {
				redirect('referensi/edit_klasifikasi');
			}
		}
	}
	public function hapus_klasifikasi($id)
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->All_model->hapusKlasifikasi($id)) {
				redirect('referensi/klasifikasi');
			} else {
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
				redirect('referensi/arsip_surat');
			} else {
				redirect('referensi/tmb_arsip');
			}
		}
	}
	public function edit_arsip($id_arsip)
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Referensi - Edit Arsip";
			$this->data['active'] = "8";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['arsip'] = $this->All_model->getArsip($id_arsip);
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/referensi/edt_arsip_surat', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function proses_edit_arsip_surat()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->All_model->editArsipSurat()) {
				redirect('referensi/arsip_surat');
			} else {
				redirect('referensi/edit_arsip');
			}
		}
	}
	public function hapus_arsip($id)
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->All_model->hapusArsip($id)) {
				redirect('referensi/arsip_surat');
			} else {
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
	public function edit_satker($id_satker)
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Referensi - Edit Satuan Kerja";
			$this->data['active'] = "8";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['satker'] = $this->All_model->getSatker($id_satker);
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/referensi/edt_satker', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function proses_tmb_satker()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->All_model->inputSatker()) {
				redirect('referensi/satker');
			} else {
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
				redirect('referensi/satker');
			} else {
				redirect('referensi/edit_satker');
			}
		}
	}
	public function hapus_satker($id)
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->All_model->hapusSatker($id)) {
				redirect('referensi/satker');
			} else {
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
				redirect('referensi/jenis_surat');
			} else {
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
	public function edit_surat($id_surat)
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Referensi - Edit Jenis Naskah";
			$this->data['active'] = "8";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['jenis_surat'] = $this->All_model->getSurat($id_surat);
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/referensi/edt_surat', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function proses_edit_jenis_surat()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->All_model->editJenisSurat()) {
				redirect('referensi/jenis_surat');
			} else {
				redirect('referensi/edit_surat');
			}
		}
	}
	public function hapus_surat($id)
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->All_model->hapusJenisSurat($id)) {
				redirect('referensi/jenis_surat');
			} else {
				redirect('referensi/jenis_surat');
			}
		}
	}
}
