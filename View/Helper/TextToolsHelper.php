<?php
App::import('Helper', 'Html') ;

class TextToolsHelper extends AppHelper {
	public $helpers = array(
		'Html', 
		'CakeBootstrap.Minify'
	);

	private $defaultParams = array(
		'fitText' => array(
			'containerClass' => 'fittext', 
			'compressor' => 1, 
			'minFontSize' => 10, 
			'maxFontSize' => 528, 
			'style' => array(), 
			'center' => false, 
			'size' => false
		), 
		'bigText' => array(
			'containerClass' => 'bigtext', 
			'style' => array(), 
			'separator' => "\n", 
			'minFontSize' => 10, 
			'maxFontSize' => 528, 
			'resize' => false
		), 
		'textTailor' => array(
			'minFont' => 1, 		// minimum font (use with fit: true)
			'maxFont' => 9999, 		// maximum font (use with fit: true)
			'preWrapText' => false,	// adds css -> white-space: pre-line
			'lineHeight' => 1.45, 	// line-height property
			'resizable' => true, 	// tailor again on window resize
			'debounce' => false, 	// use with resizable: true
			'fit' => true,  		// fit the text to the parent's height and width
			'ellipsis' => true, 	// ellipsis the text if it doesn't fit
			'center' => false, 		// absolute center relatively to the parent
			'justify' => false 		// adds css -> text-align: justify
		)
	);

	private $params = array();


	private $loadResources = array(
		'fitText' => false, 
		'bigText' => false, 
		'textTailor' => false
	);
	private $resourcesLoaded = array(
		'fitText' => false, 
		'bigText' => false, 
		'textTailor' => false
	);

	public function beforeLayout($layoutFile = null) {
		if ( in_array(true, $this->loadResources) && !in_array(true, $this->resourcesLoaded) ) {
			$this->Minify->css(
				array_filter(
					array(
						'CakeBootstrap.text-tools'
					)
				), 
				array(
					'inline' => false, 
					'media' => 'screen'
				)
			);
		}
		if ( $this->loadResources['fitText'] && !$this->resourcesLoaded['fitText'] ) {
			$this->Minify->script(
				array(
					'CakeBootstrap./FitText/jquery.fittext'
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
						$(".' . $this->params['fitText']['containerClass'] . '").fitText(' . $this->params['fitText']['compressor'] . ', {
							minFontSize: "' . $this->params['fitText']['minFontSize'] . '", 
							maxFontSize: "' . $this->params['fitText']['maxFontSize'] . '"
						});
					});
				',
				array(
					'inline' => false, 
					'block' => 'helperScript'
				)
			);
			$this->resourcesLoaded['fitText'] = true;
		}
		if ( $this->loadResources['bigText'] && !$this->resourcesLoaded['bigText'] ) {
			$this->Html->script(
				array(
					'https://raw.githubusercontent.com/zachleat/BigText/master/src/bigtext.js'
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
						$(".' . $this->params['bigText']['containerClass'] . '").bigtext({
							resize: ' . ($this->params['bigText']['resize']?'true':'false') . ', 
							minfontsize: "' . $this->params['bigText']['minFontSize'] . '", 
							maxfontsize: "' . $this->params['bigText']['maxFontSize'] . '"
						});
					});
				',
				array(
					'inline' => false, 
					'block' => 'helperScript'
				)
			);
			$this->resourcesLoaded['bigText'] = true;
		}
		if ( $this->loadResources['textTailor'] && !$this->resourcesLoaded['textTailor'] ) {
			$this->Html->script(
				array(
					'http://jpntex.com/texttailor/jquery.texttailor.js'
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
							$(".textTailor").textTailor({
							minFont: ' . $params['textTailor']['minFont'] . ',									// minimum font (use with fit: true)
							maxFont: ' . $params['textTailor']['maxFont'] . ',									// maximum font (use with fit: true)
							preWrapText: ' . ( $params['textTailor']['preWrapText'] ? 'true' : 'false' ) . ',	// adds css -> white-space: pre-line
							lineHeight: ' . $params['textTailor']['lineHeight'] . ',							// line-height property
							resizable: ' . ( $params['textTailor']['resizable'] ? 'true' : 'false' ) . ',		// tailor again on window resize
							debounce: ' . ( $params['textTailor']['debounce'] ? 'true' : 'false' ) . ',			// use with resizable: true
							fit: ' . ( $params['textTailor']['fit'] ? 'true' : 'false' ) . ',					// fit the text to the parent\'s height and width
							ellipsis: ' . ( $params['textTailor']['ellipsis'] ? 'true' : 'false' ) . ',			// ellipsis the text if it doesn\'t fit
							center: ' . ( $params['textTailor']['center'] ? 'true' : 'false' ) . ',				// absolute center relatively to the parent
							justify: ' . ( $params['textTailor']['justify'] ? 'true' : 'false' ) . '			// adds css -> text-align: justify
						});
			
					});
				',
				array(
					'inline' => false, 
					'block' => 'helperScript'
				)
			);
			$this->resourcesLoaded['textTailor'] = true;
		}
	}

	public function setParams( $plugin = null, $params = null ) {
		$this->params[$plugin] = array_merge(
			$this->defaultParams[$plugin], 
			(array)$params
		);
	}

	public function fitText ($content = null, $params = null, $options = null) {
		$this->setParams('fitText', $params);
		$this->params['fitText']['compressor'] = round($this->params['fitText']['compressor'], 1);
		$this->params['fitText']['minFontSize'] = ( is_integer($this->params['fitText']['minFontSize']) ? $this->params['fitText']['minFontSize'] . 'px' : $this->params['fitText']['minFontSize'] );
		$this->params['fitText']['maxFontSize'] = ( is_integer($this->params['fitText']['maxFontSize']) ? $this->params['fitText']['maxFontSize'] . 'px' : $this->params['fitText']['maxFontSize'] );

		$html = '';
		if (!empty($content)) {
			$options = array_merge(
				array(
					'class' => $this->params['fitText']['containerClass'], 
					'style' => $this->Html->style(array_merge(
						array_filter(array(
							'text-align' => ( $this->params['fitText']['center'] ? 'center' : null ), 
							'font-size' => ( $this->params['fitText']['size'] ? $this->params['fitText']['size'] : null )
						)), 
						(array)$this->params['fitText']['style']
					))
				), 
				(array)$options
			);

			$contentHtml = '';
			foreach ((array)$content as $row) {
				$contentHtml .= $this->Html->tag(
					'div', 
					$row
				);
			}
			$html .= $this->Html->tag(
				'div', 
				$contentHtml, 
				$options
			);

			$this->loadResources['fitText'] = true;
		}

		return $html;
	}
	
	public function bigText ($content = null, $params = null, $options = null) {
		$this->setParams('bigText', $params);

		$html = '';
		if (!empty($content)) {
			$options = array_merge(
				array(
					'class' => $this->params['bigText']['containerClass'], 
					'style' => $this->Html->style(array_merge(
						array_filter(array(
						)), 
						(array)$this->params['bigText']['style']
					))
				), 
				(array)$options
			);
			
			if (!is_array($content)) {
				$content = explode($this->params['bigText']['separator'], $content);
			}

			$contentHtml = '';
			foreach ((array)$content as $row) {
				$contentHtml .= $this->Html->tag(
					'span', 
					$row
				);
			}
			$html .= $this->Html->tag(
				'div', 
				$contentHtml, 
				$options
			);

			$this->loadResources['bigText'] = true;
		}

		return $html;
	}
	
	public function textTailor ($content = null, $params = null, $options = null) {
		$this->setParams('textTailor', $params);

		$html = '';
		if (!empty($content)) {
			$options = array_merge(
				array(
					'class' => $this->params['textTailor']['containerClass'], 
					'style' => $this->Html->style(array_merge(
						array_filter(array(
						)), 
						(array)$this->params['textTailor']['style']
					))
				), 
				(array)$options
			);
			$contentHtml = '';
			foreach ((array)$content as $row) {
				$contentHtml .= $this->Html->tag(
					'span', 
					$row
				);
			}
			$html .= $this->Html->tag(
				'div', 
				$contentHtml, 
				$options
			);

			$this->loadResources['textTailor'] = true;
		}
		
		return $html;
	}
	
	
}
