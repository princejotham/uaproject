<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MX_Controller {

	public function index() {
		$this->load->view('admin_template');
	}
}