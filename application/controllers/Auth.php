<?php
/*----------------------------------------------------------
    Modul Name  : Modul Auth
    Desc        : Modul ini di gunakan untuk menampilkan landing page, Error 404
				  User Signup, Login, Reset Pass,  
    Sub fungsi  : 
        - page404    	: berfungsi Menampilkan Error 404
        
------------------------------------------------------------*/ 
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data	= array(
            'title'		 => NAMETITLE . ' - Financial Group',
            'content'	 => 'auth/index',
		);

		$this->load->view('tamplate/wrapper', $data);
	}

	public function page404()
	{
		$this->output->set_status_header('404');

		$data	= array(
            'title'		 => NAMETITLE . ' - 404 Page Not Found',
            'content'	 => 'auth/404',
		);

		$this->load->view('tamplate/wrapper', $data);
	}

}
