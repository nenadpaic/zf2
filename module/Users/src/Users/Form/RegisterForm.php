<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Users\Form;


use Zend\Form\Form;

/**
 * Description of RegisterForm
 *
 * @author nenadpaic
 */
class RegisterForm extends Form
{
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
       'name' => 'password',
       'type' => 'password',
       'attributes' => array(
         'class' => 'form-control',
         'required' => true,
       ),
       'options' => array(
           'label' => 'Password:',
       )
   ));
  $this->add(array(
       'name' => 'confirm',
       'type' => 'password',
       'attributes' => array(
         'class' => 'form-control',
         'required' => true,
       ),
       'options' => array(
           'label' => 'Potvrdi password:',
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
       		'type' => 'Zend\Form\Element\Captcha',
       		'name' => 'captcha',
       		'options' => array(
       				'label' => 'Potvrdi da si covek',
       				'captcha' => new \Zend\Captcha\Figlet(),
       		),
       ));
       $this->add(array(
    'type' => 'Zend\Form\Element\Csrf',
    'name' => 'secret',
    'options' => array(
        'csrf_options' => array(
            'timeout' => 600
        )
    )
));
 

        
      $this->add(array(
       'name' => 'submit',
       'type' => 'submit',
       'attributes' => array(
         'class' => 'btn btn-primary btn-md',
         'required' => true,
         'Value'    => 'Registracija'
        
       ),
      
   ));   
        
    }
}
