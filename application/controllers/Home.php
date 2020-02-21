<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		$data['page_title'] = 'Home';
        $data['page_subtitle'] = 'Bem-vindo!';
		$data['views'] = ['pages/user/home'];
		
		$this->load->view('site/layout', $data);
	}

	public function error_404() {
        $this->data['page_title'] = 'Página não encontrada';
        $this->data['page_subtitle'] = 'Erro 404!';
        $this->data['views'] = ['errors/error-404'];
        $this->load->view('layout', $this->data);
    }

    public function acesso_negado() {
        $this->data['page_title'] = 'Acesso Negado';
        $this->data['page_subtitle'] = '';
        $this->data['views'] = ['errors/acesso-negado'];
        $this->load->view('layout', $this->data);
    }
	
}