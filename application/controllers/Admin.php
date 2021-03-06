<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

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

	public function __construct() {
        parent::__construct();
        $this->_seccion_auto(9);


        $this->load->database();


        $this->load->library("parser");
        $this->load->library("Form_validation");

		// $this->load->library('fpdf_master');


        $this->load->helper("url");
        $this->load->helper('form');
        $this->load->helper('text');

        // $this->load->helper("post_helper");





    }
	public function index()
	{
		$this->load->view('templete/View_sidebar');
		$this->load->view('templete/View_navbar');
		$this->load->view('admin/View_dashboard');


	}
}
