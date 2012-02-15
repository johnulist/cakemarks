<?php
// Copyright (c) 2011 Martin Ueding <dev@martin-ueding.de>

class KeywordsController extends AppController {
	var $name = 'Keywords';
	var $helpers = array('Bookmark');

	function tree() {
		$keyword_tree = $this->Keyword->find('threaded', array('order' => 'Keyword.title'));
		if (!empty($this->params['requested'])) {
			return $keyword_tree;
		}
		else {
			$this->set(compact('keyword_tree'));
		}
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid keyword', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('keyword', $this->Keyword->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Keyword->create();
			if ($this->Keyword->save($this->data)) {
				$this->Session->setFlash(__('The keyword has been saved', true));
				$this->redirect(array('action' => 'view', $this->Keyword->id));
			} else {
				$this->Session->setFlash(__('The keyword could not be saved. Please, try again.', true));
			}
		}
		$parentKeywords = $this->Keyword->ParentKeyword->find('list', array('order' => 'title'));
		$bookmarks = $this->Keyword->Bookmark->find('list');
		$this->set('parentKeywords', $parentKeywords);
		$this->set('bookmarks', $bookmarks);
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid keyword', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Keyword->save($this->data)) {
				$this->Session->setFlash(__('The keyword has been saved', true));
				$this->redirect(array('action' => 'view', $this->Keyword->id));
			} else {
				$this->Session->setFlash(__('The keyword could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Keyword->read(null, $id);
		}
		$parentKeywords = $this->Keyword->ParentKeyword->find('list', array('order' => 'title'));
		$bookmarks = $this->Keyword->Bookmark->find('list');
		$this->set('parentKeywords', $parentKeywords);
		$this->set('bookmarks', $bookmarks);
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for keyword', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Keyword->delete($id)) {
			$this->Session->setFlash(__('Keyword deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Keyword was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
