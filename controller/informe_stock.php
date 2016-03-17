<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of informe_stock
 *
 * @author yo
 */
class informe_stock extends fs_controller 
{
    public $inventario;
    public $offset;
            
    public function __construct() {
        parent::__construct(__CLASS__, 'inventario', 'personalizado');
    }
    
    protected function process()
    {
        $this->offset = 0;
        if( isset($_GET['offset']) )
        {
            $this->offset = inval($_GET['offset']);
        }
        $this->inventario = $this->db->select_limit("SELECT * FROM stocks ORDER BY referencia ASC", 3, 0);
        
    
    }
}
