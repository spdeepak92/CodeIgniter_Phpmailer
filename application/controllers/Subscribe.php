<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('mail_model');

	}

	public function index() {

		$this->load->view('subscribe');
	}

	public function register_email() {

		$this->form_validation->set_rules('email', 'Email', 'trim|required|callback_validatemail[email]');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('subscribe');

		} else {

			$email = $this->input->post('email');

			if (isset($email) && $email != '') {

				$deliver = $this->mail_model->subscribe_mail($email);

				if ($deliver == true) {

					$data['deliver_message'] = "Succesfully Submitted";
					$this->load->view('subscribe', $data);

				} else {

					$data['deliver_message'] = "Faied, Try again later";
					$this->load->view('subscribe', $data);
				}
			}
		}

	}

	// Validating Email
	public function validatemail($email) {

		if (preg_match('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/', $email)) {

			return true;

		} else {

			$this->form_validation->set_message('validatemail', 'Invalid Email');
			return false;
		}
	}

}
