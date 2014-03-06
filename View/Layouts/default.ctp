<?php
$head = '<meta charset="utf-8">' . 
	$this->Html->meta(null, null, array('inline' => false, 'name' => 'robots', 'content' => 'noindex')) . 
	$this->Html->meta(null, null, array('inline' => false, 'http-equiv' => 'X-UA-Compatible', 'content' => 'IE=edge,chrome=1')) . 
	$this->Html->meta(null, null, array('inline' => false, 'name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no')) . 
	$this->Html->meta(null, null, array('inline' => false, 'name' => 'description', 'content' => '')) . 
	$this->Html->meta(null, null, array('inline' => false, 'name' => 'author', 'content' => '')) . 
	
	$this->Html->css(array_filter(array(
		'CakeBootstrap./bootstrap/dist/css/bootstrap.min', 
		( isset($this->Bootstrap->settings['theme']) ? $this->Bootstrap->settings['theme'] : '' ), 
		'CakeBootstrap./select2/select2', 
		'CakeBootstrap./bootstrap-datepicker/css/datepicker'
	)), null, array('inline' => false, 'media' => 'screen')) . $this->Html->script(array(
		'//code.jquery.com/jquery.js', 
		'CakeBootstrap./bootstrap/dist/js/bootstrap.min', 
		'CakeBootstrap./select2/select2', 
		'CakeBootstrap./bootstrap-datepicker/js/bootstrap-datepicker'
	), array('inline' => false, 'block' => 'script', 'once' => true)) . 
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
	$this->Bootstrap->container(
		$this->Session->flash() . 
/*
		$this->Session->flash('auth', array(
		    'element' => 'alert',
		    'params' => array(
		    	'plugin' => 'CakeBootstrap'
		    ),
		)) . 
*/
		$this->fetch('content'), 
		null, 
		array(
/* 			'id' => 'content' */
		)
	) . 
	$this->fetch('elementCss') . 
	$this->fetch('script') . 
	$this->fetch('elementScript') . 
	
	$this->Js->writeBuffer(
		array(
			'onDomReady' =>  true, 
			'safe' => true
		)
	) . '
<script>
	$(document).ready(function() {
		$(".select2").select2();
		$(".datepicker").datepicker()
	});
</script>
<style>
.select2-container {
	height: auto;
	padding: 0px;
}
ul.select2-choices {
	border-radius: 4px !important;
/* 	margin: 5px !important; */
/* 	padding: 5px !important; */
	border: 0 !important;
}
li.select2-search-choice {
	margin: 5px 0px 0px 5px !important;
}
</style>
';



echo $this->Bootstrap->html(
	$this->Bootstrap->head( $head ) . 
	$this->Bootstrap->body( $body )
);
