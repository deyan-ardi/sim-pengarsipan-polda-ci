<?php
defined('BASEPATH') or exit('No direct script access allowed');
class All_model extends CI_Model
{
	// Jenis Naskah
	public function getIdJenisNaskah()
	{
		$this->db->select('max(kode_naskah) as noAkhir');
		$this->db->from('jenis_naskah_dinas');
		return $this->db->get()->result_array();
	}
	public function inputJenisNaskah()
	{
		$query = array(
			'kode_naskah' => htmlspecialchars($this->input->post('id_naskah', true)),
			'jenis_naskah' => htmlspecialchars($this->input->post('jenis_naskah', true)),
		);
		return $this->db->insert('jenis_naskah_dinas', $query);
	}
	public function getAllJenisNaskah()
	{
		return $this->db->get('jenis_naskah_dinas')->result_array();
	}
	public function getNaskah($id)
	{
		return $this->db->get_where('jenis_naskah_dinas', array('id' => $id))->result_array();
	}
	public function editJenisNaskah()
	{
		$id = htmlspecialchars($this->input->post('id', true));
		$query = array(
			'kode_naskah' => htmlspecialchars($this->input->post('id_naskah', true)),
			'jenis_naskah' => htmlspecialchars($this->input->post('jenis_naskah', true)),
		);
		return $this->db->where('id=' . $id)->update('jenis_naskah_dinas', $query);
	}
	public function hapusNaskah($id)
	{
		return $this->db->delete('jenis_naskah_dinas', array('id' => $id));
	}



	// Arsip Surat
	public function getIdKodeArsip()
	{
		$this->db->select('max(kode_arsip) as noAkhir');
		$this->db->from('kode_arsip');
		return $this->db->get()->result_array();
	}
	public function inputArsipSurat()
	{
		$query = array(
			'kode_arsip' => htmlspecialchars($this->input->post('id_arsip', true)),
			'nama_arsip' => htmlspecialchars($this->input->post('arsip_surat', true)),
			'primer' => htmlspecialchars($this->input->post('primer', true)),
			'sekunder' => htmlspecialchars($this->input->post('sekunder', true)),
			'tersier' => htmlspecialchars($this->input->post('tersier', true)),
		);
		return $this->db->insert('kode_arsip', $query);
	}
	public function getAllArsip()
	{
		return $this->db->get('kode_arsip')->result_array();
	}
	public function getArsip($id)
	{
		return $this->db->get_where('kode_arsip', array('id' => $id))->result_array();
	}
	public function editArsipSurat()
	{
		$id = htmlspecialchars($this->input->post('id', true));
		$query = array(
			'kode_arsip' => htmlspecialchars($this->input->post('id_arsip', true)),
			'nama_arsip' => htmlspecialchars($this->input->post('arsip_surat', true)),
			'primer' => htmlspecialchars($this->input->post('primer', true)),
			'sekunder' => htmlspecialchars($this->input->post('sekunder', true)),
			'tersier' => htmlspecialchars($this->input->post('tersier', true)),
		);
		return $this->db->where('id=' . $id)->update('kode_arsip', $query);
	}
	public function hapusArsip($id)
	{
		return $this->db->delete('kode_arsip', array('id' => $id));
	}



	// Klasifikasi
	public function getIdJenisKlasifikasi()
	{
		$this->db->select('max(kode_klasifikasi) as noAkhir');
		$this->db->from('klasifikasi_surat');
		return $this->db->get()->result_array();
	}
	public function inputKlasifikasi()
	{
		$query = array(
			'kode_klasifikasi' => htmlspecialchars($this->input->post('id_klasifikasi', true)),
			'nama_klasifikasi' => htmlspecialchars($this->input->post('nama_klasifikasi', true)),
		);
		return $this->db->insert('klasifikasi_surat', $query);
	}
	public function getAllKlasifikasi()
	{
		return $this->db->get('klasifikasi_surat')->result_array();
	}
	public function getKlasifikasi($id)
	{
		return $this->db->get_where('klasifikasi_surat', array('id' => $id))->result_array();
	}
	public function editKlasifikasi()
	{
		$id = htmlspecialchars($this->input->post('id', true));
		$query = array(
			'kode_klasifikasi' => htmlspecialchars($this->input->post('id_klasifikasi', true)),
			'nama_klasifikasi' => htmlspecialchars($this->input->post('nama_klasifikasi', true)),
		);
		return $this->db->where('id=' . $id)->update('klasifikasi_surat', $query);
	}
	public function hapusKlasifikasi($id)
	{
		return $this->db->delete('klasifikasi_surat', array('id' => $id));
	}



	// Satker
	public function inputSatker()
	{
		$query = array(
			'kode_satker' => htmlspecialchars($this->input->post('id_satker', true)),
			'nama_satker' => htmlspecialchars($this->input->post('satuan_kerja', true)),
		);
		return $this->db->insert('satker', $query);
	}
	public function getIdJenisSatker()
	{
		$this->db->select('max(kode_satker) as noAkhir');
		$this->db->from('satker');
		return $this->db->get()->result_array();
	}
	public function getAllSatker()
	{
		return $this->db->get('satker')->result_array();
	}
	public function getSatker($id)
	{
		return $this->db->get_where('satker', array('id_satker' => $id))->result_array();
	}
	public function editSatker()
	{
		$id = htmlspecialchars($this->input->post('id', true));
		$query = array(
			'kode_satker' => htmlspecialchars($this->input->post('kode_satker', true)),
			'nama_satker' => htmlspecialchars($this->input->post('satuan_kerja', true)),
		);
		return $this->db->where('id_satker=' . $id)->update('satker', $query);
	}
	public function hapusSatker($id)
	{
		return $this->db->delete('satker', array('id_satker' => $id));
	}

	// Pegawai
	public function inputPegawai($upload)
	{
		$query = array(
			'nama' => htmlspecialchars($this->input->post('nama_pegawai', true)),
			'gambar' => $upload['file']['file_name'],
			'nrp' => htmlspecialchars($this->input->post('nrp', true)),
			'pangkat' => htmlspecialchars($this->input->post('pangkat', true)),
			'jabatan' => htmlspecialchars($this->input->post('jabatan', true)),
			'id_satker' => htmlspecialchars($this->input->post('satuan_kerja', true)),
		);
		return $this->db->insert('pegawai', $query);
	}
	public function getAllPegawai()
	{
		$this->db->select('users.*,satker.kode_satker,satker.nama_satker');
		$this->db->from('users');
		$this->db->join('satker', 'users.id_satker = satker.id_satker');
		$this->db->join('users_groups', 'users_groups.user_id = users.id');
		$this->db->where('users_groups.group_id != 1');
		return $this->db->get()->result_array();
	}

	public function getPegawai($id)
	{
		$this->db->select('*');
		$this->db->from('pegawai');
		$this->db->join('satker', 'pegawai.id_satker = satker.id_satker');
		return $this->db->where('pegawai.id =' . $id)->get()->result_array();
	}
	public function editPegawai($data, $id)
	{
		$query = array(
			'nama' => htmlspecialchars($this->input->post('nama_pegawai', true)),
			'gambar' => $data,
			'nrp' => htmlspecialchars($this->input->post('nrp', true)),
			'pangkat' => htmlspecialchars($this->input->post('pangkat', true)),
			'jabatan' => htmlspecialchars($this->input->post('jabatan', true)),
			'id_satker' => htmlspecialchars($this->input->post('satuan_kerja', true)),
		);
		return $this->db->where('id=' . $id)->update('pegawai', $query);
	}
	public function hapusPegawai($id)
	{
		$row = $this->db->where('id=', $id)->get('pegawai')->row();
		if ($this->db->delete('pegawai', array('id' => $id))) {
			unlink('assets/upload/pegawai/' . $row->gambar);
			return true;
		}
	}

	// Jenis Surat
	public function getIdJenisSurat()
	{
		$this->db->select('max(kode_surat) as noAkhir');
		$this->db->from('jenis_surat');
		return $this->db->get()->result_array();
	}
	public function inputJenisSurat()
	{
		$query = array(
			'kode_surat' => htmlspecialchars($this->input->post('id_surat', true)),
			'nama_jenis' => htmlspecialchars($this->input->post('jenis_surat', true)),
		);
		return $this->db->insert('jenis_surat', $query);
	}
	public function getAllJenisSurat()
	{
		return $this->db->get('jenis_surat')->result_array();
	}
	public function getSurat($id)
	{
		return $this->db->get_where('jenis_surat', array('id' => $id))->result_array();
	}
	public function editJenisSurat()
	{
		$id = htmlspecialchars($this->input->post('id', true));
		$query = array(
			'kode_surat' => htmlspecialchars($this->input->post('id_surat', true)),
			'nama_jenis' => htmlspecialchars($this->input->post('jenis_surat', true)),
		);
		return $this->db->where('id=' . $id)->update('jenis_surat', $query);
	}
	public function hapusJenisSurat($id)
	{
		return $this->db->delete('jenis_surat', array('id' => $id));
	}


	// Surat Masuk
	public function uploadFile($nama, $id_surat)
	{
		if ($id_surat == "keluar") {
			$config['upload_path'] = './assets/upload/surat_keluar';
		} else if ($id_surat == "masuk") {
			$config['upload_path'] = './assets/upload/surat_masuk';
		} else if ($id_surat == "disposisi") {
			$config['upload_path'] = './assets/upload/disposisi';
		} else if ($id_surat == "pegawai") {
			$config['upload_path'] = './assets/upload/pegawai';
		} else {
			$config['upload_path'] = './assets/upload/users';
		}
		if ($id_surat == "users" || $id_surat == "pegawai") {
			$config['allowed_types'] = 'jpg|jpeg|png';
		} else {
			$config['allowed_types'] = 'pdf';
		}
		$config['max_size']  = '5048';
		$config['file_name'] = $nama;
		$config['remove_space'] = TRUE;
		$config['overwrite'] = TRUE;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		// Load konfigurasi uploadnya    
		if ($this->upload->do_upload('file')) {
			// Lakukan upload dan Cek jika proses upload berhasil      
			// Jika berhasil :      
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			// Jika gagal :      
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}
	public function getRowSuratMasuk()
	{
		return $this->db->get('surat_masuk')->num_rows();
	}
	public function getSuratMasuk($id)
	{
		$this->db->select('surat_masuk.id as id_surat_masuk,surat_masuk.no_agenda,surat_masuk.no_surat,nama_jenis,jenis_surat.id as id_jenis_surat,klasifikasi_surat.id as id_klasifikasi,nama_klasifikasi,kode_arsip.id as id_arsip,id_satker,kode_arsip.kode_arsip,surat_masuk.tanggal_surat,surat_masuk.tanggal_terima,nama_satker,surat_masuk.perihal,surat_masuk.isi_ringkas,surat_masuk.lampiran,surat_masuk.keterangan,surat_masuk.file,jenis_naskah,jenis_naskah_dinas.id as id_jenis_naskah');
		$this->db->where('surat_masuk.id =' . $id);
		$this->db->from('surat_masuk');
		$this->db->join('satker', 'surat_masuk.asal_surat = satker.id_satker');
		$this->db->join('jenis_surat', 'surat_masuk.jenis_surat = jenis_surat.id');
		$this->db->join('klasifikasi_surat', 'surat_masuk.klasifikasi_surat = klasifikasi_surat.id');
		$this->db->join('kode_arsip', 'surat_masuk.kode_arsip = kode_arsip.id');
		$this->db->join('jenis_naskah_dinas', 'surat_masuk.jenis_naskah_dinas = jenis_naskah_dinas.id');
		return $this->db->get()->result_array();
	}
	public function inputSuratMasuk($data, $agenda)
	{
		$query = array(
			'no_agenda' => $agenda,
			'no_surat'	=> htmlspecialchars($this->input->post('no_surat', true)),
			'jenis_surat'	=> htmlspecialchars($this->input->post('jenis_surat', true)),
			'klasifikasi_surat'	=> htmlspecialchars($this->input->post('klasifikasi_surat', true)),
			'kode_arsip'	=> htmlspecialchars($this->input->post('kode_arsip', true)),
			'tanggal_surat'	=> htmlspecialchars($this->input->post('tanggal_surat', true)),
			'tanggal_terima'	=> '0000-00-00 00:00:00',
			'asal_surat'	=> htmlspecialchars($this->input->post('asal_surat', true)),
			'perihal'	=> htmlspecialchars($this->input->post('perihal', true)),
			'isi_ringkas'	=> htmlspecialchars($this->input->post('isi_ringkas', true)),
			'lampiran'	=> htmlspecialchars($this->input->post('lampiran', true)),
			'keterangan'	=> htmlspecialchars($this->input->post('keterangan', true)),
			'file'	=> $data['file']['file_name'],
			'jenis_naskah_dinas'	=> htmlspecialchars($this->input->post('jenis_naskah', true)),
		);
		return $this->db->insert('surat_masuk', $query);
	}
	// Bagian Edit File di Edit
	public function editSuratMasuk($data, $id)
	{
		$query = array(
			'no_agenda' => htmlspecialchars($this->input->post('agenda', true)),
			'no_surat'	=> htmlspecialchars($this->input->post('no_surat', true)),
			'jenis_surat'	=> htmlspecialchars($this->input->post('jenis_surat', true)),
			'klasifikasi_surat'	=> htmlspecialchars($this->input->post('klasifikasi_surat', true)),
			'kode_arsip'	=> htmlspecialchars($this->input->post('kode_arsip', true)),
			'tanggal_surat'	=> htmlspecialchars($this->input->post('tanggal_surat', true)),
			'tanggal_terima'	=> htmlspecialchars($this->input->post('tanggal_terima', true)),
			'asal_surat'	=> htmlspecialchars($this->input->post('asal_surat', true)),
			'perihal'	=> htmlspecialchars($this->input->post('perihal', true)),
			'isi_ringkas'	=> htmlspecialchars($this->input->post('isi_ringkas', true)),
			'lampiran'	=> htmlspecialchars($this->input->post('lampiran', true)),
			'keterangan'	=> htmlspecialchars($this->input->post('keterangan', true)),
			'file'	=> $data['file']['file_name'],
			'jenis_naskah_dinas'	=> htmlspecialchars($this->input->post('jenis_naskah', true)),
		);
		return $this->db->where('id=' . $id)->update('surat_masuk', $query);
	}
	// Bagian Edit File Tidak Diedit
	public function editSuratMasukFile($id)
	{
		$query = array(
			'no_agenda' => htmlspecialchars($this->input->post('agenda', true)),
			'no_surat'	=> htmlspecialchars($this->input->post('no_surat', true)),
			'jenis_surat'	=> htmlspecialchars($this->input->post('jenis_surat', true)),
			'klasifikasi_surat'	=> htmlspecialchars($this->input->post('klasifikasi_surat', true)),
			'kode_arsip'	=> htmlspecialchars($this->input->post('kode_arsip', true)),
			'tanggal_surat'	=> htmlspecialchars($this->input->post('tanggal_surat', true)),
			'tanggal_terima'	=> htmlspecialchars($this->input->post('tanggal_terima', true)),
			'asal_surat'	=> htmlspecialchars($this->input->post('asal_surat', true)),
			'perihal'	=> htmlspecialchars($this->input->post('perihal', true)),
			'isi_ringkas'	=> htmlspecialchars($this->input->post('isi_ringkas', true)),
			'lampiran'	=> htmlspecialchars($this->input->post('lampiran', true)),
			'keterangan'	=> htmlspecialchars($this->input->post('keterangan', true)),
			'file'	=> htmlspecialchars($this->input->post('file', true)),
			'jenis_naskah_dinas'	=> htmlspecialchars($this->input->post('jenis_naskah', true)),
		);
		return $this->db->where('id=' . $id)->update('surat_masuk', $query);
	}
	public function getAllSuratMasuk()
	{
		$this->db->select('surat_masuk.id as id_surat,surat_masuk.no_agenda,surat_masuk.no_surat,nama_jenis,nama_klasifikasi,kode_arsip.kode_arsip,surat_masuk.tanggal_surat,surat_masuk.tanggal_terima,nama_satker,surat_masuk.perihal,surat_masuk.isi_ringkas,surat_masuk.lampiran,surat_masuk.keterangan,surat_masuk.file,jenis_naskah');
		$this->db->from('surat_masuk');
		$this->db->join('satker', 'surat_masuk.asal_surat = satker.id_satker');
		$this->db->join('jenis_surat', 'surat_masuk.jenis_surat = jenis_surat.id');
		$this->db->join('klasifikasi_surat', 'surat_masuk.klasifikasi_surat = klasifikasi_surat.id');
		$this->db->join('kode_arsip', 'surat_masuk.kode_arsip = kode_arsip.id');
		$this->db->join('jenis_naskah_dinas', 'surat_masuk.jenis_naskah_dinas = jenis_naskah_dinas.id');
		return $this->db->get()->result_array();
	}
	public function hapusSuratMasuk($id)
	{
		$row = $this->db->where('id=', $id)->get('surat_masuk')->row();
		if ($this->db->delete('surat_masuk', array('id' => $id))) {
			unlink('assets/upload/surat_masuk/' . $row->file);
		}
	}

	// Surat Keluar
	public function inputSuratKeluar($data, $agenda, $user)
	{
		$query = array(
			'no_agenda' => $agenda,
			'no_surat'	=> htmlspecialchars($this->input->post('no_surat', true)),
			'jenis_surat'	=> htmlspecialchars($this->input->post('jenis_surat', true)),
			'klasifikasi_surat'	=> htmlspecialchars($this->input->post('klasifikasi_surat', true)),
			'kode_arsip'	=> htmlspecialchars($this->input->post('kode_arsip', true)),
			'tanggal_surat'	=> htmlspecialchars($this->input->post('tanggal_surat', true)),
			'tanggal_kirim'	=> '0000-00-00 00:00:00',
			'tujuan'	=> htmlspecialchars($this->input->post('tujuan', true)),
			'perihal'	=> htmlspecialchars($this->input->post('perihal', true)),
			'isi_ringkas'	=> htmlspecialchars($this->input->post('isi_ringkas', true)),
			'lampiran'	=> htmlspecialchars($this->input->post('lampiran', true)),
			'keterangan'	=> htmlspecialchars($this->input->post('keterangan', true)),
			'file'	=> $data['file']['file_name'],
			'jenis_naskah_dinas'	=> htmlspecialchars($this->input->post('jenis_naskah', true)),
			'id_user' => $user,
		);
		return $this->db->insert('surat_keluar', $query);
	}
	public function editSuratKeluar($data, $id, $user)
	{
		$query = array(
			'no_agenda' => htmlspecialchars($this->input->post('agenda', true)),
			'no_surat'	=> htmlspecialchars($this->input->post('no_surat', true)),
			'jenis_surat'	=> htmlspecialchars($this->input->post('jenis_surat', true)),
			'klasifikasi_surat'	=> htmlspecialchars($this->input->post('klasifikasi_surat', true)),
			'kode_arsip'	=> htmlspecialchars($this->input->post('kode_arsip', true)),
			'tanggal_surat'	=> htmlspecialchars($this->input->post('tanggal_surat', true)),
			'tanggal_kirim'	=> htmlspecialchars($this->input->post('tanggal_kirim', true)),
			'tujuan'	=> htmlspecialchars($this->input->post('tujuan', true)),
			'perihal'	=> htmlspecialchars($this->input->post('perihal', true)),
			'isi_ringkas'	=> htmlspecialchars($this->input->post('isi_ringkas', true)),
			'lampiran'	=> htmlspecialchars($this->input->post('lampiran', true)),
			'keterangan'	=> htmlspecialchars($this->input->post('keterangan', true)),
			'file'	=> $data['file']['file_name'],
			'jenis_naskah_dinas'	=> htmlspecialchars($this->input->post('jenis_naskah', true)),
			'id_user' => $user,
		);
		return $this->db->where('id=' . $id)->update('surat_keluar', $query);
	}
	public function editSuratKeluarFile($id, $user)
	{
		$query = array(
			'no_agenda' => htmlspecialchars($this->input->post('agenda', true)),
			'no_surat'	=> htmlspecialchars($this->input->post('no_surat', true)),
			'jenis_surat'	=> htmlspecialchars($this->input->post('jenis_surat', true)),
			'klasifikasi_surat'	=> htmlspecialchars($this->input->post('klasifikasi_surat', true)),
			'kode_arsip'	=> htmlspecialchars($this->input->post('kode_arsip', true)),
			'tanggal_surat'	=> htmlspecialchars($this->input->post('tanggal_surat', true)),
			'tanggal_kirim'	=> htmlspecialchars($this->input->post('tanggal_kirim', true)),
			'tujuan'	=> htmlspecialchars($this->input->post('tujuan', true)),
			'perihal'	=> htmlspecialchars($this->input->post('perihal', true)),
			'isi_ringkas'	=> htmlspecialchars($this->input->post('isi_ringkas', true)),
			'lampiran'	=> htmlspecialchars($this->input->post('lampiran', true)),
			'keterangan'	=> htmlspecialchars($this->input->post('keterangan', true)),
			'file'	=> htmlspecialchars($this->input->post('file', true)),
			'jenis_naskah_dinas'	=> htmlspecialchars($this->input->post('jenis_naskah', true)),
			'id_user' => $user,
		);
		return $this->db->where('id=' . $id)->update('surat_keluar', $query);
	}
	public function getRowSuratKeluar()
	{
		return $this->db->get('surat_keluar')->num_rows();
	}
	public function getAllSuratKeluar()
	{
		$this->db->select('surat_keluar.id,surat_keluar.no_agenda,surat_keluar.no_surat,nama_jenis,nama_klasifikasi,kode_arsip.kode_arsip,surat_keluar.tanggal_surat,surat_keluar.tanggal_kirim,surat_keluar.tujuan,surat_keluar.perihal,surat_keluar.isi_ringkas,surat_keluar.lampiran,surat_keluar.keterangan,surat_keluar.file,jenis_naskah, username');
		$this->db->from('surat_keluar');
		$this->db->join('jenis_surat', 'surat_keluar.jenis_surat = jenis_surat.id');
		$this->db->join('klasifikasi_surat', 'surat_keluar.klasifikasi_surat = klasifikasi_surat.id');
		$this->db->join('kode_arsip', 'surat_keluar.kode_arsip = kode_arsip.id');
		$this->db->join('jenis_naskah_dinas', 'surat_keluar.jenis_naskah_dinas = jenis_naskah_dinas.id');
		$this->db->join('users', 'surat_keluar.id_user = users.id');
		return $this->db->get()->result_array();
	}
	public function getSuratKeluar($id)
	{
		$this->db->select('surat_keluar.id as id_surat_keluar,jenis_surat.id as id_jenis,klasifikasi_surat.id as id_klasifikasi,surat_keluar.no_agenda,surat_keluar.no_surat,nama_jenis,nama_klasifikasi,kode_arsip.kode_arsip, kode_arsip.id as id_arsip,jenis_naskah_dinas.id as id_jenis_naskah,surat_keluar.tanggal_surat,surat_keluar.tanggal_kirim,surat_keluar.tujuan,surat_keluar.perihal,surat_keluar.isi_ringkas,surat_keluar.lampiran,surat_keluar.keterangan,surat_keluar.file,jenis_naskah, username');
		$this->db->where('surat_keluar.id =' . $id);
		$this->db->from('surat_keluar');
		$this->db->join('jenis_surat', 'surat_keluar.jenis_surat = jenis_surat.id');
		$this->db->join('klasifikasi_surat', 'surat_keluar.klasifikasi_surat = klasifikasi_surat.id');
		$this->db->join('kode_arsip', 'surat_keluar.kode_arsip = kode_arsip.id');
		$this->db->join('jenis_naskah_dinas', 'surat_keluar.jenis_naskah_dinas = jenis_naskah_dinas.id');
		$this->db->join('users', 'surat_keluar.id_user = users.id');
		return $this->db->get()->result_array();
	}
	public function hapusSuratKeluar($id)
	{
		$row = $this->db->where('id=', $id)->get('surat_keluar')->row();
		if ($this->db->delete('surat_keluar', array('id' => $id))) {
			unlink('assets/upload/surat_keluar/' . $row->file);
		}
	}
	// Disposisi
	public function inputDisposisi($data, $agenda)
	{
		$query = array(
			'no_agenda' => $agenda,
			'id_surat'	=> htmlspecialchars($this->input->post('no_surat', true)),
			'perihal'	=> htmlspecialchars($this->input->post('perihal', true)),
			'file'	=> $data['file']['file_name'],
			'tujuan'	=> htmlspecialchars($this->input->post('tujuan', true)),
			'isi_disposisi'	=> htmlspecialchars($this->input->post('isi_disposisi', true)),
			'sifat'	=> htmlspecialchars($this->input->post('sifat', true)),
			'batas_waktu'	=> htmlspecialchars($this->input->post('batas_waktu', true)),
			'catatan'	=> htmlspecialchars($this->input->post('catatan', true)),
		);
		return $this->db->insert('disposisi', $query);
	}
	public function editDisposisi($data, $id)
	{
		$query = array(
			'no_agenda' => htmlspecialchars($this->input->post('agenda', true)),
			'id_surat'	=> htmlspecialchars($this->input->post('no_surat', true)),
			'perihal'	=> htmlspecialchars($this->input->post('perihal', true)),
			'file'	=> $data['file']['file_name'],
			'tujuan'	=> htmlspecialchars($this->input->post('tujuan', true)),
			'isi_disposisi'	=> htmlspecialchars($this->input->post('isi_disposisi', true)),
			'sifat'	=> htmlspecialchars($this->input->post('sifat', true)),
			'batas_waktu'	=> htmlspecialchars($this->input->post('batas_waktu', true)),
			'catatan'	=> htmlspecialchars($this->input->post('catatan', true)),
		);
		return $this->db->where('id_disp=' . $id)->update('disposisi', $query);
	}
	public function editDisposisiFile($id)
	{
		$query = array(
			'no_agenda' => htmlspecialchars($this->input->post('agenda', true)),
			'id_surat'	=> htmlspecialchars($this->input->post('no_surat', true)),
			'perihal'	=> htmlspecialchars($this->input->post('perihal', true)),
			'file'	=> htmlspecialchars($this->input->post('file', true)),
			'tujuan'	=> htmlspecialchars($this->input->post('tujuan', true)),
			'isi_disposisi'	=> htmlspecialchars($this->input->post('isi_disposisi', true)),
			'sifat'	=> htmlspecialchars($this->input->post('sifat', true)),
			'batas_waktu'	=> htmlspecialchars($this->input->post('batas_waktu', true)),
			'catatan'	=> htmlspecialchars($this->input->post('catatan', true)),
		);
		return $this->db->where('id_disp=' . $id)->update('disposisi', $query);
	}
	public function getRowDisposisi()
	{
		return $this->db->get('disposisi')->num_rows();
	}
	public function getAllDisposisi()
	{
		$this->db->select('disposisi.id_disp,disposisi.no_agenda,surat_masuk.no_agenda as nomor_agenda,surat_masuk.no_surat,disposisi.perihal,disposisi.file,disposisi.tujuan,disposisi.isi_disposisi,disposisi.sifat,disposisi.batas_waktu,disposisi.catatan');
		$this->db->from('disposisi');
		$this->db->join('surat_masuk', 'disposisi.id_surat = surat_masuk.id');
		return $this->db->get()->result_array();
	}
	public function getDisposisi($id)
	{
		$this->db->select('disposisi.id_disp,disposisi.no_agenda,surat_masuk.no_agenda as nomor_agenda,surat_masuk.no_surat,surat_masuk.id as id_surat,disposisi.perihal,disposisi.file,disposisi.tujuan,disposisi.isi_disposisi,disposisi.sifat,disposisi.batas_waktu,disposisi.catatan');
		$this->db->where('disposisi.id_disp=' . $id);
		$this->db->from('disposisi');
		$this->db->join('surat_masuk', 'disposisi.id_surat = surat_masuk.id');
		return $this->db->get()->result_array();
	}
	public function hapusDisposisi($id)
	{
		$row = $this->db->where('id_disp=', $id)->get('disposisi')->row();
		if ($this->db->delete('disposisi', array('id_disp' => $id))) {
			unlink('assets/upload/disposisi/' . $row->file);
		}
	}
	// Users
	public function getRowUsers()
	{
		return $this->db->get('users')->num_rows();
	}
	public function getUsers($id)
	{
		$this->db->select('*');
		$this->db->where('id=' . $id);
		$this->db->from('users');
		return $this->db->get()->result_array();
	}
	public function editProfil($data, $id)
	{
		$query = array(
			'first_name' => htmlspecialchars($this->input->post('first_name', true)),
			'phone'	=> htmlspecialchars($this->input->post('phone', true)),
			'jenis_kelamin'	=> htmlspecialchars($this->input->post('jenis_kelamin', true)),
			'gambar' => $data['file']['file_name'],
		);
		return $this->db->where('id=' . $id)->update('users', $query);
	}
	public function editProfilFile($id)
	{
		$query = array(
			'first_name' => htmlspecialchars($this->input->post('first_name', true)),
			'phone'	=> htmlspecialchars($this->input->post('phone', true)),
			'jenis_kelamin'	=> htmlspecialchars($this->input->post('jenis_kelamin', true)),
			'gambar' => htmlspecialchars($this->input->post('file_lama', true)),
		);
		return $this->db->where('id=' . $id)->update('users', $query);
	}

	// Bagian Dashboard
	public function getRowSuratMasukBulan($bulan)
	{
		return $this->db->where('MONTH(tanggal_surat)=' . $bulan)->get('surat_masuk')->num_rows();
	}
	public function getRowSuratKeluarBulan($bulan)
	{
		return $this->db->where('MONTH(tanggal_surat)=' . $bulan)->get('surat_keluar')->num_rows();
	}
	public function orderUsers()
	{
		return $this->db->order_by('id', 'DESC')->limit(1)->get('users')->result_array();
	}
	public function orderSuratMasuk()
	{
		return $this->db->order_by('id', 'DESC')->limit(1)->get('surat_masuk')->result_array();
	}
	public function orderSuratKeluar()
	{
		return $this->db->order_by('id', 'DESC')->limit(1)->get('surat_keluar')->result_array();
	}
	public function orderDisposisi()
	{
		return $this->db->order_by('id_disp', 'DESC')->limit(1)->get('disposisi')->result_array();
	}
	public function getSuratMasukWhere()
	{
		$this->db->select('surat_masuk.id as id_surat,surat_masuk.no_agenda,surat_masuk.no_surat,nama_jenis,nama_klasifikasi,kode_arsip.kode_arsip,surat_masuk.tanggal_surat,surat_masuk.tanggal_terima,nama_satker,surat_masuk.perihal,surat_masuk.isi_ringkas,surat_masuk.lampiran,surat_masuk.keterangan,surat_masuk.file,jenis_naskah');
		$this->db->where('surat_masuk.tanggal_surat BETWEEN"' .  htmlspecialchars($this->input->post('dari_tanggal', true)) . '"AND"' . htmlspecialchars($this->input->post('sampai_tanggal', true)) . '"');
		$this->db->or_where('surat_masuk.tanggal_surat BETWEEN"' .  htmlspecialchars($this->input->post('sampai_tanggal', true)) . '"AND"' . htmlspecialchars($this->input->post('dari_tanggal', true)) . '"');
		$this->db->from('surat_masuk');
		$this->db->join('satker', 'surat_masuk.asal_surat = satker.id_satker');
		$this->db->join('jenis_surat', 'surat_masuk.jenis_surat = jenis_surat.id');
		$this->db->join('klasifikasi_surat', 'surat_masuk.klasifikasi_surat = klasifikasi_surat.id');
		$this->db->join('kode_arsip', 'surat_masuk.kode_arsip = kode_arsip.id');
		$this->db->join('jenis_naskah_dinas', 'surat_masuk.jenis_naskah_dinas = jenis_naskah_dinas.id');
		return $this->db->get()->result_array();
	}
	public function getSuratKeluarWhere()
	{
		$this->db->select('surat_keluar.id,surat_keluar.no_agenda,surat_keluar.no_surat,nama_jenis,nama_klasifikasi,kode_arsip.kode_arsip,surat_keluar.tanggal_surat,surat_keluar.tanggal_kirim,surat_keluar.tujuan,surat_keluar.perihal,surat_keluar.isi_ringkas,surat_keluar.lampiran,surat_keluar.keterangan,surat_keluar.file,jenis_naskah, username');
		$this->db->from('surat_keluar');
		$this->db->where('surat_keluar.tanggal_surat BETWEEN"' .  htmlspecialchars($this->input->post('dari_tanggal', true)) . '"AND"' . htmlspecialchars($this->input->post('sampai_tanggal', true)) . '"');
		$this->db->or_where('surat_keluar.tanggal_surat BETWEEN"' .  htmlspecialchars($this->input->post('sampai_tanggal', true)) . '"AND"' . htmlspecialchars($this->input->post('dari_tanggal', true)) . '"');
		$this->db->join('jenis_surat', 'surat_keluar.jenis_surat = jenis_surat.id');
		$this->db->join('klasifikasi_surat', 'surat_keluar.klasifikasi_surat = klasifikasi_surat.id');
		$this->db->join('kode_arsip', 'surat_keluar.kode_arsip = kode_arsip.id');
		$this->db->join('jenis_naskah_dinas', 'surat_keluar.jenis_naskah_dinas = jenis_naskah_dinas.id');
		$this->db->join('users', 'surat_keluar.id_user = users.id');
		return $this->db->get()->result_array();
	}
}