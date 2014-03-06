<?php
App::uses('Scaffold', 'CakeBootstrap.Controller');
App::uses('ScaffoldView', 'CakeBootstrap.View');

class CakeBootstrapAppController extends AppController {

	public $layout = 'CakeBootstrap.default';

	public $helpers = array(
		'CakeBootstrap.Bootstrap' => array(
			'className' => 'CakeBootstrap.Bootstrap', 
/* 			'theme' => 'CakeBootstrap./bootswatch/css/slate.bootstrap.min' */
		)
	);


		
}