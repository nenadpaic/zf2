<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Auth\Form;

use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;

/**
 * Description of LoginFilter
 *
 * @author nenadpaic
 */
class LoginFilter extends InputFilter {
  
    public function __construct() {
        
        
        
        $this->add(array(
            'name' => 'username',
            'required' => true,
            'filters'  =>array(
              array('name' => 'StripTags'),
              array('name' => 'StringTrim'),
            ),
            'validators' => array(
              array(
                  'name' => 'StringLength',
                  'options' => array(
                    'encoding' => 'UTF-8',
                      'min'    =>  5,
                      'max'    =>  20,
                  ),
              ),  
            ),
            
        ));
        
        $this->add(array(
            'name' => 'password',
            'required' => true,
            'filters' => array(
              array('name' => 'StripTags'),
              array('name' => 'StringTrim'),  
            ),
            'validators' => array(
              array(
                  'name' => 'StringLength',
                  'options' => array(
                      'encoding' => 'UTF-8',
                      'min' => 5,
                      'max' => 20,
                  ),
              ),  
            ),
        ));
                
    }
}
