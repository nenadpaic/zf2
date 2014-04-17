<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Users\Form;


use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
/**
 * Description of RegisterFilter
 *
 * @author nenadpaic
 */
class RegisterFilter extends InputFilter {
    
    public function __construct($adapter){
         $this->add(array(
            'name' => 'username',
            'required' => true,
            'filters' =>array(
              array('name' => 'StringTrim'),
              array('name' => 'StripTags'),  
            ),
            'validators' => array(
                array(
                'name' => 'StringLength',
                    'options' => array(
                      'encoding' => 'UTF-8',
                        'min'    => 4,
                        'max'    => 20,
                    ),
                ),
                array(
                    'name' => 'Regex',
                    'options' => array(
                       'pattern' => '/^[a-zA-Z0-9_-]*$/',
                       'message' => 'Allowed chars a-z A-Z 0-9 _ -'  
                    ),
                ),
                array(
                  'name' => 'Db\NoRecordExists',
                    'options' => array(
                        'adapter' => $adapter,
                        'table'   => 'users',
                        'field'   => 'username',
                    ),
                ),
             
              
                
                
            ),
            
            
        ));
           $this->add(array(
            'name' => 'password',
            'required' => true,
            'filters' =>array(
              array('name' => 'StringTrim'),
              array('name' => 'StripTags'),  
            ),
            'validators' => array(
                array(
                'name' => 'StringLength',
                    'options' => array(
                      'encoding' => 'UTF-8',
                        'min'    => 4,
                        'max'    => 20,
                    ),
                ),
                array(
                    'name' => 'Regex',
                    'options' => array(
                       'pattern' => '/^[a-zA-Z0-9_-]*$/',
                       'message' => 'Allowed chars a-z A-Z 0-9 _ -'  
                    ),
                ),
                array(
                  'name' => 'identical',
                    'options' => array(
                      'token' => 'confirm',  
                    ),
                ),
             
              
                
                
            ),
            
            
        ));
                 $this->add(array(
            'name' => 'confirm',
            'required' => true,
            'filters' =>array(
              array('name' => 'StringTrim'),
              array('name' => 'StripTags'),  
            ),
            'validators' => array(
                array(
                'name' => 'StringLength',
                    'options' => array(
                      'encoding' => 'UTF-8',
                        'min'    => 4,
                        'max'    => 20,
                    ),
                ),
                array(
                    'name' => 'Regex',
                    'options' => array(
                       'pattern' => '/^[a-zA-Z0-9_-]*$/',
                       'message' => 'Allowed chars a-z A-Z 0-9 _ -'  
                    ),
                ),
             
              
                
                
            ),
            
            
        ));
       
          $this->add(array(
            'name' => 'ime',
            'required' => true,
            'filters' =>array(
              array('name' => 'StringTrim'),
              array('name' => 'StripTags'),  
            ),
            'validators' => array(
                array(
                'name' => 'StringLength',
                    'options' => array(
                      'encoding' => 'UTF-8',
                        'min'    => 4,
                        'max'    => 20,
                    ),
                ),
                 array(
                    'name' => 'Regex',
                    'options' => array(
                       'pattern' => '/^[a-zA-Z]*$/',
                        'message' => 'Allowed chars a-z A-Z'
                    ),
                ),
               
                
                
                
            ),
            
            
        ));
               $this->add(array(
            'name' => 'prezime',
            'required' => true,
            'filters' =>array(
              array('name' => 'StringTrim'),
              array('name' => 'StripTags'),  
            ),
            'validators' => array(
                array(
                'name' => 'StringLength',
                    'options' => array(
                      'encoding' => 'UTF-8',
                        'min'    => 4,
                        'max'    => 20,
                    ),
                ),
                
              array(
                    'name' => 'Regex',
                    'options' => array(
                       'pattern' => '/^[a-zA-Z]*$/',
                        'message' => 'Allowed chars a-z A-Z'
                    ),
                ),
                
                
            ),
            
            
        ));
         $this->add(array(
            'name' => 'adresa',
            'required' => true,
            'filters' =>array(
              array('name' => 'StringTrim'),
              array('name' => 'StripTags'),  
            ),
            'validators' => array(
                array(
                'name' => 'StringLength',
                    'options' => array(
                      'encoding' => 'UTF-8',
                        'min'    => 4,
                        'max'    => 30,
                    ),
                ),
                array(
                    'name' => 'Regex',
                    'options' => array(
                       'pattern' => '/^[a-zA-Z0-9 ]*$/',
                        'message' => 'Allowed chars a-z A-Z 0-9'
                    ),
                ),
             
                
                
            ),
            
            
        ));
           $this->add(array(
            'name' => 'grad',
            'required' => true,
            'filters' =>array(
              array('name' => 'StringTrim'),
              array('name' => 'StripTags'),  
            ),
            'validators' => array(
                array(
                'name' => 'StringLength',
                    'options' => array(
                      'encoding' => 'UTF-8',
                        'min'    => 4,
                        'max'    => 20,
                    ),
                ),
                array(
                    'name' => 'Regex',
                    'options' => array(
                       'pattern' => '/^[a-zA-Z0-9]*$/',
                        'message' => 'Allowed chars a-z A-Z 0-9',
                    ),
                ),
              
                
                
            ),
            
            
        ));
          $this->add(array(
            'name' => 'zip',
            'required' => true,
            'filters' =>array(
              array('name' => 'StringTrim'),
              array('name' => 'StripTags'),  
            ),
            'validators' => array(
                array(
                'name' => 'StringLength',
                    'options' => array(
                      'encoding' => 'UTF-8',
                        'min'    => 4,
                        'max'    => 20,
                    ),
                ),
                 array(
                    'name' => 'Regex',
                    'options' => array(
                       'pattern' => '/^[0-9]*$/',
                        'message' => 'Allowed chars 0-9',
                    ),
                ),
             
                
                
            ),
            
            
        ));
               $this->add(array(
            'name' => 'tel',
            'required' => true,
            'filters' =>array(
              array('name' => 'StringTrim'),
              array('name' => 'StripTags'),  
            ),
            'validators' => array(
                array(
                'name' => 'StringLength',
                    'options' => array(
                      'encoding' => 'UTF-8',
                        'min'    => 4,
                        'max'    => 20,
                    ),
                ),
                 array(
                    'name' => 'Regex',
                    'options' => array(
                       'pattern' => '/^[0-9]*$/',
                        'message' => 'Allowed chars 0-9',
                    ),
                ),
            
                
                
            ),
            
            
        ));

      
      
          $this->add(array(
            'name' => 'email',
            'required' => true,
            'filters' =>array(
              array('name' => 'StringTrim'),
              array('name' => 'StripTags'),  
            ),
            'validators' => array(
                array(
                'name' => 'StringLength',
                    'options' => array(
                      'encoding' => 'UTF-8',
                        'min'    => 4,
                        'max'    => 20,
                    ),
                ),
                array(
                    'name' => 'EmailAddress',
                    'options' => array(
                       'encoding' => 'UTF-8',
                    ),
                ),
                  array(
                  'name' => 'Db\NoRecordExists',
                    'options' => array(
                        'adapter' => $adapter,
                        'table'   => 'users',
                        'field'   => 'email',
                    ),
                ),
             
                
                
            ),
            
            
        ));
      
        
    }
}
