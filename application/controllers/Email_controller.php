<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

	}

	public function index()
	{
		$this->load->view('email');

	}

	public function sendEmail()
	{
		$email_address = $this->input->post('email_address');

		$this->load->config('email');
		$this->load->library('email');

		$from = $this->config->item('smtp_user');
		$to =$email_address;// $this->input->post('to');
		$subject = "[My Hotel] Notification Sucessfuly";///$this->input->post('subject');
		$message = "Your has Sucessfuly booking hotel!";//$this->input->post('message');

		$this->email->set_newline("\r\n");
		$this->email->from($from);
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);

		if ($this->email->send()) {
			echo json_encode('Your Email has successfully been sent.');
		} else {
			//show_error($this->email->print_debugger());
			echo json_encode('Unable to send notification email.');
		}


		/*echo 'ok';
		exit;*/
	}


}
