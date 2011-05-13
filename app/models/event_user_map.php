<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class EventUserMap extends AppModel {
    var $name = 'EventUserMaps';  
    var $belongsTo = array(
        'Event' => array(
            'className'    => 'Event',
            'foreignKey'    => 'event_id'
        ),
        'User' => array(
            'className'    => 'User',
            'foreignKey'    => 'user_id'
        )
    );  

}
   
?>
