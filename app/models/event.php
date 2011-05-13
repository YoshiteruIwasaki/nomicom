<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Event extends AppModel {
    var $name = 'Events';
    var $hasMany = array(
        'EventUserMap' => array(
            'className'  => 'EventUserMap',
            'foreignKey'    => 'event_id',
        )
    );
     var $hasAndBelongsToMany = array(
         'User' => array(
             'className' => 'User',
             'joinTable' => 'event_user_maps',
             'foreignKey' => 'event_id',
             'associationForeignKey' => 'user_id',
             'fields' => array('User.id', 'User.name'),
             )

     );
    var $validate = array(
        'price' => array(
            'alphanumeric' => array(
                'rule' => 'numeric',
                'required' => true,
                'message' => 'numbers only'
                ),
        ),
         'date' => array(
            'rule' => 'date',
            'message' => 'Enter a valid date',
            'allowEmpty' => false
        )

        );
}
?>
