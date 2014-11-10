<?php
App::import('Helper', 'Html') ;

class ImageToolsHelper extends AppHelper {
	public $helpers = array(
		'Html', 
		'CakeBootstrap.Bootstrap', 
		'CakeBootstrap.Minify'
	);

	private $defaultParams = array(
		'imageFill' => array(
			'containerClass' => 'imagefill', 
			'runOnce' => true
		)
	);

	private $params = array(
		'imageFill' => array()
	);


	private $loadResources = array(
		'imageFill' => false
	);
	private $resourcesLoaded = array(
		'imageFill' => false
	);

	public function beforeLayout($layoutFile = null) {
/*
		if ( in_array(true, $this->loadResources) && !in_array(true, $this->resourcesLoaded) ) {
			$this->Html->css(
				array_filter(
					array(
						'CakeBootstrap.image-tools'
					)
				), 
				array(
					'inline' => false, 
					'media' => 'screen'
				)
			);
		}
*/
		if ( $this->loadResources['imageFill'] && !$this->resourcesLoaded['imageFill'] ) {
			$this->Html->script(
				array(
					'CakeBootstrap./imagefill/js/jquery-imagefill'
				), 
				array(
					'inline' => false, 
					'block' => 'helperScript', 
					'once' => true
				)
			);
			$this->Html->scriptBlock(
				'
					$(function(){
						$(".' . $this->params['imageFill']['containerClass'] . '").imagefill({
							runOnce: ' . ( $this->params['imageFill']['runOnce'] ? 'true' : 'false' ) . '
						});
						
					});
				',
				array(
					'inline' => false, 
					'block' => 'helperScript'
				)
			);
			$this->resourcesLoaded['imageFill'] = true;
		}
	}

	public function setParams( $plugin = null, $params = null ) {
		$this->params[$plugin] = array_merge(
			$this->defaultParams[$plugin], 
			(array)$params
		);
	}

	public function imageFill ($content = null, $params = null, $options = null) {
		$this->setParams('imageFill', $params);

		$html = '';
		if (!empty($content)) {
			$options = array_merge(
				array(
					'class' => $this->params['imageFill']['containerClass'], 
					'style' => $this->Html->style(array(
						'position' => 'absolute', 
						'top' => '0px', 
						'left' => '0px', 
						'right' => '0px', 
						'bottom' => '0px'
					))
				), 
				(array)$options
			);

			foreach ((array)$content as $row) {
				$html .= $this->Html->tag(
					'div', 
					$row, 
					$options
				);
			}

			$this->loadResources['imageFill'] = true;
		}

		return $html;
	}
	
	
	
}
