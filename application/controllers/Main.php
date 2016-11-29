<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function register()
	{     
            $data['top'] = $this->load->view('top','',true);
            $data['header_top'] = $this->load->view('header_top', '',true);
            $data['footer'] = $this->load->view('footer','',true);

            
            //$this->load->view('top');
            //$this->load->view('header-top');
            $this->load->view('users/register', $data);
            //$this->load->view('footer');
            //$this->load->view('bottom');            
	}
        
        public function login()
        {
            $this->load->view('top');
            $this->load->view('header_top');
            $this->load->view('users/login');
            $this->load->view('footer');             
        }
}
