<?php echo $form->create('Event'); ?>
 
    <?php

        echo $form->input('date', array( 'label' => '日付'
                                    , 'dateFormat' => 'YMD'
                                    , 'minYear' => date('Y') - 2
                                    , 'maxYear' => date('Y')));

        echo $form->input('price',array( 'label' => '価格'));

        echo $form->input('memo',array( 'label' => 'メモ'));
        //echo $form->input('user_id');
    echo $form->input('User',array('label' => '参加者','multiple' => 'checkbox'));
        ?>
<?php echo $form->end('登録する'); ?>
