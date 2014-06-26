<?php
App::uses('File', 'Utility');
class MinifyController extends CakeBootstrapAppController {

	public $components = array(
		'CakeBootstrap.AssetMinify', 
		'RequestHandler'
	);

    public function beforeFilter() {
		parent::beforeFilter();

		$this->Auth->allow(array(
			'css', 
			'js'
		));

/*
		if ($this->request->is('ajax')) {
			$this->layout = 'CakeBootstrap.ajax';
		}
*/

	}
	
	private function fileContents($path) {
		if (is_file($path)) {
			$file = new File($path);
			$contents = $file->read();
			$file->close();
			return $contents;
		}
		return false;
	}	
	
	public function css () {
		$type = 'css';

		$absolutePath = $this->AssetMinify->assetPath(
			implode('/', $this->request->pass), 
			$type
		);
		if ( $absolutePath && (strtolower(pathinfo($absolutePath, PATHINFO_EXTENSION)) === $type) ) {
			$contents = $this->fileContents($absolutePath);
	
			if ($contents) {
				$contents = ( strtolower(pathinfo($absolutePath, PATHINFO_EXTENSION)) === $type ? $this->AssetMinify->compress_css($contents) : $contents );
	
				$this->response->body( $contents );
				$this->response->type( strtolower(pathinfo($absolutePath, PATHINFO_EXTENSION)) );
			    return $this->response;
			}
		} elseif ( $absolutePath ) {
			$this->response->file( $absolutePath );
			return $this->response;
		}

		exit();
	}

	public function js () {
		$type = 'js';

		$absolutePath = $this->AssetMinify->assetPath(
			implode('/', $this->request->pass), 
			$type
		);
		if ( $absolutePath && (strtolower(pathinfo($absolutePath, PATHINFO_EXTENSION)) === $type) ) {
			$contents = $this->fileContents($absolutePath);
	
			if ($contents) {
				$contents = ( strtolower(pathinfo($absolutePath, PATHINFO_EXTENSION)) === $type ? $this->AssetMinify->compress_js($contents) : $contents );
	
				$this->response->body( $contents );
				$this->response->type( strtolower(pathinfo($absolutePath, PATHINFO_EXTENSION)) );
			    return $this->response;
			}
		} elseif ( $absolutePath ) {
			$this->response->file( $absolutePath );
			return $this->response;
		}

		exit();
	}

}
