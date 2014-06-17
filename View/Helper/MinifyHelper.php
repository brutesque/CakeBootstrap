<?php

class MinifyHelper extends AppHelper {
	public $helpers = array('Html');

	private function assetPath ($path = null, $type = null) {
		$absolutePath = array(
			'root' => APP, 
			'plugin' => null, 
			'pathPrefix' => null, 
			'path' => null, 
			'pathAppend' => null
		);
		switch ($type) {
			case ('css') :
				$absolutePath['pathPrefix'] = 'css';
				$absolutePath['pathAppend'] = ( (strtolower(pathinfo($path, PATHINFO_EXTENSION)) !== 'css') ? '.css' : null );
				break;
			case ('js') :
				$absolutePath['pathPrefix'] = 'js';
				$absolutePath['pathAppend'] = ( (strtolower(pathinfo($path, PATHINFO_EXTENSION)) !== 'js') ? '.js' : null );
				break;
			case ('img') :
				$absolutePath['pathPrefix'] = 'img';
				break;
			default:
				break;
		}

		$path = pluginSplit($path);
		$absolutePath['plugin'] = (count($path) === 2 ? $path[0] : null);
		$absolutePath['path'] = (count($path) === 2 ? $path[1] : $path[0]);
		$absolutePath = implode(array_filter(array(
			$absolutePath['root'], 
			( $absolutePath['plugin'] ? ('Plugin' . DS . $absolutePath['plugin'] . DS) : null ), 
			( 'webroot' ), 
			( $absolutePath['path'][0] != '/' ? (DS . $absolutePath['pathPrefix'] . DS) : null ), 
			$absolutePath['path'], 
			$absolutePath['pathAppend']
		)));
		if (is_file($absolutePath)) {
			return $absolutePath;
		}
		
		return false;
	}

	public function css ( $path, $options = null ) {

		$minifyPath = array();
		foreach ((array)$path as $value) {
			$minifyPath[] = $this->Html->url(
				Router::url(array_merge(
					array(
						'plugin' => 'brute_strap', 
						'controller' => 'minify', 
						'action' => 'css'
					), 
					explode('/', $value)
				))
			);
		}

		return $this->Html->css(
			$minifyPath, 
			$options
		);
	}
	
	public function script ( $path, $options = null, $params = null ) {
		$minifyPath = array();
		foreach ((array)$path as $value) {
			$minifyPath[] = $this->Html->url(
				Router::url(array_merge(
					array(
						'plugin' => 'brute_strap', 
						'controller' => 'minify', 
						'action' => 'js'
					), 
					explode('/', $value)
				))
			);
		}

		return $this->Html->script(
			$minifyPath, 
			$options
		);
	}
	
}
