<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public $logado;

    public function __construct() {
        parent::__construct();
        $this->valida_sessao();
    }

    public function valida_sessao() {
        $this->logado = $this->session->userdata('USU_LOGADO');
        if ($this->logado) :
            $this->load->model('Sistema_Model', 'modSistema');
            $this->modSistema->setSessionUsuario();
            if ($this->session->userdata('USUARIO')['ResetSenha']) :
                $this->session->set_flashdata(['msg' => 'Favor alterar sua senha.']);
                redirect(base_url('usuario/alterar_senha'), 'refresh');
            endif;
            if (!$this->session->userdata('USUARIO')['Admin'] && strstr($this->session->userdata('MENU_ATUAL')['MenuURL'], 'admin')) :
                redirect('acesso_negado', 'refresh');
            endif;
            return TRUE;
        else:
            redirect(base_url('usuario/login'), '');
        endif;
    }

}
