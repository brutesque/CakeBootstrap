<?php
$head = '<meta charset="utf-8">' . 
	$this->Html->meta(null, null, array('inline' => false, 'name' => 'robots', 'content' => 'noindex')) . 
	$this->Html->meta(null, null, array('inline' => false, 'http-equiv' => 'X-UA-Compatible', 'content' => 'IE=edge,chrome=1')) . 
	$this->Html->meta(null, null, array('inline' => false, 'name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no')) . 
	$this->Html->meta(null, null, array('inline' => false, 'name' => 'description', 'content' => '')) . 
	$this->Html->meta(null, null, array('inline' => false, 'name' => 'author', 'content' => '')) . 
	
/* 	$this->Html->css(array(), array('inline' => false, 'media' => 'screen')) .  */
/* 	$this->Html->script(array(), array('inline' => false, 'block' => 'script', 'once' => true)) .  */
	$this->Html->tag(
		'title', 
		implode(' - ', array_filter(array(
			(isset($navbarOptions['brand'])?$navbarOptions['brand']:null), 
			$title_for_layout
		)))
	) . 
	$this->fetch('meta') . 
	$this->fetch('css') . 
	$this->element('CakeBootstrap.html/shim');

$body = ( Configure::check('navbar.menus') ? $this->Bootstrap->navbar(
		Configure::read('navbar.menus'), 
		( Configure::check('navbar.params') ? Configure::read('navbar.params') : array() )
	) : '' ) . 
/* 	$this->Bootstrap->container( */
		$this->Session->flash() . 
/*
		$this->Session->flash('auth', array(
		    'element' => 'alert',
		    'params' => array(
		    	'plugin' => 'CakeBootstrap'
		    ),
		)) . 
*/
		$this->fetch('content'/* ),  */
/*
		array(), 
		array(
			'id' => 'content'
		)
*/
	) . 
	$this->fetch('script') . 
	$this->fetch('elementScript') . 
	$this->fetch('helperScript') . 
	
	$this->Js->writeBuffer(
		array(
			'onDomReady' =>  true, 
			'safe' => true
		)
	);



echo $this->Bootstrap->html(
	$this->Bootstrap->head( $head ) . 
	$this->Bootstrap->body( $body )
);
