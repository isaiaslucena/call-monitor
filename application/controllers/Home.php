<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function index() {
		$this->load->view('home');
	}

	function categories() {
	 $this->load->view('categories');
	}

	function keywords() {
		$this->load->model('api_model');
		$data['categories'] = $this->api_model->get_categories();
	 $this->load->view('keywords', $data);
	}

	function js_functions() {
		$this->load->view('js_functions.js');
	}

	function js_eventlisteners() {
		$this->load->view('js_eventlisteners.js');
	}

	function js_worker() {
		$this->load->view('js_worker.js');
	}

	function js_brasilids() {
		$this->load->view('brasil-id.js');
	}
}
