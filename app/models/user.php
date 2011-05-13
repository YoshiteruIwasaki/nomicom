<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class User extends AppModel {
    var $name = 'Users';
    var $hasMany = array(
        'Event' => array(
            'className'  => 'Event',
            'foreignKey'    => 'user_id',
            'order'      => 'Event.created DESC'
        ),
        'EventUserMap' => array(
            'className'  => 'EventUserMap',
            'foreignKey'    => 'user_id',
        )
    );

}
?>
