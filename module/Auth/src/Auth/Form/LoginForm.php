<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Auth\Form;


use Zend\Form\Form;

/**
 * Description of LoginForm
 *
 * @author nenadpaic
 */
class LoginForm extends Form {
    
    public function __construct() {
        parent::__construct();
      $this->add(array(
       'name' => 'username',
       'type' => 'Zend\Form\Element\Text',
          'attributes' => array(
            'class'  => 'form-control', 
            'type'   => 'text',
              'required' => 'true',
          ),
       'options' => array(
           'label' => 'Username',
       ),
          
    ));
      $this->add(array(
          'name' => 'password',
          'type' => 'Zend\Form\Element\Password',
          'attributes' => array(
              'type'  => 'password',
              'class' => 'form-control',
              'required' => 'true',
          ),
          'options' => array(
              'label' => 'Password',
          ),
          
      ));
      $this->add(array(
          'name' => 'submit',
          'type' => 'Zend\Form\Element\Submit',
          'attributes' => array(
              'class'  => 'btn btn-primary',
              'value'  => 'Log in',
            ),
    
          
      ));
    }
    
   
    
}
