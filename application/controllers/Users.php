<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Users extends CI_Controller
{
	public function index()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->ion_auth->is_admin()) {
				//list the users
				$this->data['user'] = $this->ion_auth->users()->result();
				foreach ($this->data['user'] as $k => $user) {
					$this->data['user'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
				}
				$this->data['title'] = "Setelan Users";
				$this->data['active'] = "4";
				$id = $_SESSION['user_id'];
				$this->data['users'] = $this->All_model->getUsers($id);
				$this->data['group'] = $this->ion_auth_model->getGroup($id);
				$this->load->view('master/header', $this->data);
				$this->load->view('page/admin/users/index', $this->data);
				$this->load->view('master/footer', $this->data);
			} else {
				redirect('users/profile', 'refresh');
			}
		}
	}
	public function profile()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Users - Profile";
			$this->data['active'] = "7";
			$id = $_SESSION['user_id'];
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/users/profile', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function edit_profile()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['title'] = "Users - Edit Profile";
			$this->data['active'] = "7";
			$id = $_SESSION['user_id'];
			$this->data['group'] = $this->ion_auth_model->getGroup($id);
			$this->data['users'] = $this->All_model->getUsers($id);
			$this->load->view('master/header', $this->data);
			$this->load->view('page/admin/users/edit_profile', $this->data);
			$this->load->view('master/footer', $this->data);
		}
	}
	public function proses_edit_users()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			$nama_baru = date('YmdHis');;
			$id_surat = "users";
			$id_edit = $_POST['id'];
			if ($_FILES["file"]['error'] != 4) {
				$upload = $this->All_model->uploadFile($nama_baru, $id_surat);
				if ($upload['result'] == "success") {
					if ($this->All_model->editProfil($upload, $id_edit)) {
						redirect('users/profile');
					} else {
						redirect('users/edit_profile');
					}
				} else {
					redirect('users/edit_profile');
					// var_dump($upload);
					// show_error($upload);
				}
			} else {
				if ($this->All_model->editProfilFile($id_edit)) {
					redirect('users/profile');
				} else {
					redirect('users/edit_profile');
				}
			}
		}
	}
	public function rm_user($id)
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->ion_auth->is_admin()) {
				//list the users
				$hapus = $this->ion_auth_model->hapus_user($id);
				if ($hapus) {
					$this->session->set_flashdata('berhasil', 'Dihapus');
					redirect('users', 'refresh');
				} else {
					$this->session->set_flashdata('gagal', 'Dihapus');
					redirect('users', 'refresh');
				}
			} else {
				redirect('users/profile', 'refresh');
			}
		}
	}
}
