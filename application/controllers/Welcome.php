<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');

		 $this->load->model('user_model');
	}

	public function index() {
		$data['users'] = $this->user_model->get_users();

		$this->load->view('templates/header', $data);
		$this->load->view('welcome_message', $data);
		$this->load->view('templates/footer', $data);
	}

	public function view($page = 'home')
{
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter


        $this->load->view('pages/'.$page, $data);

}
}
