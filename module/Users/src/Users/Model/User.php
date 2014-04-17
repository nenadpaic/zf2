<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Users\Model;

use Zend\Db\TableGateway\TableGateway;


/**
 * Description of User
 *
 * @author nenadpaic
 */
class User {
    
    private $_usersTable;
    private $adapter;
    
    public function __construct($adapter) {
        $this->adapter = $adapter;
    }
    public function getUsersTable(){
        
    
       
        if(!$this->_usersTable){
            $this->_usersTable = new TableGateway(
                    'users',
                    $this->adapter
                    );
        }
        
       return $this->_usersTable;
    }
    
    public function getAllUsers(){
        
        $users = $this->getUsersTable()->select();
        return $users;
    }
    public function getUserByToken($token){
    	$rowset = $this->getUsersTable()->select(array('reg_token' => $token));
    	$row = $rowset->current();
    	if (!$row) {
  			$row = false;
    	}
    	
    	return $row;
    }
    public function activateUser($id){
    	$data['active'] = 1;
    	$this->getUsersTable()->update($data,array('id' => $id));
    }
    public function getUserByEmail($email){
        
        $rowset = $this->getUsersTable()->select(array('email' => $email));
        $row = $rowset->current();
        
        if(!$row){
            $row = false;
        }
        return $row;
        
    }
}
