<?php

class CakeBootstrapController extends CakeBootstrapAppController {
	
    public function beforeFilter() {
		parent::beforeFilter();
		Configure::write('navbar.params.brand', 'CakeBootstrap');
		Configure::write('navbar.params.type', 'fixed');
		Configure::write('navbar.params.position', 'top');

		Configure::write('navbar.menus.0', array(
			array(
				'label' => 'Home', 
				'icon' => 'home'
			), 
			array(
				'label' => 'Link', 
				'icon' => 'link'
			), 
			array(
				'label' => 'Link', 
				'icon' => 'link'
			)
		));

		Configure::write('navbar.menus.right', array(
			array(
				'label' => 'User', 
				'icon' => 'user', 
				'dropdown' => array(
					array(
						'label' => 'Edit account', 
						'icon' => 'pencil', 
						'url' => array(
							'plugin' => 'cake_bootstrap', 
							'controller' => 'cake_bootstrap', 
							'action' => 'index'
						)
					), 
					'divider', 
					array(
						'label' => 'Log out', 
						'icon' => 'log-out', 
						'url' => array(
							'plugin' => 'cake_bootstrap', 
							'controller' => 'cake_bootstrap', 
							'action' => 'index'
						)
					)
				)
			)
		));
		
		Configure::write('navbar.menus.right', Hash::insert(
			Configure::read('navbar.menus.right'), 
			null, 
			array(
				'label' => 'Links', 
				'dropdown' => array(
					array(
						'label' => 'some link'
					), 
					'divider', 
					array(
						'label' => 'another link'
					)
				)
			)
		));

    }

	public function index () {
		
	}
	
}