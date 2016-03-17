<?php

/// la clase se tiene que llamar igual que el archivo
class plugins_accounting_basic extends fs_controller
{
   public $variable1;
           
   public function __construct()
   {
      /// se crea una entrada 'Hola mundo' dentro del menú 'hola'
      parent::__construct(__CLASS__, 'hola mundo', 'personalizado');
   }
   
   protected function private_core()
   {
      /// tu código php lo pondrás aquí
       
      $this->variable1 = array(
          'manzana' => array('color' => 'verde', 'peso' => 200),
          'pera' => array('color' => 'amarilla', 'peso' => 250),
          'naranja' => array('color' => 'rosada', 'peso' => 240)
          
      );
	
   }
}
