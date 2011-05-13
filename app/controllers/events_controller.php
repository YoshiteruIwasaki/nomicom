<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class EventsController extends AppController {
    public $name = 'Events';

    var $uses = array('Event','User', 'EventUserMap');
    
    /**
     * 一覧表示
     */
    function index() {
        $this->Event->recursive = 2;
        $data = $this->Event->find('all');
        $this->set('data', $data);
    }
    
    /**
     * 追加
     */
    function add($id = null) {
	if (empty($this->data)) {
		$this->data = $this->Event->findById($id);
	} else {
            if($this->Event->saveAll($this->data, array('validate'=>'first'))){
                //セッションにフラッシュメッセージをセットしリダイレクトする
                $this->Session->setFlash("イベントを登録しました");
                $this->redirect('/events');
            }
	}
        //ユーザーセレクトボックス
        $this->set('users', $this->Event->User->find('list'));

	}
}
?>
