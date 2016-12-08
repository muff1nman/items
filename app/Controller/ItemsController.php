<?php

class ItemsController extends AppController {
    public $helpers = array('Html', 'Form');
	public $components = array('RequestHandler');

    public function index() {
         $this->set('items', 
		 	$this->Item->find('all',
				array('order' => array('Item.theme ASC', 'Item.rank ASC'))
			)
		);
    }
	
	public function add() {
        if ($this->request->is('post')) {
            $this->Item->create();
            if ($this->Item->save($this->request->data)) {
                $this->Session->setFlash(__('The item has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your item.'));
        }
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid item'));
        }

        $item = $this->Item->findById($id);
        if (!$item) {
            throw new NotFoundException(__('Invalid item'));
        }
        $this->set('item', $item);
    }

    public function theme($theme = null) {
        if (!$theme) {
            throw new NotFoundException(__('Invalid theme'));
        }

        $items = $this->Item->findByTheme($theme);
        if (!$item) {
            throw new NotFoundException(__('Invalid theme'));
        }
        $this->set('items', $items);
    }

	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid item'));
		}

		$item = $this->Item->findById($id);
		if (!$item) {
			throw new NotFoundException(__('Invalid item'));
		}

		if ($this->request->is(array('item', 'put'))) {
			$this->Item->id = $id;
			if ($this->Item->save($this->request->data)) {
				$this->Session->setFlash(__('Your item has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your item.'));
		}

		if (!$this->request->data) {
			$this->request->data = $item;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Item->delete($id)) {
			$this->Session->setFlash(
				__('The item with id: %s has been deleted.', h($id))
			);
			return $this->redirect(array('action' => 'index'));
		}
	}
}