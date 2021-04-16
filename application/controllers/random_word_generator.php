<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Random_Word_Generator extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$word = bin2hex(random_bytes(7));
		$count = $this->session->userdata('counter');
		$count++;
		$this->session->set_userdata('counter', $count);
		$view_data = array(
			'random_word' => $word,
			'count' => $count
		);
        $this->load->view('random_word_generator/index.php', $view_data);
	}
}
