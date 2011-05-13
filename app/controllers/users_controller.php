<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class UsersController extends AppController {

  public $name = 'Users';

  function index() {
    $data = $this->User->find('all');
    $this->set('data', $data);
  }

  function login() {

  }

  function logout() {
    $this->redirect($this->Auth->logout());
  }

}

?>
