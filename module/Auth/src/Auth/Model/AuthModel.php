<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Auth\Model;

use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;
/**
 * Description of AuthModel
 *
 * @author nenadpaic
 */
class AuthModel extends InputFilterAwareInterface {
    
    public $id;
    public $username;
    public $password;
    public $ime;
    public $prezime;
    public $adresa;
    public $grad;
    public $zip;
    public $tel;
    public $role;
    public $active;
    public $reg_token;
    public $date_created;
    
    
    public function exchangeArray($data){
        
        $this->id = (!empty($data['id']))? $data['id'] : null;
        $this->username = (!empty($data['username']))? $data['username'] : null;
        $this->password = (!empty($data['password']))? $data['password'] : null;
        $this->ime = (!empty($data['ime']))? $data['ime'] : null;
        $this->prezime = (!empty($data['prezime']))? $data['prezime'] : null;
        $this->adresa = (!empty($data['adresa']))? $data['adresa'] : null;
        $this->grad = (!empty($data['grad']))? $data['grad'] : null;
        $this->zip = (!empty($data['zip']))? $data['zip'] : null;
        $this->role = (!empty($data['role']))? $data['role'] : null;
        $this->active = (!empty($data['active']))? $data['active'] : null;
        $this->reg_token = (!empty($data['reg_token']))? $data['reg_token'] : null;
        $this->date_created = (!empty($data['date_created']))? $data['date_created'] : null;
    }
       public function getArrayCopy()
    {
        return get_object_vars($this);
    }
    
}
