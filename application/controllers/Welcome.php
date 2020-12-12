<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

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
        $this->_seccion_auto(1);
		$this->load->helper("url");
        $this->load->helper('form');
        $this->load->helper('text');

    }
	public function index()
	{

		$nivel_de_usuario = $this->auth_data->auth_level;


    
		if ($nivel_de_usuario == 9) {
			redirect("/Admin");
		
		}
	
		if ($nivel_de_usuario == 6) {
			redirect("/Supervisor");		    
			}
	
		if ($nivel_de_usuario == 1) {
			redirect("/Guardia");		    
			}
		

	}
}
