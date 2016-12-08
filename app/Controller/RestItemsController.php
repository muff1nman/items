<?php

class RestItemsController extends AppController {
	public $uses = array('Item');
    public $helpers = array('Html', 'Form');
	public $components = array('RequestHandler');

	public function index() {
		$items = $this->Item->find('all',
            array('order' => array('Item.theme ASC', 'Item.rank ASC')));
        $this->set(array(
            'items' => $items,
            '_serialize' => array('items')
        ));
    }

	public function add() {
		$this->Item->create();
		if ($this->Item->save($this->request->data)) {
			 $message = 'Created';
		} else {
			$message = 'Error';
		}
		$this->set(array(
			'message' => $message,
			'_serialize' => array('message')
		));
    }
	
	public function view($id) {
        $item = $this->Item->findById($id);
        $this->set(array(
            'item' => $item,
            '_serialize' => array('item')
        ));
    }

	public function theme($theme) {
        $items = $this->Item->findByTheme($theme);
        $this->set(array(
            'items' => $items,
            '_serialize' => array('items')
        ));
    }

	public function edit($id) {
        $this->Item->id = $id;
        if ($this->Item->save($this->request->data)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }
	
	public function delete($id) {
        if ($this->Item->delete($id)) {
            $message = 'Deleted';
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }
}