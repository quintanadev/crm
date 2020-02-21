<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

    protected $DB_TABLES = [];

    public function __construct() {
        parent::__construct();
        $this->getTables();
    }

    private function getTables() {
        $query = $this->db->get('admin_tabelas')->result_array();
        $tables = [];
        foreach ($query as $key => $value) :
            $tables[$value['Alias']] = "{$value['Banco']}.{$value['Esquema']}.{$value['Tabela']}";
        endforeach;
        $this->DB_TABLES = $tables;
        return true;
    }

}
