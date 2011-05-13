<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class AppController extends Controller {

  var $components = array('Auth','Session');

  function beforeFilter() {
    $this->Auth->fields = array(
        'username' => 'email',
        'password' => 'password'
    );
    $this->Auth->userScope = array('User.active' => '1', 'User.admin' => '1');
  }

}

?>
