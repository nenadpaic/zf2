<?php

namespace Users\Form;

use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;

class ForgotenPassFilter extends InputFilter
{
	public function __construct($adapter) {
            $this->add(array(
                'name' => 'email',
                'required' => true,
                'filters' => array(
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
                  'name' => 'Db\RecordExists',
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