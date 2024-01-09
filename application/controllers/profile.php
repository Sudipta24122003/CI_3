<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function a()
	{
		$this->load->view('profile');
	}
    public function b()
	{
		$this->load->view('welcome_message.php');
	}
}