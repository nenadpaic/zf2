<?php

namespace Users\Form;

use Zend\Form\Form;

class ForgotenPassForm extends Form
{
	
	public function __construct(){
		parent::__construct();
		
		$this->add(array(
			'name' => 'email',
			'type' => 'email',
			'attributes' => array(
			'required' => true,
			'class'   => 'form-control',		
		),
			'options' => array(
				'label' => 'Vas Email:',
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
       				'Value'    => 'Posalji'
       
       		),
       
       ));
		
	}
	
}