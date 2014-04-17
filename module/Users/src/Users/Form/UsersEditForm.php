<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Users\Form;

use Zend\Form\Form;

/**
 * Description of UsersEditForm
 *
 * @author nenadpaic
 */
class UsersEditForm extends Form {
    
    public function __construct() {
        parent::__construct();
        
        
   $this->add(array(
       'name' => 'username',
       'type' => 'text',
       'attributes' => array(
         'class' => 'form-control',
         'required' => true,
       ),
       'options' => array(
           'label' => 'Username:',
       )
   ));
   $this->add(array(
       'name' => 'ime',
       'type' => 'text',
       'attributes' => array(
         'class' => 'form-control',
         'required' => true,
       ),
       'options' => array(
         'label' => 'Ime:', 
       ),
   ));
     $this->add(array(
       'name' => 'prezime',
       'type' => 'text',
       'attributes' => array(
         'class' => 'form-control',
         'required' => true,
       ),
       'options' => array(
         'label' => 'Prezime:', 
       ),
   ));
      $this->add(array(
       'name' => 'email',
       'type' => 'text',
       'attributes' => array(
         'class' => 'form-control',
         'required' => true,
       ),
       'options' => array(
         'label' => 'Email:', 
       ),
   ));
       $this->add(array(
       'name' => 'adresa',
       'type' => 'text',
       'attributes' => array(
         'class' => 'form-control',
         'required' => true,
       ),
       'options' => array(
         'label' => 'Adresa:', 
       ),
   ));
    $this->add(array(
       'name' => 'grad',
       'type' => 'text',
       'attributes' => array(
         'class' => 'form-control',
         'required' => true,
       ),
       'options' => array(
         'label' => 'Grad:', 
       ),
   ));
     $this->add(array(
       'name' => 'zip',
       'type' => 'text',
       'attributes' => array(
         'class' => 'form-control',
         'required' => true,
       ),
       'options' => array(
         'label' => 'Zip:', 
       ),
   ));
       $this->add(array(
       'name' => 'tel',
       'type' => 'text',
       'attributes' => array(
         'class' => 'form-control',
         'required' => true,
       ),
       'options' => array(
         'label' => 'Tel:', 
       ),
   ));
       $this->add(array(     
    'type' => 'Zend\Form\Element\Select',       
    'name' => 'role',
    'attributes' =>  array(
        'class'  => 'form-control',
        'id' => 'role',                
        'options' => array(
            'user'   => 'User',
            'admin'  => 'Admin',
            'banned' => 'Banned',
        ),
    ),
    'options' => array(
        'label' => 'Role:',
    ),
));  
        $this->add(array(     
    'type' => 'Zend\Form\Element\Select',       
    'name' => 'active',
    'attributes' =>  array(
        'class'  => 'form-control',
        'id' => 'active',                
        'options' => array(
            '0'   => '0',
            '1'  => '1',
            
        ),
    ),
    'options' => array(
        'label' => 'Active:',
    ),
)); 
        
      $this->add(array(
       'name' => 'submit',
       'type' => 'submit',
       'attributes' => array(
         'class' => 'btn btn-primary btn-md',
         'required' => true,
         'Value'    => 'Edit'
        
       ),
      
   ));

    }
}
