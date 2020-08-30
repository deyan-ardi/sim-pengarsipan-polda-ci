<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Data extends CI_Controller
{
	public function index()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->ion_auth->is_admin()) {
				$this->data['title'] = "Data - Backup";
				$this->data['active'] = "5";
				$id = $_SESSION['user_id'];
				$this->data['users'] = $this->All_model->getUsers($id);
				$this->data['group'] = $this->ion_auth_model->getGroup($id);
				$this->load->view('master/header', $this->data);
				$this->load->view('page/admin/data/index', $this->data);
				$this->load->view('master/footer', $this->data);
			} else {
				show_404();
			}
		}
	}
	public function backup()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->ion_auth->is_admin()) {
				$this->data['title'] = "Data - Backup";
				$this->data['active'] = "5";
				$id = $_SESSION['user_id'];
				$this->data['users'] = $this->All_model->getUsers($id);
				$this->data['group'] = $this->ion_auth_model->getGroup($id);
				$this->load->view('master/header', $this->data);
				$this->load->view('page/admin/data/index', $this->data);
				$this->load->view('master/footer', $this->data);
			} else {
				show_404();
			}
		}
	}
	public function proses_backup()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->ion_auth->is_admin()) {
				// Load the DB utility class
				$this->load->dbutil();
				// Backup your entire database and assign it to a variable
				$backup = $this->dbutil->backup();

				// Load the file helper and write the file to your server
				$this->load->helper('file');
				write_file('/path/to/mybackup.zip', $backup);

				// Load the download helper and send the file to your desktop
				$this->load->helper('download');
				force_download('mybackup.zip', $backup);
			} else {
				show_404();
			}
		}
	}
	public function restore()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			if ($this->ion_auth->is_admin()) {
				$this->data['title'] = "Data - Restore";
				$this->data['active'] = "5";
				$id = $_SESSION['user_id'];
				$this->data['users'] = $this->All_model->getUsers($id);
				$this->data['group'] = $this->ion_auth_model->getGroup($id);
				$this->load->view('master/header', $this->data);
				$this->load->view('page/admin/data/restore', $this->data);
				$this->load->view('master/footer', $this->data);
			} else {
				show_404();
			}
		}
	}
}
