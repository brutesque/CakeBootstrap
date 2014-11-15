<?php
App::import('Helper', 'Html') ;

class NavbarHelper extends AppHelper {

	public $helpers = array(
		'Html', 
		'CakeBootstrap.Bootstrap'
	);

	private $defaultParams = array(
		'type' => 'fixed', 
		'brand' => null
	);

	private $params = array();
	private $menus = array();
	private $group = 0;

	public function beforeLayout ($layoutFile) {
		Configure::write('navbar.menus', $this->menus);
		Configure::write('navbar.params', $this->params);
		Configure::write('body.id', 'page-top');
		Configure::write('body.data.spy', 'scroll');
		Configure::write('body.data.target', '.navbar-fixed-top');
	}

/*
	public function beforeLayout ($layoutFile = null) {
// 		pr(Configure::read('navbar'));
	}
	public function afterLayout ($layoutFile = null) {
// 		pr(Configure::read('navbar'));
	}

	public function afterRender ($viewFile = null) {
		parent::beforeRender($viewFile);
		Configure::write('navbar.menus', $this->menus);
		Configure::write('navbar.params', $this->params);
	}
*/

	public function config ( $params = null) {
		$this->params = array_merge(
			$this->defaultParams, 
			$this->params, 
			(array)$params
		);
	}

	public function addItem ( $content = null, $params = null, $options = null) {
		$params = array_merge(
			array(
				'group' => $this->group
			), 
			(array)$params
		);

		if (!is_null($content)) {
			$this->menus[$params['group']][] = $content;
			return true;
		} else {
			return false;
		}
	}


}