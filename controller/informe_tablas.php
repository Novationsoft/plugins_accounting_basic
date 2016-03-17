<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of informe_tablas
 *
 * @author yo
 */
class informe_tablas extends fs_controller
{
    public $columnas;
    public $tablas;
    
    public function __construct() {
        parent::__construct(__CLASS__, 'Tablas', 'personalizado');
    }
    
    protected function private_core()
    {
        //$this->show_fs_toolbar = FALSE;
        
        $this->columnas = FALSE;
        
        if( isset($_GET['table']) )
        {
            $this->columnas = $this->db->get_columns($_GET['table']);
        }
        
        $this->tablas = $this->db->list_tables();
        
    }
}
