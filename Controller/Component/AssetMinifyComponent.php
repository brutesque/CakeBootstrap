<?php
App::uses('Component', 'Controller');
class AssetMinifyComponent extends Component {

	public function compress_css($buffer) {
        /* remove comments */
        $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
        /* remove tabs, spaces, newlines, etc. */
        $buffer = str_replace(array("\r\n","\r","\n","\t",'  ','    ','     '), '', $buffer);
        /* remove other spaces before/after ; */
        $buffer = preg_replace(array('(( )+{)','({( )+)'), '{', $buffer);
        $buffer = preg_replace(array('(( )+})','(}( )+)','(;( )*})'), '}', $buffer);
        $buffer = preg_replace(array('(;( )+)','(( )+;)'), ';', $buffer);
        return $buffer;
    }
	
	public function compress_js($buffer) {
		/* remove comments */
		$lines = explode("\n", $buffer);
		$lines = array_map(
		function($line) {
			return preg_replace("@\s*//.*$@", '', $line);
		},
		$lines
		);
		$buffer = implode("\n", $lines);
		/* remove tabs, spaces, newlines, etc. */
		$buffer = str_replace(array("\r\n","\r","\n","  ","    ","     "), "", $buffer);
		/* remove other spaces before/after ) */
		$buffer = preg_replace(array('(( )+\))','(\)( )+)'), ')', $buffer);
		return $buffer;
    }

	public function assetPath ($path = null, $type = null) {
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
				break;
			case ('js') :
				$absolutePath['pathPrefix'] = 'js';
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

		if ( is_file( $absolutePath ) && is_readable( $absolutePath ) ) {
			return $absolutePath;
		} elseif ( is_file( $absolutePath . '.' . $type ) && is_readable( $absolutePath . '.' . $type ) ) {
			return $absolutePath . '.' . $type;
		}
		
		return false;
	}
	
}
