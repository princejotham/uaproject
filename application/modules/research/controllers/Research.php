<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Research extends MX_Controller {

	public function index() {
		$this->load->view('research');
	}
}